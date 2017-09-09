<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {

	
	public function index()
	{
		//Call Staff Dash board
		$this->load->view('welcome_message');
	}
}
