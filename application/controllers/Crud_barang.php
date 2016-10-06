<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_barang extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('crud_modelbarang');

    }

	public function index()
	{
		$this->load->view('barang/barang_input');
	}

	function post()
    {
        if(isset($_POST['submit'])){
            // proses barang
            $part_number       =   $this->input->post('part_number');
            $id_proses         =   $this->input->post('id_proses');
            $produk            =   $this->input->post('produk');
            $model             =   $this->input->post('model');
            $data              = array('part_number'=>$part_number,
                                       'id_proses'=>$id_proses,
                                       'produk'=>$produk,
                                       'model'=>$model);
            $this->crud_modelbarang->post($data);
            redirect('barang');
        }
        else{
            $this->load->model('crud_modelprosesproduksi');
            $data['id_proses']=  $this->crud_modelprosesproduksi->tampilkan_data()->result();
            $this->load->view('barang/barang_input',$data);
            //$this->template->load('template','barang/form_input',$data);
        }
    }

    function edit()
    {
        if(isset($_POST['submit'])){
            // proses barang
            $id                =   $this->input->post('id');
            $part_number       =   $this->input->post('part_number');
            $id_proses         =   $this->input->post('id_proses');
            $produk            =   $this->input->post('produk');
            $model             =   $this->input->post('model');
            $data              =    array('part_number'=>$part_number,
                                       'id_proses'=>$id_proses,
                                       'produk'=>$produk,
                                       'model'=>$model);
            $this->crud_modelbarang->edit($data, $id);
            //print_r($data);
            //die;
            redirect('barang');
        }
        else{
            $id =   $this->uri->segment(3);
            $this->load->model('crud_modelprosesproduksi');
            $data['id_proses']  =  $this->crud_modelprosesproduksi->tampilkan_data()->result();
            $data['record']     = $this->crud_modelbarang->get_one($id)->row_array();
            $this->load->view('barang/barang_edit',$data);
            //$this->template->load('template','barang/form_input',$data);
        }
    }

     function delete()
    {
        $id = $this->uri->segment(3);
        $this->crud_modelbarang->delete($id);
        redirect('barang');

    }
}

/* End of file Crud_barang.php */
/* Location: ./application/controllers/Crud_barang.php */