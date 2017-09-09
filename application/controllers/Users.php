<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
		public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('M_ps','m_ps',True);
	}
	
	public function index()
	{
		$data['title']="Hotel List Search Result";			
		$data['body']= 'users/v_userprofile';
		//$data['body']='v_hotsales';
		//$this->load->view('admin/desktop/dashboard',$data);
		$this->load->view('v_hotel_desktop',$data);		
	}
	public function userreview()
	{

		$data['title']="Hotel List Search Result";			
		$data['body']= 'users/v_userreview';
		//$data['body']='v_hotsales';
		//$this->load->view('admin/desktop/dashboard',$data);
		$this->load->view('v_hotel_desktop',$data);		
	}
	public function usersetting()
	{

		$data['title']="Hotel List Search Result";			
		$data['body']= 'users/v_usersetting';
		//$data['body']='v_hotsales';
		//$this->load->view('admin/desktop/dashboard',$data);
		$this->load->view('v_hotel_desktop',$data);		
	}

}
