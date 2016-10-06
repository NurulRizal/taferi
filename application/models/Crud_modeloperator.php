<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_modeloperator extends CI_Model {

	function tampilkan_data(){
        
        return $this->db->get('operator');
    }

	function post($data){
		$this->db->insert('operator',$data);
	}

	function edit($data, $id)
	{
		$this->db->where('id',$id);
		$this->db->update('operator', $data);

	}

	function get_one($id)
	{
		$param = array('id' => $id);
		return $this->db->get_where('operator', $param);
	}

	function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('operator');

	}

}

/* End of file Crud_operator.php */
/* Location: ./application/models/Crud_operator.php */