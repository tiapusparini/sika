<?php 

	class m_transaksi extends CI_Model {

		function __construct()
		{
			parent::__construct();
		}

		function getAll()
		{
			$q = $this->db->select('*')
					 ->from('transaksi')
					 ->get();

			return $q->result();
		}

		public function getById($xid)
		{
			$q = $this->db->select('*')->from('transaksi')->where('kode_transaksi',$xid)->get();

			return $q->result();
		}

		public function insertData($data)
		{
			$this->db->insert('transaksi',$data);
		}

		public function insertDataAndGetId($data)
		{
			$this->db->insert('transaksi',$data);
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

		public function getBySearch($cari){

			$this->db->select('*')
					->from('kategori_menu');
			$this->db->where("kategori_menu.nama_kategori_menu LIKE '%".$cari."%'");

			$q = $this->db->get();

			return $q->result();
		}

	}


 ?>