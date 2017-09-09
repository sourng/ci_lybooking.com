<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends SBooking_Controller {

	public function index()
	{
		//$this->load->view('welcome_message');
		$this->data['some_text']="Sourng Some Text";
		$this->main_content('welcome_message');
		$this->layout();
	}
}
