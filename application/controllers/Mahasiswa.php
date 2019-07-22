<?php 

class Mahasiswa extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mahasiswa_model');
		$this->load->library('form_validation');
	}

	public function index(){
		
		$data['judul'] = 'Data Mahasiswa';
		$data['mahasiswa'] = $this->mahasiswa_model->getAllMahasiswa();
		$this->load->view('templates/header', $data);
		$this->load->view('mahasiswa/index', $data);
		$this->load->view('templates/footer');
		
	}

	public function tambah(){

		$data['judul'] = 'Form Tambah Data Mahasiswa';

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('nim', 'Nim', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

		if( $this->form_validation->run() == FALSE  ){
			$this->load->view('templates/header', $data);
			$this->load->view('mahasiswa/tambah');
			$this->load->view('templates/footer');
		} else {
			$this->mahasiswa_model->tambahDataMahasiswa();
			redirect('mahasiswa');
		}
		
		
	}
}