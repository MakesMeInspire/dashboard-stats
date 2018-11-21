<?php
class M_User extends CI_Model {

	public function __construct()
	{
		$this->load->database();
		$this->load->helper('url');
	}

	public function getUserDetail($username)
	{   
        $result;
		$data = $this->db->query("SELECT * FROM login WHERE username = '$username'");

        return $data->result_array();
    }
}
