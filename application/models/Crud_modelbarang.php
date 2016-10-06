<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_modelbarang extends CI_Model {

	function tampilkan_data(){
        
        return $this->db->get('barang');
    }

	function post($data){
		$this->db->insert('barang',$data);
	}

	function edit($data, $id)
	{
		$this->db->where('id',$id);
		$this->db->update('barang', $data);

	}

	function get_one($id)
	{
		$param = array('id' => $id);
		return $this->db->get_where('barang', $param);
	}

	function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('barang');

	}

}

/* End of file Crud_modelbarang.php */
/* Location: ./application/models/Crud_modelbarang.php */