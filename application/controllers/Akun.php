<?php
 
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
 
class Akun extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('akun_model','akun');

    }
    
    public function index()
    {
        //$this->load->view('akun/akun_list');

        //$this->template->content->view('akun/akun_list');
        
        //$this->template->publish();
		$data['page'] = 'akun';
		$this->load->view('template',$data);
        $this->load->library('datatables_ssp');

    }
 
    public function ajax_tabel()
    {
        if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        } else {
//            panggil dulu library datatablesnya
            
            $this->load->library('datatables_ssp');
            
//            atur nama tablenya disini
            $table = 'akun';
 
            // Table's primary key
            $primaryKey = 'id';
 
            // Array of database columns which should be read and sent back to DataTables.
            // The `db` parameter represents the column name in the database, while the `dt`
            // parameter represents the DataTables column identifier. In this case simple
            // indexes
 
            $columns = array(
                array('db' => 'id', 'dt' => 'DT_RowId'),
                array('db' => 'username', 'dt' => 'username'),
                array('db' => 'password', 'dt' => 'password'),
                array('db' => 'nama', 'dt' => 'nama'),
                array('db' => 'jabatan', 'dt' => 'jabatan'),
                array(
                    'db' => 'id',
                    'dt' => 'aksi',
                    'formatter' => function( $d ) {
                        return '<a class="btn btn-sm btn-primary" href="' . site_url('crud_akun/edit/' . $d) . '"><i class="glyphicon glyphicon-pencil"></i> Edit</a>  <a class="btn btn-sm btn-danger" href="' . site_url('crud_akun/delete/' . $d) . '"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
                        
                   }
                ),
            );
 
            // SQL server connection information
            $sql_details = array(
                'user' => 'root',
                'pass' => '',
                'db' => 'coba_ta',
                'host' => 'localhost'
            );
 
            echo json_encode(
                    Datatables_ssp::simple($_GET, $sql_details, $table, $primaryKey, $columns)
            );
        }
    }


    
    
        
 
}
 
/* End of file Kodepos.php */
/* Location: ./application/controllers/Kodepos.php */