<?php
class M_User extends CI_Model {

	public function __construct()
	{
		$this->load->database();
		$this->load->helper('url');
	}

	public function getUserDetail($username)
	{   
		$data = $this->db->query("SELECT * FROM login WHERE username = '$username'");

        return $data->result_array();
	}
	
	public function getUserStatus($username)
	{   
		$data = $this->db->query("SELECT ls.status status FROM login as l INNER JOIN login_status as ls ON ls.id = l.status WHERE l.username = '$username'");

        return $data->result_array();
	}
	
	public function getUserSudah()
	{   
		$data = $this->db->query("SELECT * FROM data_mahasiswa WHERE answer IS NOT NULL");

        return $data->num_rows();
	}
	
	public function getUserBelum()
	{   
		$data = $this->db->query("SELECT * FROM data_mahasiswa WHERE answer IS NULL");

        return $data->num_rows();
    }
}
