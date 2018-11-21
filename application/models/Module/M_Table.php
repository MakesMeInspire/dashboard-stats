<?php
class M_Table extends CI_Model {

	public function __construct()
	{
		$this->load->database();
		$this->load->helper('url');
	}

	public function getData()
	{
		$data = $this->db->query("SELECT * FROM data_mahasiswa");
		
		return $data->result_array();
	}
}
