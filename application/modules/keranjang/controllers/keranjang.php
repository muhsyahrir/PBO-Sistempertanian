<?php
defined('BASEPATH') or exit('No direct script access allowed');

class keranjang extends MY_Controller
{
	public function index()
	{
		$this->load->view('header_footer/header_keranjang');
		$this->load->view('content_keranjang');
		$this->load->view('header_footer/footer_keranjang');
	}
}
