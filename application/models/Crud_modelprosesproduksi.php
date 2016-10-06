<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_modelprosesproduksi extends CI_Model {

	function tampilkan_data(){
        
        return $this->db->get('proses_produksi');
    }

	function post($data){
		$this->db->insert('proses_produksi',$data);
	}

	function edit($data, $id)
	{
		$this->db->where('id',$id);
		$this->db->update('proses_produksi', $data);

	}

	function get_one($id)
	{
		$param = array('id' => $id);
		return $this->db->get_where('proses_produksi', $param);
	}

	function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('proses_produksi');

	}

}

/* End of file Crud_modelprosesproduksi.php */
/* Location: ./application/models/Crud_modelprosesproduksi.php */