<?php 

	class m_personal_sub_area extends CI_Model {

		function __construct()
		{
			parent::__construct();
		}

		function getAll()
		{
			$q = $this->db->select('*')
					 ->from('personal_sub_area')
					 ->get();

			return $q->result();
		}

		public function getById($xid)
		{
			$q = $this->db->select('*')->from('personal_sub_area')->where('kode_personal_sub_area',$xid)->get();

			return $q->result();
		}

		function getPersonalSubArea($kode_pa){

			$query = $this->db->select("*")
					 ->from('personal_sub_area')
					 ->where('kode_personal_area',$kode_pa)
					 ->get();

			return $query;
		}

		public function insertData($data)
		{
			$this->db->insert('personal_sub_area',$data);
		}

		public function insertDataAndGetId($data)
		{
			$this->db->insert('personal_sub_area',$data);
			return $this->db->insert_id();
		}

		public function updateData($data,$xid)
		{
			$this->db->where('kode_personal_area',$xid);
			$this->db->update('personal_sub_area',$data);
		}

		public function hapusData($id)
		{
			$this->db->where('kode_personal_area',$id);
			$this->db->delete('personal_sub_area');
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