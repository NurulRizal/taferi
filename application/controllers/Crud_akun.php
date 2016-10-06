<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_akun extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('crud_modelakun');

    }

	public function index()
	{
		$this->load->view('akun/akun_list');
	}

	function post()
    {
        if(isset($_POST['submit'])){
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $nama     = $this->input->post('nama');
            $jabatan  = $this->input->post('jabatan');
            $data     = array('username'=>$username, 
                              'password'=>$password,
                              'nama'=>$nama,
                              'jabatan'=>$jabatan);

            $this->crud_modelakun->post($data);
            redirect('akun');
        }
        else {
            $this->load->view('akun/akun_input');
        }

    }

    function edit()
    {
    	if(isset($_POST['submit'])){
    		$id 	  = $this->input->post('id');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $nama     = $this->input->post('nama');
            $jabatan  = $this->input->post('jabatan');
            $data     = array('username'=>$username, 
                              'password'=>$password,
                              'nama'=>$nama,
                              'jabatan'=>$jabatan);

            $this->crud_modelakun->edit($data, $id);
            redirect('akun');
        }
        else {
        	$id = $this->uri->segment(3);
        	
            $data['record'] = $this->crud_modelakun->get_one($id)->row_array();
            $this->load->view('akun/akun_edit',$data);
        }

    }

    function delete()
    {
    	$id = $this->uri->segment(3);
    	$this->crud_modelakun->delete($id);
    	redirect('akun');

    }

}

/* End of file Crud_akun.php */
/* Location: ./application/controllers/Crud_akun.php */