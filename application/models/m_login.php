<?php 
 
class m_login extends CI_Model{	
	
	public function cek_login($data){

		$this->db->where('username', $data['nama']);
		$this->db->where('password', $data['password']);
		$query = $this->db->get('data_user');
		if ($query->num_rows() > 0) {
			return $query;
		}else{
			return null;
		}
	}

	public function getById($xid){
		$q = $this->db->select('nama_role')->from('role')->where('kode_role',$xid)->get();
		
		return $q->result();
	}

}?>