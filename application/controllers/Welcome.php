<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('m_cek');
		$this->load->model('m_masterData');
	}

	public function index()
	{
		if($this->session->has_userdata('logged_in') == TRUE){
			$this->session->page = "dashboard";
			$data['nama_lengkap'] = $this->session->userdata('nama_lengkap');
			$data['posisi'] = $this->session->userdata('posisi');
			$this->load->view('header', $data);
			$this->load->view('dashboard');
			$this->load->view('footer');
		}else{
			redirect(base_url('login'));
		}
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function print_kartu()
	{
		if($this->session->has_userdata('logged_in') == TRUE){
			$this->session->page = "print_kartu";
			$data['nama_lengkap'] = $this->session->userdata('nama_lengkap');
			$data['posisi'] = $this->session->userdata('posisi');
			$cek['cek'] = 1;

			$this->load->view('header', $data);
			$this->load->view('print-kartu', $cek);
			$this->load->view('footer');
		}else{
			redirect(base_url('login'));
		}
	}

	public function cari_print()
	{
		$nikes = $this->input->post('nikes');
		$cek['print'] = $this->m_cek->cekDataByNIKES($nikes);

		if($this->session->has_userdata('logged_in') == TRUE){
			$data['nama_lengkap'] = $this->session->userdata('nama_lengkap');
			$data['posisi'] = $this->session->userdata('posisi');
			$this->load->view('header', $data);
			$this->load->view('print-kartu', $cek);
			$this->load->view('footer');
		}else{
			redirect(base_url('login'));
		}
	}

	public function cek_kepesertaan()
	{
		if($this->session->has_userdata('logged_in') == TRUE){
			$this->session->page = "cek_kepesertaan";
			$data['nama_lengkap'] = $this->session->userdata('nama_lengkap');
			$data['posisi'] = $this->session->userdata('posisi');
			$cek['cek'] = 1;

			$this->load->view('header', $data);
			$this->load->view('cek-kepesertaan', $cek);
			$this->load->view('footer');
		}else{
			redirect(base_url('login'));
		}
	}

	public function cari_kepesertaan()
	{
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$cek['print'] = $this->m_cek->cekDataByNIKNAMA($nik, $nama);
		//print_r($cek);
		if($this->session->has_userdata('logged_in') == TRUE){
			$data['nama_lengkap'] = $this->session->userdata('nama_lengkap');
			$data['posisi'] = $this->session->userdata('posisi');
			$this->load->view('header', $data);
			$this->load->view('cek-kepesertaan', $cek);
			$this->load->view('footer');
		}else{
			redirect(base_url('login'));
		}
		
	}

	public function cek_hak()
	{
		if($this->session->has_userdata('logged_in') == TRUE){
			$this->session->page = "cek_hak";
			$data['nama_lengkap'] = $this->session->userdata('nama_lengkap');
			$data['posisi'] = $this->session->userdata('posisi');
			$cek = $this->m_masterData->getArea();
			$band = $this->m_cek->getBandPosisiGroupByName();
			$kelas = $this->m_cek->getKelasRawat();

			$dat['area'] = $cek;
			$dat['band'] = $band;
			$dat['kelas'] = $kelas;

			$this->load->view('header', $data);
			$this->load->view('cek-hak', $dat);
			$this->load->view('footer');
		}else{
			redirect(base_url('login'));
		}
	}

}
