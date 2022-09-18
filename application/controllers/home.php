<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends MY_Controller {
	public function __construct(){ 
		parent::__construct();
		//$this->load->model("M_hobby");
	}
	
	public function index(){
		$this->load->view('header_home');
		$this->load->view('content_home');
		$this->load->view('footer_home');
	}
	
}
