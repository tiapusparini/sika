<?php 

	class m_user extends CI_Model {

		function __construct()
		{
			parent::__construct();
		}

		public function login($username,$password)
		{
			$check = $this->db->get_where('user', array('username' => $username, 'password' => md5($password)));

			if($check->num_rows() > 0)
			{
				$this->session->id_user = $check->row()->id_user;
				$this->session->level = $check->row()->level;
				$this->session->nama_user = $check->row()->nama;
				return 1;
			}else
			{
				return 0;
			}
		}

		public function signup($data)
		{
			$this->db->insert('user',$data);
		}

		public function getById($xid)
		{
			$q = $this->db->select('*')->from('user')->where('id_user',$xid)->get();

			return $q->result();
		}

		public function getWhere($xlevel)
		{
			$q = $this->db->get_where('user', array('level' => $xlevel));

			return $q->result();
		}

		public function getPassword($xid)
		{
			$q = $this->db->get_where('user', array('id_user' => $xid));

			return $q->row()->password;
		}

		public function insertData($data)
		{
			$this->db->insert('user',$data);
		}

		public function updateData($data,$xid)
		{
			$this->db->where('id_user',$xid);
			$this->db->update('user',$data);
		}

		public function hapusData($id)
		{
			$this->db->where('id_user',$id);
			$this->db->delete('user');
		}
	}


 ?>