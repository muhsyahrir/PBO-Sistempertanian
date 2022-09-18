<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends MY_Controller {
	public function index(){
		$this->load->view('header_login');
		$this->load->view('content_login');
		$this->load->view('footer_login');
	}
}
