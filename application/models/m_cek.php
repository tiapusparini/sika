<?php 
 
class m_cek extends CI_Model{	
	
	public function cekDataByNIKES($data){
        $query = $this->db->query("
        select x.nikes, aa.nama_band, y.nama, z.kode_group_jenis_peserta, y.gol_darah, dd.nama_tpk from peserta x, 
        peserta_data_pribadi y, jenis_peserta z, peserta_data_tpk cc, tpk dd, (
            select a.kode_data_kepegawaian, b.nama_band from peserta_data_kepegawaian a
                left join band_posisi b 
                on a.kode_band_posisi = b.kode_band_posisi ) as aa
                where x.kode_data_kepegawaian = aa.kode_data_kepegawaian
                and x.kode_data_pribadi = y.kode_data_pribadi
                and z.kode_jenis_peserta = x.kode_jenis_peserta
                and x.kode_data_tpk = cc.kode_data_tpk
                and cc.kode_tpk = dd.kode_tpk
                and x.nikes = '$data'
                LIMIT 1
        ");
    
        return $query->result();
	}

    public function cekDataByNIKNAMA($nik, $nama){
        $query = $this->db->query("
        select x.nikes, ar.nama_area, temp.alamat, temp.name, x.kode_data_tpk, y.nama, y.tgl_lahir, TIMESTAMPDIFF(YEAR, y.tgl_lahir, CURDATE()) AS age, aa.nama_band, y.no_bpjs, y.no_ktp, 
        cc.status_faskes, aa.kelas_perawatan, aa.klas_posisi, aa.tgl_capeg, aa.tgl_mulai_kerja, aa.tgl_pensiun, 
        aa.tgl_berhenti_kerja, aa.alasan_berhenti_kerja, y.gol_darah, dd.nama_tpk from peserta x,
        peserta_data_pribadi y, jenis_peserta z, peserta_data_tpk cc, tpk dd, area ar,  (
            select a.kode_data_kepegawaian, a.tgl_capeg, a.tgl_mulai_kerja, a.tgl_pensiun, a.tgl_berhenti_kerja, a.alasan_berhenti_kerja, b.nama_band, b.kelas_perawatan, b.klas_posisi from peserta_data_kepegawaian a
                left join band_posisi b on a.kode_band_posisi = b.kode_band_posisi ) as aa, (SELECT pdil.kode_data_info_lain, pdil.kode_alamat_ktp, pda.alamat, pda.name FROM peserta_data_info_lain pdil
	            left join (SELECT pda.kode_alamat, pda.alamat, pda.kode_kabupaten, rg.name FROM peserta_data_alamat pda
	            left join regencies rg on rg.id = pda.kode_kabupaten) as pda on pdil.kode_alamat_ktp = pda.kode_alamat) as temp
                where x.kode_data_kepegawaian = aa.kode_data_kepegawaian
                and temp.kode_data_info_lain = x.kode_data_info_lain
                and ar.kode_area = dd.kode_area
                and x.kode_data_pribadi = y.kode_data_pribadi
                and z.kode_jenis_peserta = x.kode_jenis_peserta
                and x.kode_data_tpk = cc.kode_data_tpk
                and cc.kode_tpk = dd.kode_tpk
                and x.nikes LIKE '%$nik%'
                and y.nama LIKE '%$nama%'
                
        ");
    
        return $query->result();
    }
    
    public function getBandPosisiGroupByName(){
        $this->db->select('*')->from('band_posisi');
        $this->db->group_by('nama_band');
        $query = $this->db->get();

        return $query->result();
    }

    public function getKelasRawat(){
        $query = $this->db->query("
            SELECT nama_area, hak_kelas, nama_band, nama_rs, nama_kota_kantor, nama_group_jenis_peserta 
            FROM kelas_rawat_inap, band_posisi, area, kota_kantor, group_jenis_peserta
            WHERE kelas_rawat_inap.hak_kelas=band_posisi.kelas_perawatan
            AND area.kode_area = kelas_rawat_inap.kode_area
            AND kelas_rawat_inap.kode_kota_kantor = kota_kantor.kode_kota_kantor
            AND kelas_rawat_inap.kode_group_jenis_peserta = group_jenis_peserta.kode_group_jenis_peserta
        ");

        return $query->result();
    }
}?>