<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hotel extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('Hotels','hotels',TRUE);
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
        $totalRec = count($this->hotels->getRows());
        
        //pagination configuration
        $config['target']      = '#postList';
        $config['base_url']    = base_url().'hotel/ajaxPaginationData';
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
        
        $this->ajax_pagination->initialize($config);
        
        //get the posts data
        $data['hotel'] = $this->hotels->getRows(array('limit'=>$this->perPage));
        
        $data['hotel_count']=$this->m_sourng->count_by_sql("SELECT * FROM hotels WHERE hotel_blocked='N'",false);

        $data['dest']=$this->m_sourng->get_by_sql("SELECT * FROM destinations",false);

        $data['body']='hotels/v_list_hotels';
        //load the view
        $this->load->view('hotels/v_hotels_list', $data);
    }
    
   public function only_hotels($find)
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
        $totalRec = count($this->hotels->getRows());
        
        //pagination configuration
        $config['target']      = '#postList';
        $config['base_url']    = base_url().'hotel/ajaxPaginationData';
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
        
        $this->ajax_pagination->initialize($config);
        
        //get the posts data
        $data['hotel'] = $this->hotels->getRows(array('limit'=>$this->perPage));
        
        $data['hotel_count']=$this->m_sourng->count_by_sql("SELECT * FROM hotels WHERE hotel_blocked='N'",false);

        $data['dest']=$this->m_sourng->get_by_sql("SELECT * FROM destinations",false);

        $data['body']='hotels/v_list_hotels';
        //load the view
        $this->load->view('hotels/v_hotels_list', $data);
    }    
    
    
    function ajaxPaginationData()
    {
        $this->load->helper('text');
        $data['breadcrumb_1']="index";
        $data['breadcrumb_2']="Hotels";
        $data['breadcrumb_3']="Europe";
        $data['breadcrumb_4']="Netherlands";
        $data['title']="Hotel List Search Result";          

        $page = $this->input->post('page');
        if(!$page){
            $offset = 0;
        }else{
            $offset = $page;
        }
        
        //total rows count
        $totalRec = count($this->hotels->getRows());
        
        //pagination configuration
        $config['target']      = '#postList';
        $config['base_url']    = base_url().'hotel/ajaxPaginationData';
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
        
        $this->ajax_pagination->initialize($config);
        
        //get the posts data
        $data['hotel'] = $this->hotels->getRows(array('start'=>$offset,'limit'=>$this->perPage));        
        $data['hotel_count']=$this->m_sourng->count_by_sql("SELECT * FROM hotels WHERE hotel_blocked='N'",false);
        //load the view
       // $this->load->view('hotels/ajax-list-hotels', $data, false);
        $this->load->view('hotels/ajax-hotels-list', $data, false);
        
    }
    
    

function ajaxPaginationFind()
    {
        $this->load->helper('text');
        $data['breadcrumb_1']="index";
        $data['breadcrumb_2']="Hotels";
        $data['breadcrumb_3']="Europe";
        $data['breadcrumb_4']="Netherlands";
        $data['title']="Hotel List Search Result";          

        $page = $this->input->post('page');
        if(!$page){
            $offset = 0;
        }else{
            $offset = $page;
        }
        
        //total rows count
        $totalRec = count($this->hotels->getRows());
        
        //pagination configuration
        $config['target']      = '#postList';
        $config['base_url']    = base_url().'hotel/ajaxPaginationFind';
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
        
        $this->ajax_pagination->initialize($config);
        
        //get the posts data
        $data['hotel'] = $this->hotels->FindRows(array('start'=>$offset,'limit'=>$this->perPage,'find'=>$find));
        
        $data['hotel_count']=$this->m_sourng->count_by_sql("SELECT * FROM hotels WHERE hotel_blocked='N'",false);

        //load the view
       // $this->load->view('hotels/ajax-list-hotels', $data, false);
        $this->load->view('hotels/ajax-hotels-list', $data, false);
        
    }

public function find()
    {
        //$this->load->helper('text');
        $find=$this->input->post('txtdestination');

        $data = array();
        $data['breadcrumb_1']="index";
        $data['breadcrumb_2']="Hotels";
        $data['breadcrumb_3']="Europe";
        $data['breadcrumb_4']="Netherlands";
        $data['title']="Hotel List Search Result";  
       
        $data['starOrder']=$this->input->post['txtStar'];
        $starOrder=4;
        //total rows count
        $totalRec = count($this->hotels->getRows());
        
        //pagination configuration
        $config['target']      = '#postList';
        $config['base_url']    = base_url().'hotel/ajaxPaginationFind';
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
        
        $this->ajax_pagination->initialize($config);
        
        //get the posts data
        //$data['hotel'] = $this->hotels->FindRows(array('limit'=>$this->perPage,'starorder'=>$this->starOrder,'find'=>$find));
        $data['hotel'] = $this->hotels->FindRows(array('find'=>$find));
        
        $data['hotel_count']=$this->m_sourng->count_by_sql("SELECT * FROM hotels WHERE hotel_blocked='N'",false);

        $data['dest']=$this->m_sourng->get_by_sql("SELECT * FROM destinations",false);

        $data['body']='hotels/v_list_hotels';
        //load the view
        $this->load->view('hotels/v_hotels_list', $data);
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


public function get_hotels()
	{    
		 //total rows count
        $totalRec = count($this->hotels->getRows());
        
        //pagination configuration
        $config['target']      = '#postList';
        $config['base_url']    = base_url().'hotel/ajaxPaginationData';
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;        
        $this->ajax_pagination->initialize($config);

		$table = '';
		$sql="SELECT distinct d.dest_id, h.hotel_id,h.h_name,h.star_rating,h.h_facilities,h.h_feature_image,h.province,d.destinations,d.dest_id,d.dest_landmark,d.country,count(h.hotel_id) as pro_counts FROM hotels as h INNER JOIN destinations as d ON h.dest_id=d.dest_id GROUP BY d.dest_id";
		// $top_sales = $this->m_ps->get_top_hotels();
		$top_dest=$this->m_sourng->get_by_sql_json($sql);
		if (count($top_dest)>0)
		{
			foreach ($top_dest as $key => $rows){
				$table.='<div class="hotel-list-item">
                                        <figure class="hotel-img float-left">
                                            <a href="hotel-detail.html" title="">
                                                <img src="'. base_url() .'uploads/hotels/'. $rows->h_feature_image.'" alt="">
                                            </a>
                                        </figure>
                                        <div class="hotel-text">
                                            <div class="hotel-name">
                                                <a href="hotel-detail.html" title="">'. $rows->h_name.'</a>
                                            </div>
                                            <div class="hotel-star-address">
                                                <span class="hotel-star">';
                                
                                                if($rows->star_rating>0){
                                                    for($i=1;$i<= $rows->star_rating;$i++){                                                     
                                                 $table.=' <i class="glyphicon glyphicon-star"></i> ';                                                   
                                                    }
                                                }else{                                                 
                                                $table.=' <i class="glyphicon glyphicon-star-empty"></i> ';                                                 
                                                }                                          

                                               $table.=' </span>
                                                <span class="rating">
                                                    Good <br>
                                                    <ins>7.5</ins>
                                                </span>
                                                <address class="hotel-address">
                                                    '. $rows->h_name.'
                                                </address>
                                            </div>
                                            <p>
                                                My stay at cumberland hotel was amazing, loved the location, was close to all the major attractions allthough there rooms seemed... <a href="" title="">view all 125 reviews</a>
                                            </p>
                                            <hr class="hr">
                                            <div class="price-box float-left">
                                                <span class="price old-price">From-</span>
                                                <span class="price special-price">$345<small>/night</small></span>
                                            </div>
                                            <div class="hotel-service float-right">
                                            '. $rows->h_facilities.'
                                               
                                            </div>
                                        </div>
                                    </div>';
                               

			}  //End foreach
			echo json_encode($table);
		}
	}

    // Search
    public function search($q)
    {
        
         //total rows count
        $totalRec = count($this->hotels->getRows());
        
        //pagination configuration
        $config['target']      = '#postList';
        $config['base_url']    = base_url().'hotel/ajaxPaginationData';
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
        
        $this->ajax_pagination->initialize($config);
        
        //get the posts data
        $data['hotel'] = $this->hotels->getRows(array('limit'=>$this->perPage));  
        
        
        
        
        $table = '';
       // $hotels = $this->crud_model->search($q);
        $sql="SELECT  d.dest_id, h.hotel_id,h.h_name,h.star_rating,h.h_facilities,h.h_feature_image,h.province,d.destinations,d.dest_id,d.dest_landmark,d.country,count(h.hotel_id) as pro_counts FROM hotels as h INNER JOIN destinations as d ON h.dest_id=d.dest_id   WHERE h.h_name like '%$q%' OR d.destinations LIKE '%$q%' GROUP BY d.dest_id";
       // $sql="SELECT distinct d.dest_id, h.hotel_id,h.h_name,h.star_rating,"
       //         . "h.h_facilities,h.h_feature_image,h.province,d.destinations,"
       //         . "d.dest_id,d.dest_landmark,d.country,count(h.hotel_id) as pro_counts "
       //         . "FROM hotels as h INNER JOIN destinations as d ON h.dest_id=d.dest_id GROUP BY d.dest_id WHERE h_name like %". $q ."%";
		// $top_sales = $this->m_ps->get_top_hotels();
        $hotels=$this->m_sourng->get_by_sql_json($sql);
        if (count($hotels)>0)
        {
            foreach ($hotels as $key => $rows){

                $table.='<div class="hotel-list-item">
                                        <figure class="hotel-img float-left">
                                            <a href="hotel-detail.html" title="">
                                                <img src="'. base_url() .'uploads/hotels/'. $rows->h_feature_image.'" alt="">
                                            </a>
                                        </figure>
                                        <div class="hotel-text">
                                            <div class="hotel-name">
                                                <a href="hotel-detail.html" title="">'. $rows->h_name.'</a>
                                            </div>
                                            <div class="hotel-star-address">
                                                <span class="hotel-star">';
                                
                                                if($rows->star_rating>0){
                                                    for($i=1;$i<= $rows->star_rating;$i++){                                                     
                                                 $table.=' <i class="glyphicon glyphicon-star"></i> ';                                                   
                                                    }
                                                }else{                                                 
                                                $table.=' <i class="glyphicon glyphicon-star-empty"></i> ';                                                 
                                                }                                          

                                               $table.=' </span>
                                                <span class="rating">
                                                    Good <br>
                                                    <ins>7.5</ins>
                                                </span>
                                                <address class="hotel-address">
                                                    '. $rows->h_name.'
                                                </address>
                                            </div>
                                            <p>
                                                My stay at cumberland hotel was amazing, loved the location, was close to all the major attractions allthough there rooms seemed... <a href="" title="">view all 125 reviews</a>
                                            </p>
                                            <hr class="hr">
                                            <div class="price-box float-left">
                                                <span class="price old-price">From-</span>
                                                <span class="price special-price">$345<small>/night</small></span>
                                            </div>
                                            <div class="hotel-service float-right">
                                            '. $rows->h_facilities.'
                                               
                                            </div>
                                        </div>
                                    </div>';
                                               

            }  //End foreach
            echo json_encode($table);
        }
        

    }

    
    
    
    
    

}