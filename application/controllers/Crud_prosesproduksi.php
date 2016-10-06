<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_prosesproduksi extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('crud_modelprosesproduksi');

    }

	public function index()
	{
		$this->load->view('proses_produksi/prosesproduksi_list');
	}

	function post()
    {
        if(isset($_POST['submit'])){
            $id_proses 	  			= $this->input->post('id_proses');
            $nama_proses_produksi 	  = $this->input->post('nama_proses_produksi');
            $data     = array('id_proses'=>$id_proses, 
                              'nama_proses_produksi'=>$nama_proses_produksi);

            $this->crud_modelprosesproduksi->post($data);
            redirect('proses_produksi');
        }
        else {
            $this->load->view('proses_produksi/prosesproduksi_input');
        }

    }

    function edit()
    {
    	if(isset($_POST['submit'])){
    		$id 	  				  = $this->input->post('id');
            $id_proses 	  			  = $this->input->post('id_proses');
            $nama_proses_produksi 	  = $this->input->post('nama_proses_produksi');
            $data     = array('id_proses'=>$id_proses, 
                              'nama_proses_produksi'=>$nama_proses_produksi);
            
            $this->crud_modelprosesproduksi->edit($data, $id);
            redirect('prosesproduksi');
        }
        else {
        	$id = $this->uri->segment(3);
        	
            $data['record'] = $this->crud_modelprosesproduksi->get_one($id)->row_array();
            $this->load->view('proses_produksi/prosesproduksi_edit',$data);
        }

    }

    function delete()
    {
    	$id = $this->uri->segment(3);
    	$this->crud_modelprosesproduksi->delete($id);
    	redirect('prosesproduksi');

    }

}

/* End of file Crud_prosesproduksi.php */
/* Location: ./application/controllers/Crud_prosesproduksi.php */