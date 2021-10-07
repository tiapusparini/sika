<?php 

	class m_nik extends CI_Model {

		function __construct()
		{
			parent::__construct();
		}

		function getAll()
		{
			$q = $this->db->select('*')
					 ->from('nik')
					 ->get();

			return $q->result();
		}

		public function getById($xid)
		{
			$q = $this->db->select('*')->from('nik')->where('kode_nik',$xid)->get();

			return $q->result();
		}

		public function insertData($data)
		{
			$this->db->insert('nik',$data);
		}

		public function insertDataAndGetId($data)
		{
			$this->db->insert('nik',$data);
			return $this->db->insert_id();
		}

		public function getIdNIK($xnik)
		{
			$q = $this->db->get_where('nik', array('nik' => $xnik));

			if($q->num_rows() > 0){
				return $q->row()->kode_nik;
			}else{
				return NULL;
			}
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