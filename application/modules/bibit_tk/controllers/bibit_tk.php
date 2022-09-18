<?php
defined('BASEPATH') or exit('No direct script access allowed');

class bibit_tk extends MY_Controller
{
	public function index()
	{
		$this->load->view('header_footer/header_categories');
		$this->load->view('content_bibit');
		$this->load->view('header_footer/footer_categories');
	}
	
public function tambah_keranjang($id){
		$barang = $this->m_barang->find($id);

		$data = array(
        'id'      => $barang->id,
        'qty'     => 1,
        'price'   => $barang->harga,
        'name'    => $barang->nama,
        

		);

		$this->cart->insert($data);
		redirect('ikan');
	}
}

