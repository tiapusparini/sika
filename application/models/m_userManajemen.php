<?php 
 
class m_userManajemen extends CI_Model{	
    
    //DATA USER
	public function getUsers(){
        $query = $this->db->query("SELECT data_user.kode_user, data_user.username, data_user.nama_user, 
            data_user.status_aktif, role.nama_role, area.nama_area 
            FROM data_user INNER JOIN role ON role.kode_role = data_user.kode_role 
            INNER JOIN area ON area.kode_area = data_user.kode_area");
        return $query->result();
    }
    
    public function UpdateDataUsers($kode, $nama, $selectRole, $selectArea, $status){
        $hasil=$this->db->query("
        UPDATE data_user SET nama_user='$nama', kode_role='$selectRole', 
        kode_area='$selectArea', status_aktif='$status' WHERE kode_user='$kode'
        ");
        return $hasil;
    }

    public function deleteDataUsers($kode){
        $hasil=$this->db->query("DELETE FROM data_user WHERE kode_user='$kode'");
        return $hasil;
    }

    public function insertDataUsers($kode, $nama, $username, $password, $selectRole, $selectArea, $status){
        $hasil=$this->db->query("
        INSERT INTO data_user (kode_user, nama_user, username, password, kode_role, kode_area, status_aktif) 
        VALUES ('$kode', '$nama', '$username', '$password', '$selectRole', '$selectArea', '$status')");
        return $hasil;
    }

    //ROLE
	public function getRole(){
        $this->db->select('*')->from('role');
        $query = $this->db->get();

        return $query->result();
    }    

    public function insertRoleP($kode, $nama){
        $hasil=$this->db->query("INSERT INTO role (kode_role, nama_role) VALUES ('$kode', '$nama')");
        return $hasil;
    }
    
    public function updateRoleP($kode, $nama){
        $hasil=$this->db->query("UPDATE role SET nama_role='$nama' WHERE kode_role='$kode'");
        return $hasil;
    }

    public function deleteRoleP($kode){
        $hasil=$this->db->query("DELETE FROM role WHERE kode_role='$kode'");
        return $hasil;
    }

    //MODULES
    public function getModules(){
        $this->db->select('*')->from('module');
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

}