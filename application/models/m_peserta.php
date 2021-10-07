<?php 

	class m_peserta extends CI_Model {

		function __construct()
		{
			parent::__construct();
		}

		function getAll()
		{
			$q = $this->db->select('*')
					 ->from('peserta')
					 ->get();

			return $q->result();
		}

		public function getById($xid)
		{
			$q = $this->db->select('*')
			          ->from('peserta')
					  ->join('nik', 'peserta.kode_nik = nik.kode_nik')

					  ->join('peserta_data_pribadi', 'peserta.kode_data_pribadi = peserta_data_pribadi.kode_data_pribadi')
					  ->join('area', 'peserta_data_pribadi.kode_area = area.kode_area')

					  ->join('peserta_data_tpk', 'peserta.kode_data_tpk = peserta_data_tpk.kode_data_tpk')
					  ->join('tpk', 'peserta_data_tpk.kode_tpk = tpk.kode_tpk')

					  ->join('peserta_data_kepegawaian', 'peserta.kode_data_kepegawaian = peserta_data_kepegawaian.kode_data_kepegawaian')
					  // ->join('instansi', 'peserta_data_kepegawaian.kode_instansi = instansi.kode_instansi')
					  // ->join('pendidikan', 'peserta_data_kepegawaian.kode_pendidikan = pendidikan.kode_pendidikan')
					  // ->join('divisi', 'peserta_data_kepegawaian.kode_divisi = divisi.kode_divisi')
					  
					  ->join('peserta_data_info_lain', 'peserta.kode_data_info_lain = peserta_data_info_lain.kode_data_info_lain')
					  ->join('peserta_data_pernikahan', 'peserta_data_info_lain.kode_data_pernikahan = peserta_data_pernikahan.kode_data_pernikahan')

					  ->join('peserta_data_alamat', 'peserta_data_info_lain.kode_alamat_ktp = peserta_data_alamat.kode_alamat')
					  ->join('peserta_data_pendukung', 'peserta.kode_data_pendukung = peserta_data_pendukung.kode_data_pendukung')
					  ->join('jenis_peserta', 'peserta.kode_jenis_peserta = jenis_peserta.kode_jenis_peserta')
					  ->join('group_status_keluarga', 'jenis_peserta.kode_group_status_keluarga = group_status_keluarga.kode_group_status_keluarga')
			          ->where('kode_peserta',$xid)
			          ->get();

			return $q->result();
		}

		public function getByIdJenisPeserta($xid)
		{
			$q = $this->db->select('*')->from('peserta')->where('kode_jenis_peserta',$xid)->get();

			return $q->result();
		}

		// $xjenis_peserta, $xnik, $xno_peserta, $xnama, $xno_ktp, $xno_bpjs, $xno_area, $xtpk
		public function getByFilter($data)
		{
			$this->db->select('*');
			$this->db->from('peserta');
			$this->db->join('peserta_data_pribadi', 'peserta.kode_data_pribadi = peserta_data_pribadi.kode_data_pribadi');
			$this->db->join('nik', 'peserta.kode_nik = nik.kode_nik');
			$this->db->join('peserta_data_tpk', 'peserta.kode_data_tpk = peserta_data_tpk.kode_data_tpk');
			// $this->db->join('peserta_data_kepegawaian', 'peserta.kode_data_kepegawaian = peserta_data_kepegawaian.kode_data_kepegawaian');
			$this->db->join('area', 'peserta_data_pribadi.kode_area = area.kode_area');
			$this->db->join('jenis_peserta', 'peserta.kode_jenis_peserta = jenis_peserta.kode_jenis_peserta');
			$this->db->join('group_status_keluarga', 'jenis_peserta.kode_group_status_keluarga = group_status_keluarga.kode_group_status_keluarga');


			if($data['kode_jenis_peserta'] != '')
			$this->db->where('peserta.kode_jenis_peserta',$data['kode_jenis_peserta']);
			if($data['kode_area'] != '')
			$this->db->where('peserta_data_pribadi.kode_area', $data['kode_area']);
			if($data['nik'] != '')
			$this->db->like('nik.nik',$data['nik']);
			if($data['no_peserta'] != '')
			$this->db->like('no_peserta',$data['no_peserta']);
			if($data['nama'] != '')
			$this->db->like('nama', $data['nama']);
			if($data['no_ktp'] != '')
			$this->db->like('no_ktp', $data['no_ktp']);
			if($data['no_bpjs'] != '')
			$this->db->like('no_bpjs', $data['no_bpjs']);
					
			$q = $this->db->get()->result();
			return $q;
		}

		public function getKodeNikByKodePeserta($xkode_peserta)
		{
			$q = $this->db->get_where('peserta', array('kode_peserta' => $xkode_peserta));

			return $q->row()->kode_nik;
		}


		public function getKeluargaByKodeNik($xkode_nik)
		{
			$q = $this->db->select('*')
			          ->from('peserta')
					  // ->join('nik', 'peserta.kode_nik = nik.kode_nik')
					  ->join('peserta_data_pribadi', 'peserta.kode_data_pribadi = peserta_data_pribadi.kode_data_pribadi')
					  ->join('peserta_data_tpk', 'peserta.kode_data_tpk = peserta_data_tpk.kode_data_tpk')
					  ->join('jenis_peserta', 'peserta.kode_jenis_peserta = jenis_peserta.kode_jenis_peserta')
					  ->join('group_status_keluarga', 'jenis_peserta.kode_group_status_keluarga = group_status_keluarga.kode_group_status_keluarga')
			          ->where('kode_nik',$xkode_nik)
			          ->get();

			return $q->result();
		}

		public function getGroupStatusKeluargaByKodePeserta($xkode_peserta)
		{
			$q = $this->db->select('*')
			          ->from('peserta')
					  ->join('jenis_peserta', 'peserta.kode_jenis_peserta = jenis_peserta.kode_jenis_peserta')
					  ->join('group_status_keluarga', 'jenis_peserta.kode_group_status_keluarga = group_status_keluarga.kode_group_status_keluarga')
			          ->where('kode_peserta',$xkode_peserta)
			          ->get();

			return $q->row()->kode_group_status_keluarga;
		}


		public function getAlamatKTP($xid_peserta)
		{
			$q = $this->db->select("*")
						 ->from('peserta')
					  	 ->join('peserta_data_info_lain', 'peserta.kode_data_info_lain = peserta_data_info_lain.kode_data_info_lain')
					  	 ->join('peserta_data_alamat', 'peserta_data_info_lain.kode_alamat_ktp = peserta_data_alamat.kode_alamat')
						 ->where('kode_peserta',$xid_peserta)
						 ->get();

			return $q->result();
		}

		public function getAlamatDomisili($xid_peserta)
		{
			$q = $this->db->select("*")
						 ->from('peserta')
					  	 ->join('peserta_data_info_lain', 'peserta.kode_data_info_lain = peserta_data_info_lain.kode_data_info_lain')
					  	 ->join('peserta_data_alamat', 'peserta_data_info_lain.kode_alamat_domisili = peserta_data_alamat.kode_alamat')
						 ->where('kode_peserta',$xid_peserta)
						 ->get();

			return $q->result();
		}

		public function getDataBank($xid_peserta)
		{
			$q = $this->db->select("*")
						 ->from('peserta')
					  	 ->join('peserta_data_info_lain', 'peserta.kode_data_info_lain = peserta_data_info_lain.kode_data_info_lain')
					  	 ->join('peserta_data_bank', 'peserta_data_info_lain.kode_data_bank = peserta_data_bank.kode_data_bank')
						 ->where('kode_peserta',$xid_peserta)
						 ->get();

			return $q->result();
		}

		public function insertData($data)
		{
			$this->db->insert('peserta',$data);
		}

		public function insertDataAndGetId($data)
		{
			$this->db->insert('peserta',$data);
			return $this->db->insert_id();
		}

		public function getIdPeserta($xnikes)
		{
			$q = $this->db->get_where('peserta', array('nikes' => $xnikes));

			if($q->num_rows() > 0){
				return $q->row()->kode_peserta;
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