<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bus extends CI_Controller {
	//private $limit=4;

		public function __construct()
	{
		parent::__construct();
		$this->load->database();
		//$this->load->model('M_ps','m_ps',True);
		$this->load->model('M_Sourng','m_sourng',True);
		$this->load->helper('text');
		// $this->load->library('pagination');

		 $this->load->library('Ajax_pagination');
		 $this->load->model('Post','post',True);

        $this->perPage = 3;
	}
	
	public function index()
	{
		
		// $data['getHotels']=$this->m_sourng->index($this->limit,$sql);

		$this->load->helper('text');
		$data['breadcrumb_1']="index";
		$data['breadcrumb_2']="Hotels";
		$data['breadcrumb_3']="Europe";
		$data['breadcrumb_4']="Netherlands";
		$data['title']="Hotel List Search Result";	
		

		
		$data = array();        
        //total rows count
        $totalRec = count($this->post->getRows());
        
        //pagination configuration
        $config['target']      = '#postList';
        $config['base_url']    = base_url().'Bus/ajaxPaginationData';
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
        $this->ajax_pagination->initialize($config);
        
        //get the posts data
        $data['getHotels'] = $this->post->getRows(array('limit'=>$this->perPage));
        
        //load the view
      //  $this->load->view('posts/index', $data);


		//$data['getHotels']=$this->db->get('hotels', $limit,$offset);


		$data['body']= 'v_hotel_list';
		$data['hotel_count']=$this->m_sourng->count_by_sql("SELECT * FROM hotels WHERE hotel_blocked='N'",false);
		
		
		//$this->load->view('admin/desktop/dashboard',$data);
		//$this->load->view('v_hotel_desktop',$data);	
		$this->load->view('bus/v_bus_list',$data);	

		//$this->load->view('v_hotel_desktop',$data,compact('getHotels','page_link'));	

	}


function ajaxPaginationData(){
        $page = $this->input->post('page');
        if(!$page){
            $offset = 0;
        }else{
            $offset = $page;
        }
        
        //total rows count
        $totalRec = count($this->post->getRows());
        
        //pagination configuration
        $config['target']      = '#postList';
        $config['base_url']    = base_url().'Bus/ajaxPaginationData';
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
        $this->ajax_pagination->initialize($config);
        
        //get the posts data
        $data['getHotels'] = $this->post->getRows(array('start'=>$offset,'limit'=>$this->perPage));
        
        //load the view
        $this->load->view('bus/ajax-bus', $data, false);
    }



	
	

}
