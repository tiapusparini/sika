<?php 

	class m_band_posisi extends CI_Model {

		function __construct()
		{
			parent::__construct();
		}

		function getAll()
		{
			$q = $this->db->select('*')
					 ->from('band_posisi')
					 ->get();

			return $q->result();
		}

		public function getAllGrouped()
		{
			$q = $this->db->select('*')
					 ->from('band_posisi')
					 ->group_by('nama_band')
					 ->get();

			return $q->result();
		}

		public function getKlasPosisiById($xid)
		{
			$q = $this->db->select('*')->from('band_posisi')->where('kode_band_posisi',$xid)->get();

			return $q->row()->klas_posisi;
		}

		public function getKelasPerawatabById($xid)
		{
			$q = $this->db->select('*')->from('band_posisi')->where('kode_band_posisi',$xid)->get();

			return $q->row()->kelas_perawatan;
		}


		public function getByNamaBandAndKlasPosisi($nb,$kp)
		{
			$q = $this->db->select('*')
						  ->from('band_posisi')
						  ->where('nama_band',$nb)
						  ->where('klas_posisi',$kp)
						  ->row()
						  ->get();

			return $q->result();
		}


		function getKlasPosisi($nb){

			$query = $this->db->select("*")
					 ->from('band_posisi')
					 ->where('nama_band',$nb)
					 ->group_by('klas_posisi')
					 ->get();

			return $query;
		}

		function getKodeBandPosisi($nb, $kp){

			$query = $this->db->select("*")
					 ->from('band_posisi')
					 ->where('nama_band',$nb)
					 ->where('klas_posisi',$kp)
					 ->group_by('kelas_perawatan')
					 ->get();

			return $query;
		}






		public function insertData($data)
		{
			$this->db->insert('band_posisi',$data);
		}

		public function insertDataAndGetId($data)
		{
			$this->db->insert('band_posisi',$data);
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