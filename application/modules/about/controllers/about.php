<?php
defined('BASEPATH') or exit('No direct script access allowed');

class about extends MY_Controller
{
	public function index()
	{
		$this->load->view('header_footer/header_about');
		$this->load->view('content_about');
		$this->load->view('header_footer/footer_about');
	}
}
