<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	public function index()
	{
		//Call Admin Dash board
		$data['body']='admin/v_admin_list';
		$this->load->view('v_desktop_list',$data);
	}
}
