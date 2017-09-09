<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotels extends CI_Controller {
	//private $limit=4;

		public function __construct()
	{
		parent::__construct();
		$this->load->database();
		//$this->load->model('M_ps','m_ps',True);
		$this->load->model('M_Sourng','m_sourng',True);
		$this->load->helper('text');
		 $this->load->library('pagination');
	}
	
	public function index($offset = 0)
	{
		
		// $data['getHotels']=$this->m_sourng->index($this->limit,$sql);

		$this->load->helper('text');
		$data['breadcrumb_1']="index";
		$data['breadcrumb_2']="Hotels";
		$data['breadcrumb_3']="Europe";
		$data['breadcrumb_4']="Netherlands";
		$data['title']="Hotel List Search Result";	
		

		// $data['getHotels']=$this->m_sourng->get_by_sql($sql,false);

		// $data['getHotels']=$this->m_sourng->index($this->limit,$offset);
		// $getHotels=$this->m_sourng->index($this->limit,$sql);

/*
		 //how many blogs will be shown in a page
        $limit = 3;
        $result = $this->m_sourng->get_hotels_page($limit, $offset);
        // $result = $this->m_sourng->getHotels($limit, $this->uri->segment(3));
        $data['getHotels'] = $result['rows'];
        $data['num_results'] = $result['num_rows'];
       
        $config = array();
        $config['base_url'] = site_url("hotels/index");
        $config['total_rows'] = 6;//$data['num_results'];
        $config['per_page'] = $limit;
        //which uri segment indicates pagination number
        $config['uri_segment'] = 3;
        $config['use_page_numbers'] = TRUE;
        //max links on a page will be shown
        $config['num_links'] = 6;//$data['num_results'];
        //various pagination configuration
        $config['full_tag_open'] = '<div class="page-navigation-cn"><ul class="page-navigation">';
        $config['full_tag_close'] = '</ul></div><!--pagination-->';
     	$config['first_link'] = '&laquo; First';
		$config['first_tag_open'] = '<li class="prev page">';
        $config['first_tag_close'] = '</li>';
		$config['last_link'] = 'Last &raquo;';
		$config['last_tag_open'] = '<li class="next page">';
		$config['last_tag_close'] = '</li>';
		$config['next_link'] = 'Next &rarr;';
		$config['next_tag_open'] = '<li class="next page">';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = '&larr; Previous';
		$config['prev_tag_open'] = '<li class="prev page">';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="current"><a href="">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li class="page">';
		$config['num_tag_close'] = '</li>';
		$config['display_pages'] = FALSE;
		// 
		$config['anchor_class'] = 'follow_link';

        //$this->load->library('pagination');
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();


*/

$limit=4;
        // Config setup
 $num_rows=$this->m_sourng->count_by_sql("SELECT * FROM hotels WHERE hotel_blocked='N'",false);
 // $config['base_url'] = base_url().'index.php/welcome/index';
 $config['base_url']=base_url("hotels/index");
 $config['total_rows'] = $num_rows;
 $config['per_page'] = $limit;
 $config['num_links'] = 5;//$num_rows;
 $config['use_page_numbers'] = TRUE;
 $config['full_tag_open'] = '<ul class="pagination">';
 $config['full_tag_close'] = '</ul>';
 $config['prev_link'] = '&laquo;';
 $config['prev_tag_open'] = '<li>';
 $config['prev_tag_close'] = '</li>';
 $config['next_tag_open'] = '<li>';
 $config['next_tag_close'] = '</li>';
 $config['cur_tag_open'] = '<li class="active"><a href="#">';
 $config['cur_tag_close'] = '</a></li>';
 $config['num_tag_open'] = '<li>';
 $config['num_tag_close'] = '</li>';

$config['next_link'] = '&raquo;';

 $this->pagination->initialize($config);
 $data['pagination'] = $this->pagination->create_links();
$data['getHotels']=$this->db->get('hotels', $limit,$offset);


		$data['body']= 'v_hotel_list';
		$data['hotel_count']=$this->m_sourng->count_by_sql("SELECT * FROM hotels WHERE hotel_blocked='N'",false);
		
		
		//$this->load->view('admin/desktop/dashboard',$data);
		$this->load->view('v_hotel_desktop',$data);	

		//$this->load->view('v_hotel_desktop',$data,compact('getHotels','page_link'));	

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
