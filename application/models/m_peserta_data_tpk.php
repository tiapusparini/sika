<?php 

	class m_peserta_data_tpk extends CI_Model {

		function __construct()
		{
			parent::__construct();
		}

		function getAll()
		{
			$q = $this->db->select('*')
					 ->from('peserta_data_tpk')
					 ->get();

			return $q->result();
		}

		public function getById($xid)
		{
			$q = $this->db->select('*')->from('peserta_data_tpk')->where('kode_data_tpk',$xid)->get();

			return $q->result();
		}

		public function insertData($data)
		{
			$this->db->insert('peserta_data_tpk',$data);
		}

		public function insertDataAndGetId($data)
		{
			$this->db->insert('peserta_data_tpk',$data);
			return $this->db->insert_id();
		}

		public function updateData($data,$xid)
		{
			$this->db->where('kode_data_tpk',$xid);
			$this->db->update('peserta_data_tpk',$data);
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