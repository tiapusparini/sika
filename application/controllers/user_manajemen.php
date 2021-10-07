<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_manajemen extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('m_userManajemen');
		$this->load->model('m_masterData');
	}

	public function role()
	{
		if($this->session->has_userdata('logged_in') == TRUE){
			$this->session->page = "role";
			$data['nama_lengkap'] = $this->session->userdata('nama_lengkap');
			$data['posisi'] = $this->session->userdata('posisi');
			$cek = $this->m_userManajemen->getRole();
			$dat['role'] = $cek;

			$this->load->view('header', $data);
			$this->load->view('user_manajemen/role-permissions', $dat);
			$this->load->view('footer');
		}else{
			redirect(base_url('login'));
		}
	}

	public function insertRoleP(){
		$nama = $this->input->post('namaRoleP');
		$kode = $this->input->post('kodeRoleP');
		$cek = $this->m_userManajemen->insertRoleP($kode, $nama);
		$this->role();
	}

	public function updateRoleP(){
		$nama = $this->input->post('namaRoleP');
		$kode = $this->input->post('kodeRoleP');
		$cek = $this->m_userManajemen->updateRoleP($kode, $nama);
		$this->role();
	}

	public function deleteRoleP(){
		$kode = $this->input->post('kode_RoleP');
		$cek = $this->m_userManajemen->deleteRoleP($kode);
		$this->role();
	}

	public function data_users()
	{
		if($this->session->has_userdata('logged_in') == TRUE){
			$this->session->page = "data_users";
			$data['nama_lengkap'] = $this->session->userdata('nama_lengkap');
			$data['posisi'] = $this->session->userdata('posisi');
			$cek = $this->m_userManajemen->getUsers();
			$area = $this->m_masterData->getArea();
			$role = $this->m_masterData->getRole();
			$dat['users'] = $cek;
			$dat['area'] = $area;
			$dat['role'] = $role;

			$this->load->view('header', $data);
			$this->load->view('user_manajemen/data-users', $dat);
			$this->load->view('footer', $dat);
		}else{
			redirect(base_url('login'));
		}
	}

	public function insertDataUsers(){
		$nama = $this->input->post('namaDataUsers');
		$username = $this->input->post('usernameDataUsers');
		$kode = $this->input->post('kodeDataUsers');
		$selectRole = $this->input->post('selectRoleDataUsers');
		$selectArea = $this->input->post('selectAreaDataUsers');
		$status = $this->input->post('radioDataUsers');
		$password ='yakes';
		$cek = $this->m_userManajemen->insertDataUsers($kode, $nama, $username, $password, $selectRole, $selectArea, $status);
		//print_r($cek);
		$this->data_users();
	}

	public function updateDataUsers(){
		$nama = $this->input->post('namaDataUsers');
		$kode = $this->input->post('kodeDataUsers');
		$selectRole = $this->input->post('selectRoleDataUsers');
		$selectArea = $this->input->post('selectAreaDataUsers');
		$status = $this->input->post('radioDataUsers');
		$cek = $this->m_userManajemen->updateDataUsers($kode, $nama, $selectRole, $selectArea, $status);
		//print_r($cek);
		$this->data_users();
	}

	public function deleteDataUsers(){
		$kode = $this->input->post('kode_DataUsers');
		$cek = $this->m_userManajemen->deleteDataUsers($kode);
		$this->data_users();
	}

	public function modules()
	{
		if($this->session->has_userdata('logged_in') == TRUE){
			$this->session->page = "modules";
			$data['nama_lengkap'] = $this->session->userdata('nama_lengkap');
			$data['posisi'] = $this->session->userdata('posisi');
			$cek = $this->m_userManajemen->getModules();
			$dat['modules'] = $cek;

			$this->load->view('header', $data);
			$this->load->view('user_manajemen/modules', $dat);
			$this->load->view('footer');
		}else{
			redirect(base_url('login'));
		}
	}
}
