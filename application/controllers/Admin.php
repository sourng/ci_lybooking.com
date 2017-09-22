<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('M_Hotels','mh',TRUE);
        $this->load->model('M_Sourng','m_sourng',True);
        $this->load->library('Ajax_pagination');
        $this->load->helper('text');
        $this->load->database();
        $this->perPage = 5;
       // $this->starOrder=4;

        $this->load->model('Crud_model','crud_model',True);
    }
    
    public function index()
    {
        $data = array();
         $data['breadcrumb_1']="index";
        $data['breadcrumb_2']="Hotels";
        $data['breadcrumb_3']="Europe";
        $data['breadcrumb_4']="Netherlands";
        $data['title']="Hotel List Search Result";  
       
        //$data['starOrder']=$this->input->post['txtStar'];
      //  $starOrder=4;
      
        
        //total rows count
        $totalRec = count($this->mh->getRows());
        
        //pagination configuration
        $config['target']      = '#postList';
        $config['base_url']    = base_url().'hotel/ajaxPaginationData';
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
        
        $this->ajax_pagination->initialize($config);
        
        //get the posts data
        $data['hotel'] = $this->mh->getRows(array('limit'=>$this->perPage));
        
        $data['hotel_count']=$this->m_sourng->count_by_sql("SELECT * FROM hotels WHERE hotel_blocked='N'",false);
        $data['dest']=$this->m_sourng->get_by_sql("SELECT * FROM destinations",false);

        $data['body']='hotels/v_list_hotels';
        //load the view
        $this->load->view('hotels/v_hotels_list', $data);
    }
    
    
    

}