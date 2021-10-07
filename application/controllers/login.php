<?php 

class login extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
		$this->load->model('m_area');
	}

	function index(){
		$this->load->view('login');
	}

	function aksi_login(){
		$nama = $this->input->post('nama');
		$password = $this->input->post('password');
		$data = array(
			'nama' => $nama,
			'password' => $password
			);
		$cek = $this->m_login->cek_login($data);
		if($cek != NULL){
            $result = $cek->result_array();
			$data = array(
                'username' => $result[0]['username'],
                'nama_lengkap' => $result[0]['nama_user'],
                'password' => $result[0]['password'],
                'kode_role' => $result[0]['kode_role'],
                'logged_in' => true
			);
			
			$cek = $this->m_login->getById($data['kode_role']);
			$data['posisi'] = $cek[0]->nama_role;

			$data = $this->session->set_userdata($data);
			
			redirect('welcome');

		}else{
			$data['failed'] = 'Email atau password salah.';
			$this->load->view('login', $data);
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}