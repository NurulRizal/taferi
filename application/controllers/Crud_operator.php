<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_operator extends CI_Controller {
	
	function __construct()
    {
        parent::__construct();
        $this->load->model('crud_modeloperator');

    }

	public function index()
	{
		$this->load->view('operator/operator_list');
	}

	function post()
    {
        if(isset($_POST['submit'])){
            $nip 	  = $this->input->post('nip');
            $nama 	  = $this->input->post('nama');
            $data     = array('nip'=>$nip, 
                              'nama'=>$nama);

            $this->crud_modeloperator->post($data);
            redirect('operator');
        }
        else {
            $this->load->view('operator/operator_input');
        }

    }

    function edit()
    {
    	if(isset($_POST['submit'])){
    		$id 	  = $this->input->post('id');
            $nip 	  = $this->input->post('nip');
            $nama 	  = $this->input->post('nama');
            $data     = array('nip'=>$nip, 
                              'nama'=>$nama);
           // print_r($data);
            //die;
            $this->crud_modeloperator->edit($data, $id);
            redirect('operator');
        }
        else {
        	$id = $this->uri->segment(3);
        	
            $data['record'] = $this->crud_modeloperator->get_one($id)->row_array();
            $this->load->view('operator/operator_edit',$data);
        }

    }

    function delete()
    {
    	$id = $this->uri->segment(3);
    	$this->crud_modeloperator->delete($id);
    	redirect('operator');

    }

}

/* End of file Crud_operator.php */
/* Location: ./application/controllers/Crud_operator.php */