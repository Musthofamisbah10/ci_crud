<?php 

class Home extends CI_Controller{

	public function index($nama = 'bias'){
		
		$data['judul'] = 'Home CI_CRUD';
		$data['nama'] = $nama;
		$this->load->view('templates/header', $data);
		$this->load->view('home/index', $data);
		$this->load->view('templates/footer');
		
	}
}