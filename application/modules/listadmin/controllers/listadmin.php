<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class listadmin extends MY_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('M_list_barang');
    }

	public function index(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['barang']=$this->M_list_barang->tampil()->result();
		$this->load->view('list', $data);
	
	}

     //Tambah barang
    public function tambah_aksi(){
		$nama	= $this->input->post('nama');
		$harga	= $this->input->post('harga');
		$stok	= $this->input->post('stok');
		$kategori	= $this->input->post('kategori');
		
		$data = array(
			'nama' => $nama,
			'harga' => $harga,
			'stok' => $stok,
			'kategori' => $kategori,
		);
		$this->M_list_barang->tambah_barang($data, 'barang');
		redirect('listadmin');
	}
    //End

	//Update
		public function edit($id){
			
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();	
		$where = array('id' => $id);
		$data['barang'] = $this->M_list_barang->edit_barang($where, 'barang')->result();
		$this->load->view('edit', $data); 
	}
	public function update(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$harga = $this->input->post('harga');
		$stok = $this->input->post('stok');
		$kategori = $this->input->post('kategori');

		$data = array(
			'nama' => $nama,
			'harga' => $harga,
			'stok' => $stok,
			'kategori' => $kategori

		);
		$where = array(
			'id' => $id
		);

		$this->M_list_barang->update_data($where,$data,'barang');
		redirect('listadmin');
	}
	//End

	//Delete
		public function hapus($id){
		$where = array('id' => $id);
		$this->M_list_barang->hapus_data($where, 'barang');
		redirect('listadmin');
	}
	//End
}