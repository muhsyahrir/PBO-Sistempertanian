<?php
defined('BASEPATH') or exit('No direct script access allowed');

class bibit_herbal extends MY_Controller
{
	public function index()
	{
		$this->load->view('header_footer/header_categories');
		$this->load->view('content_herbal');
		$this->load->view('header_footer/footer_categories');
	}
}
