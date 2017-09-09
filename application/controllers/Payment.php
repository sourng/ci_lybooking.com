<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {
		public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('M_ps','m_ps',True);
	}
	
	public function index()
	{

		$data['title']="Hotel List Search Result";			
		$data['body']= 'payments/v_payment';
		//$data['body']='v_hotsales';
		//$this->load->view('admin/desktop/dashboard',$data);
		$this->load->view('v_hotel_desktop',$data);		
	}
	public function paymentoffline()
	{

		$data['title']="Hotel List Search Result";			
		$data['body']= 'payments/v_payment_offline';
		//$data['body']='v_hotsales';
		//$this->load->view('admin/desktop/dashboard',$data);
		$this->load->view('v_hotel_desktop',$data);		
	}
	 
 




}
