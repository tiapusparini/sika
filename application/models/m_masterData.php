<?php 
 
class m_masterData extends CI_Model{	
    
    //AREA
	public function getArea(){
        $this->db->select('*')->from('area');
        $query = $this->db->get();

        return $query->result();
    }
    
    public function UpdateArea($kode, $nama){
        $hasil=$this->db->query("UPDATE area SET nama_area='$nama' WHERE kode_area='$kode'");
        return $hasil;
    }

    public function deleteArea($kode){
        $hasil=$this->db->query("DELETE FROM area WHERE kode_area='$kode'");
        return $hasil;
    }

    public function insertArea($kode, $nama){
        $hasil=$this->db->query("INSERT INTO area (kode_area, nama_area) VALUES ('$kode', '$nama')");
        return $hasil;
    }

    //PERSONAL AREA
	public function getPersonalArea(){
        $this->db->select('*')->from('personal_area');
        $query = $this->db->get();

        return $query->result();
    }    

    public function insertPersonalArea($kode, $nama, $status){
        $hasil=$this->db->query("INSERT INTO personal_area (kode_personal_area, nama_personal_area, status_aktif) VALUES ('$kode', '$nama', '$status')");
        return $hasil;
    }
    
    public function updatePersonalArea($kode, $nama, $status){
        $hasil=$this->db->query("UPDATE personal_area SET nama_personal_area='$nama', status_aktif='$status' WHERE kode_personal_area='$kode'");
        return $hasil;
    }

    public function deletePersonalArea($kode){
        $hasil=$this->db->query("DELETE FROM personal_area WHERE kode_personal_area='$kode'");
        return $hasil;
    }

    //PERSONAL SUB AREA
    public function getPersonalSubArea(){
        $this->db->select('*')->from('personal_sub_area');
        $query = $this->db->get();

        return $query->result();
    }

    public function insertPersonalSubArea($kodePersonalArea, $namaPersonalSubArea, $kodePersonalSubArea, $status){
        $hasil=$this->db->query("INSERT INTO personal_sub_area (kode_personal_area, nama_personal_sub_area, kode_personal_sub_area, status_aktif) 
        VALUES ('$kodePersonalArea', '$namaPersonalSubArea', '$kodePersonalSubArea', '$status')");
        return $hasil;
    }

    public function updatePersonalSubArea($kodePersonalArea, $namaPersonalSubArea, $kodePersonalSubArea, $status){
        $hasil=$this->db->query("UPDATE personal_sub_area SET nama_personal_sub_area='$namaPersonalSubArea', kode_personal_area='$kodePersonalArea' status_aktif='$status' WHERE kode_personal_sub_area='$kodePersonalSubArea'");
        return $hasil;
    }

    public function deletePersonalSubArea($kodePersonalSubArea){
        $hasil=$this->db->query("DELETE FROM personal_sub_area WHERE kode_personal_sub_area='$kodePersonalSubArea'");
        return $hasil;
    }

    //KELOMPOK PESERTA
    public function getKelompokPeserta(){
        $this->db->select('*')->from('kelompok_peserta');
        $query = $this->db->get();

        return $query->result();
    }

    public function updateKelompokPeserta($kode, $nama){
        $hasil=$this->db->query("UPDATE kelompok_peserta SET nama_kelompok_peserta='$nama' WHERE kode_kelompok_peserta='$kode'");
        return $hasil;
    }

    public function deleteKelompokPeserta($kode){
        $hasil=$this->db->query("DELETE FROM kelompok_peserta WHERE kode_kelompok_peserta='$kode'");
        return $hasil;
    }

    public function insertKelompokPeserta($kode, $nama){
        $hasil=$this->db->query("INSERT INTO kelompok_peserta (kode_kelompok_peserta, nama_kelompok_peserta) VALUES ('$kode', '$nama')");
        return $hasil;
    }

    //GRUP JENIS PESERTA
    public function getGrupJenisPeserta(){
        $this->db->select('*')->from('group_jenis_peserta');
        $query = $this->db->get();

        return $query->result();
    }

    //JENIS PESERTA
    public function getJenisPeserta(){
        $hasil=$this->db->query("SELECT jenis_peserta.kode_jenis_peserta, jenis_peserta.nama_jenis_peserta, 
        group_jenis_peserta.nama_group_jenis_peserta, group_status_keluarga.nama_group_status_keluarga
        FROM jenis_peserta INNER JOIN group_jenis_peserta ON group_jenis_peserta.kode_group_jenis_peserta = jenis_peserta.kode_group_jenis_peserta 
        INNER JOIN group_status_keluarga ON group_status_keluarga.kode_group_status_keluarga = jenis_peserta.kode_group_status_keluarga");

        return $hasil->result();
    }

    //RULE JENIS PESERTA
    public function getRuleJenisPeserta(){
        $hasil=$this->db->query("SELECT rule_jenis_peserta.kode_rule, rule_jenis_peserta.nama_rule, 
        rule_jenis_peserta.status_aktif, rule_jenis_peserta.status_nikah, jenis_peserta.nama_jenis_peserta 
        FROM `rule_jenis_peserta` INNER JOIN jenis_peserta ON jenis_peserta.kode_jenis_peserta = rule_jenis_peserta.kode_jenis_peserta");

        return $hasil->result();
    }

    //INSTANSI
    public function getInstansi(){
        $hasil=$this->db->query("SELECT instansi.kode_instansi, instansi.nama_instansi, 
        kelompok_peserta.nama_kelompok_peserta FROM `instansi` 
        INNER JOIN kelompok_peserta ON kelompok_peserta.kode_kelompok_peserta = instansi.kode_kelompok_peserta");

        return $hasil->result();
    }

    //PEKERJAAN
    public function getPekerjaan(){
        $hasil=$this->db->query("SELECT instansi.nama_instansi, pekerjaan.kode_pekerjaan, pekerjaan.nama_pekerjaan 
        FROM pekerjaan INNER JOIN instansi ON instansi.kode_instansi = pekerjaan.kode_instansi");

        return $hasil->result();
    }

    //DIVISI
    public function getDivisi(){
        $hasil=$this->db->query("SELECT instansi.nama_instansi, divisi.kode_divisi, divisi.nama_divisi 
        FROM divisi INNER JOIN instansi ON instansi.kode_instansi = divisi.kode_instansi");

        return $hasil->result();
    }

    //Bagian
    public function getBagian(){
        $hasil=$this->db->query("SELECT divisi.nama_divisi, bagian.kode_bagian, bagian.nama_bagian 
        FROM bagian INNER JOIN divisi ON bagian.kode_divisi = divisi.kode_divisi;");

        return $hasil->result();
    }

    //Bank
    public function getBank(){
        $this->db->select('*')->from('bank');
        $query = $this->db->get();

        return $query->result();
    }

    //Jenis Transaksi
    public function getJenisTransaksi(){
        $hasil=$this->db->query("SELECT jenis_transaksi.kode_jenis_transaksi, jenis_transaksi.nama_jenis_transaksi, 
        kelompok_transaksi.nama_kelompok_transaksi FROM `jenis_transaksi` 
        INNER JOIN kelompok_transaksi ON kelompok_transaksi.kode_kelompok_transaksi = jenis_transaksi.kode_kelompok_transaksi");

        return $hasil->result();
    }

    //Kelompok Transaksi
    public function getKelompokTransaksi(){
        $this->db->select('*')->from('kelompok_transaksi');
        $query = $this->db->get();

        return $query->result();
    }

    //Band Posisi
    public function getBandPosisi(){
        $this->db->select('*')->from('band_posisi');
        $query = $this->db->get();

        return $query->result();
    }

    //Band Posisi Pensiunan
    public function getBandPensiunan(){
        $hasil=$this->db->query("SELECT s.grade, s.tipe, x.nama_band, x.klas_posisi, x.kelas_perawatan, x.kode_band_posisi 
        FROM band_posisi_pensiunan s INNER JOIN band_posisi x ON s.kode_band_posisi = x.kode_band_posisi");

        return $hasil->result();
    }

    //Kota Kantor
    public function getKotaKantor(){
        $this->db->select('*')->from('kota_kantor');
        $query = $this->db->get();

        return $query->result();
    }

    //HR Host
    public function getHRHost(){
        $this->db->select('*')->from('hr_host');
        $query = $this->db->get();

        return $query->result();
    }

    //TPK
    public function getTPK(){
        $hasil=$this->db->query("SELECT x.kode_tpk, x.nama_tpk, y.nama_kota_kantor, x.alamat_tpk, z.nama_area, 
        x.status_tpk, x.status_aktif FROM tpk x INNER JOIN kota_kantor y ON x.kode_kota_kantor=y.kode_kota_kantor 
        INNER JOIN area z ON x.kode_area=z.kode_area");

        return $hasil->result();
    }

    //Provinsi
    public function getProvinces(){
        $this->db->select('*')->from('provinces');
        $query = $this->db->get();

        return $query->result();
    }

    //Kabupaten
    public function getRegencies(){
        $hasil=$this->db->query("SELECT x.id, x.name as kabupaten, y.name as provinsi FROM regencies x 
        INNER JOIN provinces y ON y.id = x.province_id");

        return $hasil->result();
    }

    //Kecamatan
    public function getDistricts(){
        $hasil=$this->db->query("SELECT x.id, x.name as kecamatan, y.name as kabupaten FROM districts x 
        INNER JOIN regencies y ON y.id = x.regency_id");

        return $hasil->result();
    }

    //ROLE
    public function getRole(){
        $this->db->select('*')->from('role');
        $query = $this->db->get();

        return $query->result();
    }
}

