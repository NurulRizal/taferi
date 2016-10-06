<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operator_model extends CI_Model {
	var $table = 'operator';
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	
	public function get_by_id($id)
	{
		$this->db->from($this->table);
		$this->db->where('nip',$id);
		$query = $this->db->get();

		return $query->row();
	}

	public function save($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	function post($data){
		$thid->db->insert('operator',$data);


	}
	

}

/* End of file Operator_model.php */
/* Location: ./application/models/Operator_model.php */