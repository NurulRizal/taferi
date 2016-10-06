<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {

	var $table = 'barang';
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	
	public function get_by_id($id)
	{
		$this->db->from($this->table);
		$this->db->where('id',$id);
		$query = $this->db->get();

		return $query->row();
	}

	public function save($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	function post($data){
		$thid->db->insert('barang',$data);


	}

}

/* End of file Barang_model.php */
/* Location: ./application/models/Barang_model.php */