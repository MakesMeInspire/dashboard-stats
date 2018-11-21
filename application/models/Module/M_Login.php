<?php
class M_Login extends CI_Model {

	public function __construct()
	{
		$this->load->database();
		$this->load->helper('url');
	}

	public function getUser($username, $password)
	{   
        $result;
        $password = md5($password);
		$data = $this->db->query("SELECT * FROM login WHERE email = '$username' AND password = '$password'");
        
        if($data->num_rows() > 0){
            $result = "1";
        }else{
            $result = "0";
        }

        return $result;
    }
    
    public function getUsername($username)
	{   
        $result;
		$data = $this->db->query("SELECT username FROM login WHERE email = '$username'");
        
        return $data->result_array();
	}
}
