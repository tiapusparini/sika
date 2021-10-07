<?php 

	class m_peserta_data_kepegawaian extends CI_Model {

		function __construct()
		{
			parent::__construct();
		}

		function getAll()
		{
			$q = $this->db->select('*')
					 ->from('peserta_data_kepegawaian')
					 ->get();

			return $q->result();
		}

		public function getById($xid)
		{
			$q = $this->db->select('*')->from('peserta_data_kepegawaian')->where('kode_data_kepegawaian',$xid)->get();

			return $q->result();
		}

		public function insertData($data)
		{
			$this->db->insert('peserta_data_kepegawaian',$data);
		}

		public function insertDataAndGetId($data)
		{
			$this->db->insert('peserta_data_kepegawaian',$data);
			return $this->db->insert_id();
		}

		public function updateData($data,$xid)
		{
			$this->db->where('kode_data_kepegawaian',$xid);
			$this->db->update('peserta_data_kepegawaian',$data);
		}

		public function hapusData($id)
		{
			$this->db->where('id_kategori_menu',$id);
			$this->db->delete('kategori_menu');
		}

		public function getBySearch($cari){

			$this->db->select('*')
					->from('kategori_menu');
			$this->db->where("kategori_menu.nama_kategori_menu LIKE '%".$cari."%'");

			$q = $this->db->get();

			return $q->result();
		}

	}


 ?>