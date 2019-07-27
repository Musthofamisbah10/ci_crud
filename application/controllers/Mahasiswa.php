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

		// set flash data
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('nim', 'Nim', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

		// flash data
		if( $this->form_validation->run() == FALSE  ){
			$this->load->view('templates/header', $data);
			$this->load->view('mahasiswa/tambah');
			$this->load->view('templates/footer');
		} else {
			$this->mahasiswa_model->tambahDataMahasiswa();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('mahasiswa');
		}
		
	}

	public function hapus($id)
	{
		$this->mahasiswa_model->hapusDataMahasiswa($id);

		// flashdata
		$this->session->set_flashdata('flash', 'Dihapus');

		redirect('mahasiswa');

	}

	public function detail($id)
	{
		$data['judul'] = 'Detail Mahasiswa';
		$data['mahasiswa'] = $this->mahasiswa_model->getMahasiswaById($id);
		$this->load->view('templates/header', $data);
		$this->load->view('mahasiswa/detail', $data);
		$this->load->view('templates/footer');
		
	}

	public function ubah($id){

		$data['judul'] = 'Form Ubah Data Mahasiswa';
		$data['mahasiswa'] = $this->mahasiswa_model->getMahasiswaById($id);
		$data['jurusan'] = ['Teknik Informatika', 'Teknik Komputer', 'Manajemen Informatika', 'Sistem Informasi', 'Akuntansi'];

		// set flash data
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('nim', 'Nim', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

		// flash data
		if( $this->form_validation->run() == FALSE  ){
			$this->load->view('templates/header', $data);
			$this->load->view('mahasiswa/ubah', $data);
			$this->load->view('templates/footer');
		} else {
			$this->mahasiswa_model->ubahDataMahasiswa();
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('mahasiswa');
		}
		
	}
}