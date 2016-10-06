<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rencanaproduksi_model extends CI_Model {

	var $table = 'rencana_produksi';
	
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
		$thid->db->insert('rencana_produksi',$data);


	}

}

/* End of file Rencanaproduksi_model.php */
/* Location: ./application/models/Rencanaproduksi_model.php */