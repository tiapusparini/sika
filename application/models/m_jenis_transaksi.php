<?php 

	class m_jenis_transaksi extends CI_Model {

		function __construct()
		{
			parent::__construct();
		}

		function getAll()
		{
			$q = $this->db->select('*')
					 ->from('jenis_transaksi')
					 ->get();

			return $q->result();
		}

		public function getById($xid)
		{
			$q = $this->db->select('*')->from('jenis_transaksi')->where('kode_kelompok_transaksi',$xid)->get();

			return $q->result();
		}

		function getJenisTransaksi($kode_kt, $kode_gsk){

			$query = $this->db->select("
					 kode_jenis_transaksi,
					 nama_jenis_transaksi,
					 nama_jenis_peserta,
					 jenis_transaksi.kode_jenis_peserta as kjp,
					 kode_kelompok_transaksi,
					 group_concat(nama_jenis_peserta ,' - ', nama_jenis_transaksi) as njt,  
					 ")
					 ->from('jenis_transaksi')
					 ->join('jenis_peserta', 'jenis_transaksi.kode_jenis_peserta  = jenis_peserta.kode_jenis_peserta')
					 ->where('kode_kelompok_transaksi',$kode_kt)
					 ->where('kode_group_status_keluarga',$kode_gsk)
					 ->order_by("kode_jenis_transaksi", "asc")
					 ->group_by('kode_jenis_transaksi')
					 ->get();

			return $query;
		}

		function getJenisTransaksiUpdate($kode_kt){

			$query = $this->db->select("*")
					 ->from('jenis_transaksi')
					 ->where('kode_kelompok_transaksi',$kode_kt)
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