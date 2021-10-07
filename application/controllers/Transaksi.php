<?php 

	class Transaksi extends CI_Controller {

		function __construct()
		{
			parent::__construct();
			$this->load->model('m_kelompok_transaksi');
			$this->load->model('m_jenis_transaksi');
			$this->load->model('m_area');
			$this->load->model('m_peserta_data_pribadi');
			$this->load->model('m_peserta_data_tpk');
			$this->load->model('m_nik');
			$this->load->model('m_transaksi');
			$this->load->model('m_peserta');
			$this->load->model('m_kelompok_peserta');
			$this->load->model('m_band_posisi');
			$this->load->model('m_peserta_data_kepegawaian');
			$this->load->model('m_pendidikan');
			$this->load->model('m_personal_area');
			$this->load->model('m_personal_sub_area');
			$this->load->model('m_tpk');
			$this->load->model('m_instansi');
			$this->load->model('m_divisi');
			$this->load->model('m_bagian');
			$this->load->model('m_provinces');
			$this->load->model('m_regencies');
			$this->load->model('m_districts');
			$this->load->model('m_villages');
			$this->load->model('m_peserta_data_alamat');
			$this->load->model('m_peserta_data_pernikahan');
			$this->load->model('m_bank');
			$this->load->model('m_peserta_data_bank');
			$this->load->model('m_peserta_data_info_lain');
			$this->load->model('m_jenis_peserta');

		}

		function index()
		{
		}

		function cariPeserta()
		{

			$this->session->page = "cari_peserta";
			$data['jenis_peserta'] = $this->m_jenis_peserta->getAll();
			$data['area'] = $this->m_area->getAll();
			$this->load->view('header');
			$this->load->view('v_cariPeserta', $data);
			$this->load->view('footer');
		}

		function prosesCariPeserta()
		{
			$this->session->page = "cari_peserta";
			if (isset($_POST['btnSubmit'])) {
				$data['jenis_peserta'] = $this->m_jenis_peserta->getAll();
				$data['area'] = $this->m_area->getAll();

			    $parameters = $this->input->post();

				$data['peserta'] = $this->m_peserta->getByFilter($parameters);

				$this->load->view('header');
				$this->load->view('v_cariPesertaResult', $data);
			}else{
				redirect('Transaksi/cariPeserta');
			}
		}

		function edit_peserta($kode_peserta)
		{
			$data['result'] =  $this->m_kelompok_transaksi->getById(88);
			$data['jenis_transaksi'] = $this->m_jenis_transaksi->getAll();
			$data['area'] = $this->m_area->getAll();
			$data['kelompok_peserta'] = $this->m_kelompok_peserta->getAll();
			$data['band_posisi'] = $this->m_band_posisi->getAll();
			$data['pendidikan'] = $this->m_pendidikan->getAll();
			$data['personal_area'] = $this->m_personal_area->getAll();
			$data['divisi'] = $this->m_divisi->getAll();
			$data['bagian'] = $this->m_bagian->getAll();
			$data['provinces'] = $this->m_provinces->getAll();
			$data['regencies'] = $this->m_regencies->getAll();
			$data['districts'] = $this->m_districts->getAll();
			$data['villages'] = $this->m_villages->getAll();
			$data['bank'] = $this->m_bank->getAll();
			$data['instansi'] = $this->m_instansi->getAll();
			$data['personal_sub_area'] = $this->m_personal_sub_area->getAll();


			$data['alamatKTP'] = $this->m_peserta->getAlamatKTP($kode_peserta);
			$data['alamatDomisili'] = $this->m_peserta->getAlamatDomisili($kode_peserta);
			$data['dataBank'] = $this->m_peserta->getDataBank($kode_peserta);

			$data['peserta'] = $this->m_peserta->getById($kode_peserta);

			$kode_nik = $this->m_peserta->getKodeNikByKodePeserta($kode_peserta);
			$data['keluarga'] = $this->m_peserta->getKeluargaByKodeNik($kode_nik);

			$kode_group_status_keluarga = $this->m_peserta->getGroupStatusKeluargaByKodePeserta($kode_peserta);

			if ($kode_group_status_keluarga == 1) {
				$this->load->view('header');
				$this->load->view('v_edit_kepala_keluarga',$data);
				// $this->load->view('Template/footer');
			}else if ($kode_group_status_keluarga == 2) {
				$this->load->view('header');
				$this->load->view('v_edit_pasangan',$data);
				
			}else if ($kode_group_status_keluarga == 3) {
				$this->load->view('header');
				$this->load->view('v_edit_anak',$data);
				
			}else{
				
			}
		}

		function prosesEditPeserta()
		{
			if (isset($_POST['btn_submit'])) {

				$post_data = $this->input->post();

				// $str = $post_data['kode_jenis_transaksi'];				//input post kode_jenis_transaksi berisi kode_jenis_transaksi + kode_jenis_peserta
				// $str_explode = explode('+', $str);						//memecah strings
				// $post_data['kode_jenis_transaksi'] = $str_explode[0];	//mendapatkan kode_jenis_transaksi
				// $post_data['kode_jenis_peserta'] = $str_explode[1];		//mendapatkan kode_jenis_peserta
				$post_data['kode_group_status_keluarga'] = $this->m_jenis_peserta->getGroupStatusKeluarga($post_data['kode_jenis_peserta']); // 1 = KK, 2 = pasangan, 3 = anak, 4 = janda/duda

				$post_data['tipe_transaksi'] = 2; //UPDATE DATA


				$nama_foto = str_replace(".", "-", $post_data['nikes']);
					
				//UPLOAD FILE
				$config['upload_path']          = './upload/image/';
				$config['allowed_types']        = '*';
				$config['file_name']            = $nama_foto;
				$config['overwrite']			= true;
				$config['max_size']             = 1024; // 1MB
				// $config['max_width']            = 1024;
				// $config['max_height']           = 768;

				$this->load->library('upload', $config);
				$this->upload->initialize($config);

				if ($this->upload->do_upload('foto')) {
					$this->upload->data("file_name");
					// $dataPribadi['foto'] = $config['file_name'];
					$post_data['foto'] = $config['file_name'] . ".jpg";
				}else{
					// $dataPribadi['foto'] = "default.jpg";
					// $post_data['foto'] = "default.jpg";
					$post_data['foto'] = $post_data['foto_old'];
				}
				


				$this->db->trans_start();

				$this->insertTransaksi($post_data);
				$this->insertDataPribadi($post_data);
				$this->insertTPK($post_data);
				$this->insertKepegawaian($post_data);
				$this->insertAlamatKTP($post_data);
				$this->insertAlamatDomisili($post_data);
				$this->insertBank($post_data);
				$this->insertInfoLain($post_data);

				if ($this->db->trans_status() === FALSE)
				{	
			        $this->db->trans_rollback();
					$this->session->set_flashdata('danger', 'Gagal disimpan');

				}
				else
				{
			        $this->db->trans_commit();
	           		$this->session->set_flashdata('success', 'Berhasil disimpan.');
					redirect('Transaksi/edit_peserta/' . $post_data['kode_peserta'] . '/' . $post_data['kode_group_status_keluarga']);
				}

			}
		}

		function input_kepala_keluarga()
		{
			$this->session->page = "input_kepala_keluarga";
			$data['result'] =  $this->m_kelompok_transaksi->getById(1);
			$data['jenis_transaksi'] = $this->m_jenis_transaksi->getAll();
			$data['area'] = $this->m_area->getAll();
			$data['kelompok_peserta'] = $this->m_kelompok_peserta->getAll();
			$data['band_posisi'] = $this->m_band_posisi->getAllGrouped();
			$data['pendidikan'] = $this->m_pendidikan->getAll();
			$data['personal_area'] = $this->m_personal_area->getAll();
			$data['divisi'] = $this->m_divisi->getAll();
			$data['provinces'] = $this->m_provinces->getAll();
			$data['bank'] = $this->m_bank->getAll();

			$this->load->view('header');
			$this->load->view('v_input_kepala_keluarga',$data);
			// $this->load->view('Template/footer');
		}

		function prosesInputKepalaKeluarga()
		{
			if (isset($_POST['btn_submit'])) {

				$post_data = $this->input->post();

				$str = $post_data['kode_jenis_transaksi'];				//input post kode_jenis_transaksi berisi kode_jenis_transaksi + kode_jenis_peserta
				$str_explode = explode('+', $str);						//memecah strings
				$post_data['kode_jenis_transaksi'] = $str_explode[0];	//mendapatkan kode_jenis_transaksi
				$post_data['kode_jenis_peserta'] = $str_explode[1];		//mendapatkan kode_jenis_peserta

				$post_data['kode_group_status_keluarga'] = $this->m_jenis_peserta->getGroupStatusKeluarga($post_data['kode_jenis_peserta']); // 1 = KK, 2 = pasangan, 3 = anak, 4 = janda/duda


				//CHECK NIK
				$check = 0;
				if($post_data['kode_group_status_keluarga'] == 1){								//KK
					if($this->m_nik->getIdNIK($post_data['nik']) != NULL){						//jika nik ada, input kk tidak dapat dilakukan
						$check = 1;
					}else{
						$dataNik['nik'] = $post_data['nik'];
						$dataPeserta['kode_nik'] = $this->m_nik->insertDataAndGetId($dataNik);	//jika nik belum ada, maka nik dapat diinput
						$dataPeserta['nikes'] = $post_data['nik'] . '.000';
					}
				}else if($post_data['kode_group_status_keluarga'] == 2){						//PASANGAN
					if($this->m_nik->getIdNIK($post_data['nik']) != NULL){						//jika nik ada dan nikes belum ada, maka input pasangan dapat dilakukan
						$dataPeserta['kode_nik'] = $this->m_nik->getIdNIK($post_data['nik']);
						$dataPeserta['nikes'] = $post_data['nik'] . '.' . $post_data['pasangan_ke'] . '00';
						if($this->m_peserta->getIdPeserta($dataPeserta['nikes']) != NULL){ 		//jika nikes sudah ada, tidak dapat di input
							$check = 3;
						}
					}else{
						$check = 2;																//jika nik belum ada, maka input pasangan tidak dapat diinput
					}
				}else if($post_data['kode_group_status_keluarga'] == 3){						//ANAK
					if($this->m_nik->getIdNIK($post_data['nik']) != NULL){						//jika nik ada dan nikes belum ada, maka input anak dapat dilakukan
						$dataPeserta['kode_nik'] = $this->m_nik->getIdNIK($post_data['nik']);
						$dataPeserta['nikes'] = $post_data['nik'] . '.' . $post_data['pasangan_ke'] . '0'. $post_data['anak_ke'];
						if($this->m_peserta->getIdPeserta($dataPeserta['nikes']) != NULL){		//jika nikes sudah ada, tidak dapat di input
							$check = 3;
						}
					}else{
						$check = 2;																//jika nik belum ada, maka input anak tidak dapat diinput
					}
				}else{
					$check = 4;
				}

				//input peserta
				if($check == 0){

					$post_data['tipe_transaksi'] = 1; //INPUT BARU

					$nama_foto = str_replace(".", "-", $dataPeserta['nikes']);
					
					//UPLOAD FILE
					$config['upload_path']          = './upload/image/';
					$config['allowed_types']        = '*';
					$config['file_name']            = $nama_foto;
					$config['overwrite']			= true;
					// $config['max_size']             = 1024; // 1MB
					// $config['max_width']            = 1024;
					// $config['max_height']           = 768;

					$this->load->library('upload', $config);
					$this->upload->initialize($config);

					if ($this->upload->do_upload('foto')) {
						$this->upload->data("file_name");
						// $dataPribadi['foto'] = $config['file_name'];
						$post_data['foto'] = $config['file_name'] . ".jpg";
					}else{
						// $dataPribadi['foto'] = "default.jpg";
						$post_data['foto'] = "default.jpg";
					}

					$this->db->trans_start();

					//transaksi
					$this->insertTransaksi($post_data);

					//peserta
					$dataPeserta['kode_jenis_peserta'] = $post_data['kode_jenis_peserta'];
					$dataPeserta['no_peserta'] = $this->input->post('no_peserta');
					// $dataPeserta['kode_nik'] = $this->m_nik->insertDataAndGetId($dataNik);
					// $dataPeserta['nikes'] = $this->input->post('nik') . '.000';
					$dataPeserta['kode_data_pribadi'] = $this->insertDataPribadi($post_data);
					$dataPeserta['kode_data_tpk'] = $this->insertTPK($post_data);
					$dataPeserta['kode_data_kepegawaian'] = $this->insertKepegawaian($post_data);
					$dataPeserta['kode_data_info_lain'] = $this->insertInfoLain($post_data);
					$dataPeserta['kode_data_pendukung'] = 1;
					$this->m_peserta->insertData($dataPeserta);
					
					$this->db->trans_complete();
					
					if ($this->db->trans_status() === FALSE)
					{	
						$this->session->set_flashdata('danger', 'Gagal disimpan');
				        $this->db->trans_rollback();

				        if($post_data['kode_group_status_keluarga'] == 1){
							// $this->input_kepala_keluarga();
							redirect('Transaksi/input_kepala_keluarga');
				        }else if($post_data['kode_group_status_keluarga'] == 2){
							// $this->input_pasangan();
							redirect('Transaksi/input_pasangan');
				        }else if($post_data['kode_group_status_keluarga'] == 3){
							// $this->input_anak();
							redirect('Transaksi/input_anak');
				        }
					}
					else
					{
				        $this->db->trans_commit();
		           		$this->session->set_flashdata('success', 'Berhasil disimpan');

		           		if($post_data['kode_group_status_keluarga'] == 1){
							// $this->input_kepala_keluarga();
							redirect('Transaksi/input_kepala_keluarga');
				        }else if($post_data['kode_group_status_keluarga'] == 2){
							// $this->input_pasangan();
							redirect('Transaksi/input_pasangan');
				        }else if($post_data['kode_group_status_keluarga'] == 3){
							// $this->input_anak();
							redirect('Transaksi/input_anak');
				        }
					}
				}else{
					$this->session->set_flashdata('danger', 'Gagal disimpan');

	           		if($post_data['kode_group_status_keluarga'] == 1){
						// $this->input_kepala_keluarga();
						redirect('Transaksi/input_kepala_keluarga');
			        }else if($post_data['kode_group_status_keluarga'] == 2){
						// $this->input_pasangan();
						redirect('Transaksi/input_pasangan');
			        }else if($post_data['kode_group_status_keluarga'] == 3){
						// $this->input_anak();
						redirect('Transaksi/input_anak');
			        }
				}
			}
		}

		function input_pasangan()
		{
			$this->session->page = "input_pasangan";
			$data['result'] =  $this->m_kelompok_transaksi->getById(1); //kelompok transaksi : penambahan
			$data['jenis_transaksi'] = $this->m_jenis_transaksi->getAll();
			$data['area'] = $this->m_area->getAll();
			$data['kelompok_peserta'] = $this->m_kelompok_peserta->getAll();
			$data['band_posisi'] = $this->m_band_posisi->getAllGrouped();
			$data['pendidikan'] = $this->m_pendidikan->getAll();
			$data['personal_area'] = $this->m_personal_area->getAll();
			$data['divisi'] = $this->m_divisi->getAll();
			$data['provinces'] = $this->m_provinces->getAll();
			$data['bank'] = $this->m_bank->getAll();

			$this->load->view('header');
			$this->load->view('v_input_pasangan',$data);
			// $this->load->view('Template/footer');
		}

		function input_anak()
		{
			$this->session->page = "input_anak";
			$data['result'] =  $this->m_kelompok_transaksi->getById(1); //kelompok transaksi : penambahan
			$data['jenis_transaksi'] = $this->m_jenis_transaksi->getAll();
			$data['area'] = $this->m_area->getAll();
			$data['kelompok_peserta'] = $this->m_kelompok_peserta->getAll();
			$data['band_posisi'] = $this->m_band_posisi->getAllGrouped();
			$data['pendidikan'] = $this->m_pendidikan->getAll();
			$data['personal_area'] = $this->m_personal_area->getAll();
			$data['divisi'] = $this->m_divisi->getAll();
			$data['provinces'] = $this->m_provinces->getAll();
			$data['bank'] = $this->m_bank->getAll();

			$this->load->view('header');
			$this->load->view('v_input_anak',$data);
			// $this->load->view('Template/footer');
		}


		private function insertTransaksi($data)
		{
			$dataTransaksi['kode_kelompok_transaksi'] = $data['kode_kelompok_transaksi'];
			$dataTransaksi['kode_jenis_transaksi'] = $data['kode_jenis_transaksi'];
			$dataTransaksi['nik'] = $data['nik'];

			$this->m_transaksi->insertData($dataTransaksi);
		}

		private function insertDataPribadi($data)
		{
			$dataPribadi['nama'] = $data['nama'];
			$dataPribadi['tempat_lahir'] = $data['tempat_lahir'];
			$dataPribadi['tgl_lahir'] = $data['tanggal_lahir'];
			$dataPribadi['jenis_kelamin'] = $data['jenis_kelamin'];
			$dataPribadi['agama'] = $data['agama'];
			$dataPribadi['no_ktp'] = $data['no_ktp'];
			$dataPribadi['gol_darah'] = $data['golongan_darah'];
			$dataPribadi['rhesus'] = $data['rhesus'];
			$dataPribadi['no_bpjs'] = $data['no_bpjs'];
			$dataPribadi['foto'] = $data['foto'];
			$dataPribadi['kode_area'] = $data['area_pelayanan'];

			if($data['kode_group_status_keluarga'] == 2){ //status = pasangan
				$dataPribadi['pasangan_ke'] = $data['pasangan_ke'];
			}else if($data['kode_group_status_keluarga'] == 3){ //status = anak
				$dataPribadi['pasangan_ke'] = $data['pasangan_ke'];
				$dataPribadi['anak_ke'] = $data['anak_ke'];
			}

			if ($data['tipe_transaksi'] == 1) {
				return $this->m_peserta_data_pribadi->insertDataAndGetId($dataPribadi);
			}else if($data['tipe_transaksi'] == 2){
				$this->m_peserta_data_pribadi->updateData($dataPribadi,$data['kode_data_pribadi']);
			}
		}

		private function insertTPK($data)
		{
			$dataTPK['kode_tpk'] = $data['tpk'];
			$dataTPK['status_faskes'] = $data['status_faskes'];
			$dataTPK['tgl_faskes'] = $data['tanggal_faskes'];

			if ($data['tipe_transaksi'] == 1) {
				return $this->m_peserta_data_tpk->insertDataAndGetId($dataTPK);
			}else if($data['tipe_transaksi'] == 2){
				$this->m_peserta_data_tpk->updateData($dataTPK,$data['kode_data_tpk']);
			}
		}

		private function insertKepegawaian($data)
		{
			if($data['kode_group_status_keluarga'] == 1){ //status = KK
				if (empty($data['perusahaan'])){ $data['perusahaan'] = NULL; };	//jika field kosong maka dijadikan NULL
				if (empty($data['pendidikan'])){ $data['pendidikan'] = NULL; };
				if (empty($data['divisi'])){ $data['divisi'] = NULL; };
				if (empty($data['bagian'])){ $data['bagian'] = NULL; };
				if (empty($data['pa'])){ $data['pa'] = NULL; };
				if (empty($data['psa'])){ $data['psa'] = NULL; };

				$dataKepegawaian['kode_kelompok_peserta'] = $data['kelompok_peserta'];
				$dataKepegawaian['kode_instansi'] = $data['perusahaan'];
				// $dataKepegawaian['kode_area'] = $data['pa'];
				$dataKepegawaian['jabatan'] = $data['jabatan'];
				$dataKepegawaian['tgl_capeg'] = $data['tanggal_capeg'];
				$dataKepegawaian['tgl_mulai_kerja'] = $data['tanggal_mulai_kerja'];
				$dataKepegawaian['tgl_pensiun'] = $data['tanggal_pensiun'];
				$dataKepegawaian['tgl_berhenti_kerja'] = $data['tanggal_berhenti_bekerja'];
				$dataKepegawaian['alasan_berhenti_kerja'] = $data['alasan_berhenti_bekerja'];
				$dataKepegawaian['kode_pendidikan'] = $data['pendidikan'];
				// $dataKepegawaian['kode_pekerjaan'] = $data['pekerjaan'];
				$dataKepegawaian['kode_divisi'] = $data['divisi'];
				$dataKepegawaian['kode_bagian'] = $data['bagian'];
				$dataKepegawaian['kode_personal_sub_area'] = $data['psa'];
				$dataKepegawaian['kode_band_posisi'] = $data['kelas_perawatan']; //post['kelas_perawatan'] berisi kode_band_posisi
				$klas_posisi = $this->m_band_posisi->getKlasPosisiById($data['kelas_perawatan']); //get klas_posisi by kode_band_posisi
				$dataKepegawaian['klas_posisi'] = $klas_posisi;
				$kelas_perawatan = $this->m_band_posisi->getKelasPerawatabById($data['kelas_perawatan']); //get kelas_perawatan by kode_band_posisi
				$dataKepegawaian['kelas_perawatan'] = $kelas_perawatan;

				if ($data['tipe_transaksi'] == 1) {
					return $this->m_peserta_data_kepegawaian->insertDataAndGetId($dataKepegawaian);
				}else if($data['tipe_transaksi'] == 2){
					$this->m_peserta_data_kepegawaian->updateData($dataKepegawaian,$data['kode_data_kepegawaian']);
				}

			}else if($data['kode_group_status_keluarga'] == 2){ //status = pasangan
				if (empty($data['pendidikan'])){ $data['pendidikan'] = NULL; };

				$dataKepegawaian['nik_ybs'] = $data['nik_ybs'];
				$dataKepegawaian['kode_pendidikan'] = $data['pendidikan'];
				$dataKepegawaian['pekerjaan'] = $data['pekerjaan'];

				if ($data['tipe_transaksi'] == 1) {
					return $this->m_peserta_data_kepegawaian->insertDataAndGetId($dataKepegawaian);
				}else if($data['tipe_transaksi'] == 2){
					$this->m_peserta_data_kepegawaian->updateData($dataKepegawaian,$data['kode_data_kepegawaian']);
				}

			}else if($data['kode_group_status_keluarga'] == 3){ //status = anak
				$empty['jabatan'] = NULL;
				if ($data['tipe_transaksi'] == 1) {
					return $this->m_peserta_data_kepegawaian->insertDataAndGetId($empty);
				}
				// return NULL;
			}

		}

		private function insertAlamatKTP($data)
		{
			if (empty($data['provinsi_ktp'])){ $data['provinsi_ktp'] = NULL; };
			if (empty($data['kota_ktp'])){ $data['kota_ktp'] = NULL; };
			if (empty($data['kecamatan_ktp'])){ $data['kecamatan_ktp'] = NULL; };
			if (empty($data['kelurahan_ktp'])){ $data['kelurahan_ktp'] = NULL; };

			$dataAlamat['jenis_alamat'] = "ktp";
			$dataAlamat['alamat'] = $data['alamat_ktp'];
			$dataAlamat['rt'] = $data['rt_ktp'];
			$dataAlamat['rw'] = $data['rw_ktp'];
			$dataAlamat['kode_provinsi'] = $data['provinsi_ktp'];
			$dataAlamat['kode_kabupaten'] = $data['kota_ktp'];
			$dataAlamat['kode_kecamatan'] = $data['kecamatan_ktp'];
			$dataAlamat['kode_kelurahan'] = $data['kelurahan_ktp'];
			$dataAlamat['kode_pos'] = $data['kode_pos_ktp'];
			$dataAlamat['no_telp'] = $data['no_telp_ktp'];

			if ($data['tipe_transaksi'] == 1) {
				return $this->m_peserta_data_alamat->insertDataAndGetId($dataAlamat);
			}else if($data['tipe_transaksi'] == 2){
				$this->m_peserta_data_alamat->updateData($dataAlamat,$data['kode_alamat_ktp']);
				return $data['kode_alamat_ktp'];
			}
		}

		private function insertAlamatDomisili($data)
		{
			if (empty($data['provinsi_domisili'])){ $data['provinsi_domisili'] = NULL; };
			if (empty($data['kota_domisili'])){ $data['kota_domisili'] = NULL; };
			if (empty($data['kecamatan_domisili'])){ $data['kecamatan_domisili'] = NULL; };
			if (empty($data['kelurahan_domisili'])){ $data['kelurahan_domisili'] = NULL; };

			$dataAlamat['jenis_alamat'] = "domisili";
			$dataAlamat['alamat'] = $data['alamat_domisili'];
			$dataAlamat['rt'] = $data['rt_domisili'];
			$dataAlamat['rw'] = $data['rw_domisili'];
			$dataAlamat['kode_provinsi'] = $data['provinsi_domisili'];
			$dataAlamat['kode_kabupaten'] = $data['kota_domisili'];
			$dataAlamat['kode_kecamatan'] = $data['kecamatan_domisili'];
			$dataAlamat['kode_kelurahan'] = $data['kelurahan_domisili'];
			$dataAlamat['kode_pos'] = $data['kode_pos_domisili'];
			$dataAlamat['no_telp'] = $data['no_telp_domisili'];

			if ($data['tipe_transaksi'] == 1) {
				return $this->m_peserta_data_alamat->insertDataAndGetId($dataAlamat);
			}else if($data['tipe_transaksi'] == 2){
				$this->m_peserta_data_alamat->updateData($dataAlamat,$data['kode_alamat_domisili']);
				return $data['kode_alamat_domisili'];
			}
		}

		private function insertBank($data)
		{
			if (empty($data['nama_bank'])){ $data['nama_bank'] = NULL; };

			$dataBank['nama_pemilik_rekening'] = $data['nama_pemilik_rekening'];
			$dataBank['kode_bank'] = $data['nama_bank'];
			$dataBank['no_rekening'] = $data['no_rekening_bank'];
			$dataBank['status_kartu'] = $data['status_kartu'];
			$dataBank['tgl_cetak'] = $data['tanggal_cetak'];
			$dataBank['tgl_akhir_kartu'] = $data['tanggal_akhir_kartu'];

			if ($data['tipe_transaksi'] == 1) {
				return $this->m_peserta_data_bank->insertDataAndGetId($dataBank);
			}else if($data['tipe_transaksi'] == 2){
				$this->m_peserta_data_bank->updateData($dataBank,$data['kode_data_bank']);
				return $data['kode_data_bank'];
			}
		}

		private function insertPernikahan($data)
		{
			if($data['kode_group_status_keluarga'] != 3){

				$dataPernikahan['status_pernikahan'] = $data['status_pernikahan'];
				$dataPernikahan['tgl_nikah'] = $data['tanggal_pernikahan'];
				$dataPernikahan['tgl_cerai'] = $data['tanggal_perceraian'];

				if ($data['tipe_transaksi'] == 1) {
					return $this->m_peserta_data_pernikahan->insertDataAndGetId($dataPernikahan);
				}else if($data['tipe_transaksi'] == 2){
					$this->m_peserta_data_pernikahan->updateData($dataPernikahan,$data['kode_data_pernikahan']);
					return $data['kode_data_pernikahan'];
				}
			}else{

				if ($data['tipe_transaksi'] == 1) {
					$empty['status_pernikahan'] = NULL;
					return $this->m_peserta_data_pernikahan->insertDataAndGetId($empty);
				}else if($data['tipe_transaksi'] == 2){
					$empty['status_pernikahan'] = NULL;
					$this->m_peserta_data_pernikahan->updateData($empty,$data['kode_data_pernikahan']);
					return $data['kode_data_pernikahan'];
				}
				// return NULL;
			}
		}

		private function insertInfoLain($data)
		{
			$dataInfoLain['kode_alamat_ktp'] = $this->insertAlamatKTP($data);
			$dataInfoLain['kode_alamat_domisili'] = $this->insertAlamatDomisili($data);
			$dataInfoLain['kode_data_pernikahan'] = $this->insertPernikahan($data);
			$dataInfoLain['kode_data_bank'] = $this->insertBank($data);
			$dataInfoLain['no_hp'] = $data['no_hp'];
			$dataInfoLain['catatan'] = $data['catatan'];
			$dataInfoLain['tgl_meninggal'] = $data['tanggal_meninggal'];

			if ($data['tipe_transaksi'] == 1) {
				return $this->m_peserta_data_info_lain->insertDataAndGetId($dataInfoLain);
			}else if($data['tipe_transaksi'] == 2){
				$this->m_peserta_data_info_lain->updateData($dataInfoLain,$data['kode_data_info_lain']);
			}
		}

		// get sub category by category_id
		function getJenisTransaksi(){
			$kode_kelompok_transaksi = $this->input->post('id',TRUE);
			$kode_group_status_keluarga = 1;	//Kepala Keluarga = 1
			$data = $this->m_jenis_transaksi->getJenisTransaksi($kode_kelompok_transaksi,$kode_group_status_keluarga)->result();
			echo json_encode($data);
		}

		function getJenisTransaksiPasangan(){
			$kode_kelompok_transaksi = $this->input->post('id',TRUE);
			$kode_group_status_keluarga = 2;	//Pasangan = 2
			$data = $this->m_jenis_transaksi->getJenisTransaksi($kode_kelompok_transaksi,$kode_group_status_keluarga)->result();
			echo json_encode($data);
		}

		function getJenisTransaksiAnak(){
			$kode_kelompok_transaksi = $this->input->post('id',TRUE);
			$kode_group_status_keluarga = 3;	//Anak = 3
			$data = $this->m_jenis_transaksi->getJenisTransaksi($kode_kelompok_transaksi,$kode_group_status_keluarga)->result();
			echo json_encode($data);
		}

		function getJenisTransaksiUpdate(){
			$kode_kelompok_transaksi = $this->input->post('id',TRUE);
			$data = $this->m_jenis_transaksi->getJenisTransaksiUpdate($kode_kelompok_transaksi)->result();
			echo json_encode($data);
		}

		function getTPK(){
			$kode_area = $this->input->post('id',TRUE);
			$data = $this->m_tpk->getTPK($kode_area)->result();
			echo json_encode($data);
		}

		function getInstansi(){
			$kode_kelompok_peserta = $this->input->post('id',TRUE);
			$data = $this->m_instansi->getInstansi($kode_kelompok_peserta)->result();
			echo json_encode($data);
		}

		function getBagian(){
			$kode_divisi = $this->input->post('id',TRUE);
			$data = $this->m_bagian->getBagian($kode_divisi)->result();
			echo json_encode($data);
		}

		function getKlasPosisi(){
			$nama_band = $this->input->post('id',TRUE);
			$data = $this->m_band_posisi->getKlasPosisi($nama_band)->result();
			echo json_encode($data);
		}

		function getKodeBandPosisi(){
			$str = $this->input->post('id',TRUE);
			$str_explode = explode('+', $str);	//memecah strings

			$nama_band = $str_explode[0];
			$klas_posisi = $str_explode[1];

			// $nama_band = $this->input->post('id',TRUE);
			$data = $this->m_band_posisi->getKodeBandPosisi($nama_band, $klas_posisi)->result();
			echo json_encode($data);
		}

		function getPersonalSubArea(){
			$kode_personal_area = $this->input->post('id',TRUE);
			$data = $this->m_personal_sub_area->getPersonalSubArea($kode_personal_area)->result();
			echo json_encode($data);
		}

		function getRegencies(){
			$id_province = $this->input->post('id',TRUE);
			$data = $this->m_regencies->getRegencies($id_province)->result();
			echo json_encode($data);
		}

		function getDistricts(){
			$id_regency = $this->input->post('id',TRUE);
			$data = $this->m_districts->getDistricts($id_regency)->result();
			echo json_encode($data);
		}

		function getVillages(){
			$id_district = $this->input->post('id',TRUE);
			$data = $this->m_villages->getVillages($id_district)->result();
			echo json_encode($data);
		}
	}

 ?>