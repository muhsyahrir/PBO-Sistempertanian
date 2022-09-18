<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class regis2 extends MY_Controller 
{
	//untuk memanggil method construct yang ada pada CI
	public function __construct()
	{
		parent::__construct();
		
	}
	public function index()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]');
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

		if($this->form_validation->run() == false)
		{
			$this->load->view('header_regis2');
			$this->load->view('content_regis2');
			
		}else{
			$data = [
				'name' => htmlspecialchars($this->input->post('name', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'image' => 'default.jpg',
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id' => 2,
				'is_active' => 1,
				'date_created' => time()

			];

			$this->db->insert('user', $data);
			$this->session->set_flashdata('messsage','<div class="alert alert-success" role="alert">Your account has been created</div>');
			redirect('login2');
		}
	}
	
}