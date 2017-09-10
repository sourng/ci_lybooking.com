<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotels extends CI_Controller {
	//private $limit=4;

		public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('M_Hotels','mh',TRUE);

        $this->load->model('M_Sourng','m_sourng',True);
        $this->load->library('Ajax_pagination');
        $this->load->helper('text');
        $this->load->database();
        $this->perPage = 2;
	}
	
	public function index($offset = 0)
	{
		
		// $data['getHotels']=$this->m_sourng->index($this->limit,$sql);
$data = array();
		$this->load->helper('text');
		$data['breadcrumb_1']="index";
		$data['breadcrumb_2']="Hotels";
		$data['breadcrumb_3']="Europe";
		$data['breadcrumb_4']="Netherlands";
		$data['title']="Hotel List Search Result";	
		


        
        //total rows count
        $totalRec = count($this->mh->getRows());
        
        //pagination configuration
        $config['target']      = '#postList';
        $config['base_url']    = base_url().'hotels/ajaxPaginationData';
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
        $config['link_func']   = 'searchFilter';
        $this->ajax_pagination->initialize($config);
        
        //get the posts data
        $data['hotel'] = $this->mh->getRows(array('limit'=>$this->perPage));

       $data['hotel_count']=$this->m_sourng->count_by_sql("SELECT * FROM hotels WHERE hotel_blocked='N'",false);
        $data['dest']=$this->m_sourng->get_by_sql("SELECT * FROM destinations",false);
        
		$data['body']='hotels/v_list_hotels';

		//$this->load->view('admin/desktop/dashboard',$data);
		$this->load->view('v_hotel_desktop',$data);	



}

 function ajaxPaginationData(){
        $conditions = array();
        
        //calc offset number
        $page = $this->input->post('page');
        if(!$page){
            $offset = 0;
        }else{
            $offset = $page;
        }
        
        //set conditions for search
        $keywords = $this->input->post('keywords');
        $sortBy = $this->input->post('sortBy');
        if(!empty($keywords)){
            $conditions['search']['keywords'] = $keywords;
        }
        if(!empty($sortBy)){
            $conditions['search']['sortBy'] = $sortBy;
        }
        
        //total rows count
        $totalRec = count($this->mh->getRows($conditions));
        
        //pagination configuration
        $config['target']      = '#postList';
        $config['base_url']    = base_url().'hotels/ajaxPaginationData';
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
        $config['link_func']   = 'searchFilter';
        $this->ajax_pagination->initialize($config);
        
        //set start and limit
        $conditions['start'] = $offset;
        $conditions['limit'] = $this->perPage;
        
        //get posts data
        $data['posts'] = $this->mh->getRows($conditions);
        
        //load the view
       $this->load->view('hotels/ajax-pagination-data', $data, false);
        // $this->load->view('hotels/ajax-hotels-list', $data, false);
    }

	public function detail($id)
	{
		$data['title']="Hotel List Search Result";	
		$data['breadcrumb_1']="index";
		$data['breadcrumb_2']="Hotels";
		$data['breadcrumb_3']="Asia/Cambodia";
		$data['breadcrumb_4']="Siem Reap";		
		//$data['body']= 'hotels/v_hotel_detail';
		//$this->load->view('admin/desktop/dashboard',$data);

		$sql="SELECT hotels.*,destinations.destinations,hotel_rooms.* 
		FROM hotels INNER JOIN destinations ON destinations.dest_id=hotels.dest_id 
		INNER JOIN hotel_rooms ON hotels.hotel_id=hotel_rooms.hotel_id 
		WHERE hotels.hotel_id=".$id;	
		$data['hotelDetail']=$this->m_sourng->get_by_sql($sql,false);

// Gallery Hotel
		$sql_h_gallery="SELECT * FROM hotel_gallery
		WHERE hotel_id=".$id;	
		$data['hotelGallery']=$this->m_sourng->get_by_sql($sql_h_gallery,false);
// Hotel Rooms
		$sql_h_Rooms="SELECT * FROM hotel_rooms
		WHERE hotel_id=".$id ." AND hr_status='Y'";	
		$data['hotelRooms']=$this->m_sourng->get_by_sql($sql_h_Rooms,false);

		//$data['header']="header";
		$this->load->view('hotels/v_hotel_detail',$data);	

	}
	
	public function booking()
	{
		$data['title']="Hotel List Search Result";			
		//$data['body']= 'hotels/v_hotel_detail';
		//$this->load->view('admin/desktop/dashboard',$data);
		$this->load->view('hotels/v_hotel_detail',$data);	

	}
	

}
