<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_modelakun extends CI_Model {

	function tampilkan_data(){
        
        return $this->db->get('akun');
    }


	function post($data){
		$this->db->insert('akun',$data);
	}

	function edit($data, $id)
	{
		$this->db->where('id',$id);
		$this->db->update('akun', $data);

	}

	function get_one($id)
	{
		$param = array('id' => $id);
		return $this->db->get_where('akun', $param);
	}

	function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('akun');

	}
}

/* End of file Crud_modelakun.php */
/* Location: ./application/models/Crud_modelakun.php */