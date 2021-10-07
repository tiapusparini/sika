<?php 

	class m_districts extends CI_Model {

		function __construct()
		{
			parent::__construct();
		}

		function getAll()
		{
			$q = $this->db->select('*')
					 ->from('districts')
					 ->get();

			return $q->result();
		}

		public function getById($xid)
		{
			$q = $this->db->select('*')->from('districts')->where('id',$xid)->get();

			return $q->result();
		}

		function getDistricts($xid){

			$query = $this->db->select("*")
					 ->from('districts')
					 ->where('regency_id',$xid)
					 ->get();

			return $query;
		}




		public function getByIdKategori($xid_kategori_kategori_menu)
		{
			$q = $this->db->select('*')->from('kategori_menu')->where('id_kategori_kategori_menu',$xid_kategori_kategori_menu)
					 ->order_by("nama_kategori_menu", "asc")->get();

			return $q->result();
		}

		public function getHargakategori_menu($xid_kategori_menu)
		{
			// $array = array('nama_pelanggan' => $xnama, 'no_polisi' => $xno_polisi);
			// $q = $this->db->select('*')->from('pelanggan')->where($array)->get()->row()->id_user;

			$q = $this->db->get_where('kategori_menu', array('id_kategori_menu' => $xid_kategori_menu));

			return $q->row()->harga_kategori_menu;
		}


		public function insertData($data)
		{
			$this->db->insert('kategori_menu',$data);
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