<?php 

	class m_peserta_data_pribadi extends CI_Model {


    	public $foto = "default.jpg";
    	public $id;

		function __construct()
		{
			parent::__construct();
		}

		function getAll()
		{
			$q = $this->db->select('*')
					 ->from('peserta_data_pribadi')
					 ->get();

			return $q->result();
		}

		public function getById($xid)
		{
			$q = $this->db->select('*')->from('kelompok_transaksi')->where('kode_kelompok_transaksi',$xid)->get();

			return $q->result();
		}

		public function insertData($data)
		{
			$this->db->insert('peserta_data_pribadi',$data);
		}

		public function insertDataAndGetId($data)
		{
			$this->db->insert('peserta_data_pribadi',$data);
			return $this->db->insert_id();
		}

		public function updateData($data,$xid)
		{
			$this->db->where('kode_data_pribadi',$xid);
			$this->db->update('peserta_data_pribadi',$data);
		}

		public function hapusData($id)
		{
			$this->db->where('kode_data_pribadi',$id);
			$this->db->delete('peserta_data_pribadi');
		}



	}


 ?>