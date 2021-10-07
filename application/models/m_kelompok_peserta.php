<?php 

	class m_kelompok_peserta extends CI_Model {

		function __construct()
		{
			parent::__construct();
		}

		function getAll()
		{
			$q = $this->db->select('*')
					 ->from('kelompok_peserta')
					 ->get();

			return $q->result();
		}

		public function getById($xid)
		{
			$q = $this->db->select('*')->from('kelompok_peserta')->where('kode_kelompok_peserta',$xid)->get();

			return $q->result();
		}

		public function insertData($data)
		{
			$this->db->insert('kelompok_peserta',$data);
		}

		public function insertDataAndGetId($data)
		{
			$this->db->insert('kelompok_peserta',$data);
			return $this->db->insert_id();
		}

		public function updateData($data,$xid)
		{
			$this->db->where('id_kategori_menu',$xid);
			$this->db->update('kategori_menu',$data);
		}

		public function hapusData($id)
		{
			$this->db->where('id_kategori_menu',$id);
			$this->db->delete('kategori_menu');
		}

		public function getBySearch($cari)
		{
			$this->db->select('*')
					->from('kategori_menu');
			$this->db->where("kategori_menu.nama_kategori_menu LIKE '%".$cari."%'");

			$q = $this->db->get();

			return $q->result();
		}
	}


 ?>