<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun_model extends CI_Model {

	var $table = 'akun';
public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	
	public function get_by_id($id)
	{
		$this->db->from($this->table);
		$this->db->where('username',$id);
		$query = $this->db->get();

		return $query->row();
	}

	public function save($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	function post($data){
		$thid->db->insert('akun',$data);


	}
	
}

/* End of file Akun_model */
/* Location: ./application/models/Akun_model */