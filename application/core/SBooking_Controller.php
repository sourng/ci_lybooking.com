<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SBooking_Controller extends CI_Controller {
	protected $data=array();

		public function __construct()
	{
		parent::__construct();
		$this->load->database();
		//$this->load->model('M_ps','m_ps',True);
		$this->load->model('M_Sourng','m_sourng',True);
	}

	public function layout(){
		// Home Page
		$this->template['head_main']=$this->load->view('templates/head_main',$this->data,TRUE);	

		$this->template['header_main']=$this->load->view('templates/header_main',$this->data,TRUE);	
		$this->template['menu_main']=$this->load->view('templates/menu_main',$this->data,TRUE);
		$this->template['search_main']=$this->load->view('templates/search_main',$this->data,TRUE);
		$this->template['hot_sale_today']=$this->load->view('templates/hot_sale_today',$this->data,TRUE);

		$this->template['top_travel_destination']=$this->load->view('templates/top_travel_destination',$this->data,TRUE);
		$this->template['main_content']=$this->load->view($this->main_content,$this->data,TRUE);

		$this->load->view('templates/v_main',$this->template);

		

	}
}
