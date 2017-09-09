<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {
		public function __construct()
	{
		parent::__construct();
		$this->load->database();
		//$this->load->model('M_ps','m_ps',True);
		$this->load->model('M_Sourng','m_sourng',True);
	}
	
	public function index()
	{

		$data['title']="Hotel List Search Result";			
		$data['body']= 'v_home';
		$data['dest_count']=$this->m_sourng->count_by_sql("SELECT count(dest_id) as count_dest FROM hotels GROUP BY dest_id",false);

		$data['hotel_count']=$this->m_sourng->count_by_sql("SELECT * FROM hotels WHERE hotel_blocked='N'",false);
		//$data['body']='v_hotsales';
		//$this->load->view('admin/desktop/dashboard',$data);
		$this->load->view('v_hotel_desktop',$data);		
	}

	public function hotels()
	{
		$data['title']="Hotel List Search Result";			
		$data['body']= 'v_hotel_list';
		$data['hotel_count']=$this->m_sourng->count_by_sql("SELECT * FROM hotels WHERE hotel_blocked='N'",false);
		//$this->load->view('admin/desktop/dashboard',$data);
		$this->load->view('v_hotel_desktop',$data);
	}

	// Get Top Sale Hotels
	public function hotel_top_sale()
	{
		// $data['title']="Hotel List Search Result";			
		// $data['body']= 'v_home';

		$table = '';
		//$sql="SELECT * FROM hotels";
		 $top_sales = $this->m_sourng->get_top_hotels();
		//$top_sales=$this->m_ps->get_by_sql("SELECT * FROM hotels");
		if (count($top_sales)>0)
		{
			foreach ($top_sales as $key => $rows){
						$table.='<div class="col-xs-6 col-md-3">';
                            $table.='<div class="sales-item">';
                                $table.='<figure class="home-sales-img">';
                                   $table.='<a href="" title="'. $rows->h_name.'">';
                                    $table.='<img src="'. base_url() .'uploads/hotels/'. $rows->h_feature_image.'" alt="">';
                                    $table.='</a>';
                                   $table.=' <figcaption>Save <span>30</span>%</figcaption></figure>';
                                $table.='<div class="home-sales-text">';
                                   $table.=' <div class="home-sales-name-places">';
                                       $table.='<div class="home-sales-name">';
                                         $table.='<a href="#'. $rows->hotel_id.'" title="">'. $rows->h_name.'</a>';
                                        $table.='</div>';
                                        $table.='<div class="home-sales-places">';
                                            $table.='<a href="" title="">'. $rows->province.'</a>,';
                                           $table.='<a href="" title="">'. $rows->country.'</a>';
                                        $table.='</div>';
                                    $table.='</div>';
                                   $table.='<hr class="hr">';
                                   $table.='<div class="price-box">';
                                  $table.='<span class="price old-price">From  <del>$269</del></span>';
                                 $table.=' <span class="price special-price">$175<small>/night</small></span>';
                                 $table.='</div>';
                                $table.='</div>';
                            $table.='</div>';
                       $table.=' </div>';

			}  //End foreach
			echo json_encode($table);
		}
	}


	// Get Top Sale Hotels
	public function hotel_destinations()
	{
		// $data['title']="Hotel List Search Result";			
		// $data['body']= 'v_home';

		$table = '';
		$sql="SELECT h.hotel_id,h.h_name,h.h_feature_image,h.province,d.destinations,d.dest_id,d.dest_landmark,d.country FROM hotels as h INNER JOIN destinations as d ON h.dest_id=d.dest_id GROUP BY d.dest_id";
		// $top_sales = $this->m_ps->get_top_hotels();
		$top_sales=$this->m_sourng->get_by_sql_json($sql);
		if (count($top_sales)>0)
		{
			foreach ($top_sales as $key => $rows){
						$table.='<li>';
                        $table.='<a data-toggle="tab" href="#destinations-2"><i class="fa fa-map-marker"></i> '. $rows->province.'</a>';
                       $table.=' </li>';

			}  //End foreach
			echo json_encode($table);
		}
	}
	

// Get Destiantion Grid Front Page
	 // Destinations Grid 
	public function hotel_dest_grid()
	{
		// $data['title']="Hotel List Search Result";			
		// $data['body']= 'v_home';

		$table = '';
		$sql="SELECT h.hotel_id,h.h_name,h.h_feature_image,h.province,d.destinations,d.dest_id,d.dest_landmark,d.country,count(h.hotel_id) as pro_counts FROM hotels as h INNER JOIN destinations as d ON h.dest_id=d.dest_id GROUP BY d.dest_id";
		// $top_sales = $this->m_ps->get_top_hotels();
		$top_dest=$this->m_sourng->get_by_sql_json($sql);
		if (count($top_dest)>0)
		{
			foreach ($top_dest as $key => $rows){
						        $table.='<div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">';
                                        $table.='<div class="destinations-item ">';
                                            $table.='<div class="destinations-text">';
                                                $table.='<div class="destinations-name">';
                                                    $table.='<a href="" title="">'. $rows->destinations.'-'. $rows->country.'</a>';
                                                $table.='</div>';
                                                $table.='<span class="properties-nb">';
                                                    $table.='<ins>'. $rows->pro_counts.'</ins> properties';
                                                $table.='</span>';
                                            $table.='</div>';
                                            $table.='<figure class="destinations-img">';
                                                $table.='<a href="" title="">';
                                                    $table.='<img src="'. base_url() .'public/hotels/images/destinations/'. $rows->dest_landmark.'" alt="">';
                                                $table.='</a>';
                                            $table.='</figure>';
                                        $table.='</div>';
                                    $table.='</div>';

			}  //End foreach
			echo json_encode($table);
		}
	}


}
