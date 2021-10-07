<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class master_data extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('m_masterData');
		$this->load->model('m_cek');
	}

	// AREA
	public function area()
	{
		if($this->session->has_userdata('logged_in') == TRUE){
			$this->session->page = "area";
			$data['nama_lengkap'] = $this->session->userdata('nama_lengkap');
			$data['posisi'] = $this->session->userdata('posisi');
			$cek = $this->m_masterData->getArea();
			$dat['area'] = $cek;

			$this->load->view('header', $data);
			$this->load->view('master_data/area', $dat);
			$this->load->view('footer');
		}else{
			redirect(base_url('login'));
		}
	}

	public function insertArea(){
		$nama = $this->input->post('namaArea');
		$kode = $this->input->post('kodeArea');
		$cek = $this->m_masterData->insertArea($kode, $nama);
		$this->area();
	}

	public function editArea(){
		$nama = $this->input->post('namaArea');
		$kode = $this->input->post('kodeArea');
		$cek = $this->m_masterData->updateArea($kode, $nama);
		$this->area();
	}

	public function deleteArea(){
		$kode = $this->input->post('kode_area');
		$cek = $this->m_masterData->deleteArea($kode);
		$this->area();
	}

	// PERSONAL AREA
	public function personal_area()
	{
		if($this->session->has_userdata('logged_in') == TRUE){
			$this->session->page = "personal_area";
			$data['nama_lengkap'] = $this->session->userdata('nama_lengkap');
			$data['posisi'] = $this->session->userdata('posisi');
			$cek = $this->m_masterData->getPersonalArea();
			$dat['personalArea'] = $cek;
			$this->load->view('header', $data);
			$this->load->view('master_data/personal_area', $dat);
			$this->load->view('footer');
		}else{
			redirect(base_url('login'));
		}
	}

	public function insertPersonalArea(){
		$nama = $this->input->post('namaPersonalArea');
		$kode = $this->input->post('kodePersonalArea');
		$status = $this->input->post('radioPersonalArea');

		if($status == 'Aktif'){
			$status = '1';
		}else{
			$status = '0';
		}

		$cek = $this->m_masterData->insertPersonalArea($kode, $nama, $status);
		$this->personal_area();
	}

	public function updatePersonalArea(){
		$nama = $this->input->post('namaPersonalArea');
		$kode = $this->input->post('kodePersonalArea');
		$status = $this->input->post('radioPersonalArea');

		if($status == 'Aktif'){
			$status = '1';
		}else{
			$status = '0';
		}
		$cek = $this->m_masterData->updatePersonalArea($kode, $nama, $status);
		$this->personal_area();
	}

	public function deletePersonalArea(){
		$kode = $this->input->post('kode_personal_area');
		$cek = $this->m_masterData->deletePersonalArea($kode);
		$this->personal_area();
	}

	//PERSONAL SUB AREA
	public function personal_subarea()
	{
		if($this->session->has_userdata('logged_in') == TRUE){
			$this->session->page = "personal_subarea";
			$data['nama_lengkap'] = $this->session->userdata('nama_lengkap');
			$data['posisi'] = $this->session->userdata('posisi');
			$cek = $this->m_masterData->getPersonalSubArea();
			$dat['personalSubArea'] = $cek;

			$this->load->view('header', $data);
			$this->load->view('master_data/personal_subarea', $dat);
			$this->load->view('footer', $dat);
		}else{
			redirect(base_url('login'));
		}
	}

	public function insertPersonalSubArea(){
		$kodePersonalArea = $this->input->post('selectPersonalSubArea');
		$namaPersonalSubArea = $this->input->post('namaPersonalSubArea');
		$kodePersonalSubArea = $this->input->post('kodePersonalSubArea');
		$status = $this->input->post('radioPersonalSubArea');

		$cek = $this->m_masterData->insertPersonalSubArea($kodePersonalArea, $namaPersonalSubArea, $kodePersonalSubArea, $status);
		$this->personal_subarea();
	}

	public function updatePersonalSubArea(){
		$kodePersonalArea = $this->input->post('selectPersonalSubArea');
		$namaPersonalSubArea = $this->input->post('namaPersonalSubArea');
		$kodePersonalSubArea = $this->input->post('kodePersonalSubArea');
		$status = $this->input->post('radioPersonalSubArea');

		$cek = $this->m_masterData->updatePersonalSubArea($kodePersonalArea, $namaPersonalSubArea, $kodePersonalSubArea, $status);
		$this->personal_subarea();
	}

	public function deletePersonalSubArea(){
		$kode = $this->input->post('kode_personal_sub_area');
		$cek = $this->m_masterData->deletePersonalSubArea($kode);
		$this->personal_subarea();
	}

	//KELOMPOK PESERTA
	public function kelompok_peserta()
	{
		if($this->session->has_userdata('logged_in') == TRUE){
			$this->session->page = "kelompok_peserta";
			$data['nama_lengkap'] = $this->session->userdata('nama_lengkap');
			$data['posisi'] = $this->session->userdata('posisi');

			$cek = $this->m_masterData->getKelompokPeserta();
			$dat['kelompokPeserta'] = $cek;

			$this->load->view('header', $data);
			$this->load->view('master_data/kelompok-peserta', $dat);
			$this->load->view('footer');
		}else{
			redirect(base_url('login'));
		}
	}

	public function insertKelompokPeserta(){
		$nama = $this->input->post('namaKelompokPeserta');
		$kode = $this->input->post('kodeKelompokPeserta');
		$cek = $this->m_masterData->insertKelompokPeserta($kode, $nama);
		$this->kelompok_peserta();
	}

	public function updateKelompokPeserta(){
		$nama = $this->input->post('namaKelompokPeserta');
		$kode = $this->input->post('kodeKelompokPeserta');
		$cek = $this->m_masterData->updateKelompokPeserta($kode, $nama);
		$this->kelompok_peserta();
	}

	public function deleteKelompokPeserta(){
		$kode = $this->input->post('kode_KelompokPeserta');
		$cek = $this->m_masterData->deleteKelompokPeserta($kode);
		$this->kelompok_peserta();
	}

	public function grup_jenis()
	{
		if($this->session->has_userdata('logged_in') == TRUE){
			$this->session->page = "grup_jenis";
			$data['nama_lengkap'] = $this->session->userdata('nama_lengkap');
			$data['posisi'] = $this->session->userdata('posisi');

			$cek = $this->m_masterData->getGrupJenisPeserta();
			$dat['grupJenisPeserta'] = $cek;


			$this->load->view('header', $data);
			$this->load->view('master_data/grup-jenis-peserta', $dat);
			$this->load->view('footer');
		}else{
			redirect(base_url('login'));
		}
	}

	public function jenis_peserta()
	{
		if($this->session->has_userdata('logged_in') == TRUE){
			$this->session->page = "jenis_peserta";
			$data['nama_lengkap'] = $this->session->userdata('nama_lengkap');
			$data['posisi'] = $this->session->userdata('posisi');
			$cek = $this->m_masterData->getJenisPeserta();
			$dat['jenisPeserta'] = $cek;

			$this->load->view('header', $data);
			$this->load->view('master_data/jenis-peserta', $dat);
			$this->load->view('footer');
		}else{
			redirect(base_url('login'));
		}
	}

	public function rule_jenis_peserta()
	{
		if($this->session->has_userdata('logged_in') == TRUE){
			$this->session->page = "rule_jenis_peserta";
			$data['nama_lengkap'] = $this->session->userdata('nama_lengkap');
			$data['posisi'] = $this->session->userdata('posisi');
			$cek = $this->m_masterData->getRuleJenisPeserta();
			$dat['ruleJenisPeserta'] = $cek;

			$this->load->view('header', $data);
			$this->load->view('master_data/rule-jenis-peserta', $dat);
			$this->load->view('footer');
		}else{
			redirect(base_url('login'));
		}
	}

	public function instansi()
	{
		if($this->session->has_userdata('logged_in') == TRUE){
			$this->session->page = "instansi";
			$data['nama_lengkap'] = $this->session->userdata('nama_lengkap');
			$data['posisi'] = $this->session->userdata('posisi');
			$cek = $this->m_masterData->getInstansi();
			$dat['instansi'] = $cek;

			$this->load->view('header', $data);
			$this->load->view('master_data/instansi', $dat);
			$this->load->view('footer');
		}else{
			redirect(base_url('login'));
		}
	}

	public function pekerjaan()
	{
		if($this->session->has_userdata('logged_in') == TRUE){
			$this->session->page = "pekerjaan";
			$data['nama_lengkap'] = $this->session->userdata('nama_lengkap');
			$data['posisi'] = $this->session->userdata('posisi');
			$cek = $this->m_masterData->getPekerjaan();
			$dat['pekerjaan'] = $cek;

			$this->load->view('header', $data);
			$this->load->view('master_data/pekerjaan', $dat);
			$this->load->view('footer');
		}else{
			redirect(base_url('login'));
		}
	}

	public function divisi()
	{
		if($this->session->has_userdata('logged_in') == TRUE){
			$this->session->page = "divisi";
			$data['nama_lengkap'] = $this->session->userdata('nama_lengkap');
			$data['posisi'] = $this->session->userdata('posisi');
			$cek = $this->m_masterData->getDivisi();
			$dat['divisi'] = $cek;

			$this->load->view('header', $data);
			$this->load->view('master_data/divisi', $dat);
			$this->load->view('footer');
		}else{
			redirect(base_url('login'));
		}
	}

	public function bagian()
	{
		if($this->session->has_userdata('logged_in') == TRUE){
			$this->session->page = "bagian";
			$data['nama_lengkap'] = $this->session->userdata('nama_lengkap');
			$data['posisi'] = $this->session->userdata('posisi');
			$cek = $this->m_masterData->getBagian();
			$dat['bagian'] = $cek;

			$this->load->view('header', $data);
			$this->load->view('master_data/bagian', $dat);
			$this->load->view('footer');
		}else{
			redirect(base_url('login'));
		}
	}

	public function bank()
	{
		if($this->session->has_userdata('logged_in') == TRUE){
			$this->session->page = "bank";
			$data['nama_lengkap'] = $this->session->userdata('nama_lengkap');
			$data['posisi'] = $this->session->userdata('posisi');
			$cek = $this->m_masterData->getBank();
			$dat['bank'] = $cek;

			$this->load->view('header', $data);
			$this->load->view('master_data/bank', $dat);
			$this->load->view('footer');
		}else{
			redirect(base_url('login'));
		}
	}

	public function jenis_transaksi()
	{
		if($this->session->has_userdata('logged_in') == TRUE){
			$this->session->page = "jenis_transaksi";
			$data['nama_lengkap'] = $this->session->userdata('nama_lengkap');
			$data['posisi'] = $this->session->userdata('posisi');
			$cek = $this->m_masterData->getJenisTransaksi();
			$dat['jenisTransaksi'] = $cek;

			$this->load->view('header', $data);
			$this->load->view('master_data/jenis-transaksi', $dat);
			$this->load->view('footer');
		}else{
			redirect(base_url('login'));
		}
	}

	public function kelompok_transaksi()
	{
		if($this->session->has_userdata('logged_in') == TRUE){
			$this->session->page = "kelompok_transaksi";
			$data['nama_lengkap'] = $this->session->userdata('nama_lengkap');
			$data['posisi'] = $this->session->userdata('posisi');
			$cek = $this->m_masterData->getKelompokTransaksi();
			$dat['kelompokTransaksi'] = $cek;

			$this->load->view('header', $data);
			$this->load->view('master_data/kelompok-transaksi', $dat);
			$this->load->view('footer');
		}else{
			redirect(base_url('login'));
		}
	}

	public function band_posisi()
	{
		if($this->session->has_userdata('logged_in') == TRUE){
			$this->session->page = "band_posisi";
			$data['nama_lengkap'] = $this->session->userdata('nama_lengkap');
			$data['posisi'] = $this->session->userdata('posisi');
			$cek = $this->m_masterData->getBandPosisi();
			$dat['bandPosisi'] = $cek;

			$this->load->view('header', $data);
			$this->load->view('master_data/band-posisi', $dat);
			$this->load->view('footer');
		}else{
			redirect(base_url('login'));
		}
	}

	public function band_pensiun()
	{
		if($this->session->has_userdata('logged_in') == TRUE){
			$this->session->page = "band_pensiun";
			$data['nama_lengkap'] = $this->session->userdata('nama_lengkap');
			$data['posisi'] = $this->session->userdata('posisi');
			$cek = $this->m_masterData->getBandPensiunan();
			$dat['bandPensiun'] = $cek;

			$this->load->view('header', $data);
			$this->load->view('master_data/band-pensiun', $dat);
			$this->load->view('footer');
		}else{
			redirect(base_url('login'));
		}
	}

	public function kota_kantor()
	{
		if($this->session->has_userdata('logged_in') == TRUE){
			$this->session->page = "kota_kantor";
			$data['nama_lengkap'] = $this->session->userdata('nama_lengkap');
			$data['posisi'] = $this->session->userdata('posisi');
			$cek = $this->m_masterData->getKotaKantor();
			$dat['kotaKantor'] = $cek;

			$this->load->view('header', $data);
			$this->load->view('master_data/kota-kantor', $dat);
			$this->load->view('footer');
		}else{
			redirect(base_url('login'));
		}
	}

	public function hr_host()
	{
		if($this->session->has_userdata('logged_in') == TRUE){
			$this->session->page = "hr_host";
			$data['nama_lengkap'] = $this->session->userdata('nama_lengkap');
			$data['posisi'] = $this->session->userdata('posisi');
			$cek = $this->m_masterData->getHRHost();
			$dat['hrHost'] = $cek;

			$this->load->view('header', $data);
			$this->load->view('master_data/hr-host', $dat);
			$this->load->view('footer');
		}else{
			redirect(base_url('login'));
		}
	}

	public function tpk()
	{
		if($this->session->has_userdata('logged_in') == TRUE){
			$this->session->page = "tpk";
			$data['nama_lengkap'] = $this->session->userdata('nama_lengkap');
			$data['posisi'] = $this->session->userdata('posisi');
			$cek = $this->m_masterData->getTPK();
			$dat['tpk'] = $cek;

			$this->load->view('header', $data);
			$this->load->view('master_data/tpk', $dat);
			$this->load->view('footer');
		}else{
			redirect(base_url('login'));
		}
	}

	public function kelas_rawat_inap()
	{
		if($this->session->has_userdata('logged_in') == TRUE){
			$this->session->page = "kelas_rawat_inap";
			$data['nama_lengkap'] = $this->session->userdata('nama_lengkap');
			$data['posisi'] = $this->session->userdata('posisi');
			$kelas = $this->m_cek->getKelasRawat();
			$dat['kelas'] = $kelas;

			$this->load->view('header', $data);
			$this->load->view('master_data/kelas-rawat-inap', $dat);
			$this->load->view('footer');
		}else{
			redirect(base_url('login'));
		}
	}

	public function provinsi()
	{
		if($this->session->has_userdata('logged_in') == TRUE){
			$this->session->page = "provinsi";
			$data['nama_lengkap'] = $this->session->userdata('nama_lengkap');
			$data['posisi'] = $this->session->userdata('posisi');
			$kelas = $this->m_masterData->getProvinces();
			$dat['provinsi'] = $kelas;

			$this->load->view('header', $data);
			$this->load->view('master_data/provinces', $dat);
			$this->load->view('footer');
		}else{
			redirect(base_url('login'));
		}
	}

	public function kabupaten()
	{
		if($this->session->has_userdata('logged_in') == TRUE){
			$this->session->page = "kabupaten";
			$data['nama_lengkap'] = $this->session->userdata('nama_lengkap');
			$data['posisi'] = $this->session->userdata('posisi');
			$kelas = $this->m_masterData->getRegencies();
			$dat['kabupaten'] = $kelas;

			$this->load->view('header', $data);
			$this->load->view('master_data/kabupaten', $dat);
			$this->load->view('footer');
		}else{
			redirect(base_url('login'));
		}
	}

	public function kecamatan()
	{
		if($this->session->has_userdata('logged_in') == TRUE){
			$this->session->page = "kecamatan";
			$data['nama_lengkap'] = $this->session->userdata('nama_lengkap');
			$data['posisi'] = $this->session->userdata('posisi');
			$kelas = $this->m_masterData->getDistricts();
			$dat['kecamatan'] = $kelas;

			$this->load->view('header', $data);
			$this->load->view('master_data/kecamatan', $dat);
			$this->load->view('footer');
		}else{
			redirect(base_url('login'));
		}
	}
}
