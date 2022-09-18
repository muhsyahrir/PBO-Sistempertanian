<?php
defined('BASEPATH') or exit('No direct script access allowed');

class articles extends MY_Controller
{
	public function index()
	{
		$this->load->view('header_footer/header_articles');
		$this->load->view('content_articles');
		$this->load->view('header_footer/footer_articles');
	}
}
