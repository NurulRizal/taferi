<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operator extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Operator_model','Operator');

    }
    
    public function index()
    {
        $this->load->view('Operator/operator_list');
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
            $table = 'operator';
 
            // Table's primary key
            $primaryKey = 'id';
 
            // Array of database columns which should be read and sent back to DataTables.
            // The `db` parameter represents the column name in the database, while the `dt`
            // parameter represents the DataTables column identifier. In this case simple
            // indexes
 
            $columns = array(
                array('db' => 'id', 'dt' => 'DT_RowId'),
                array('db' => 'nip', 'dt' => 'nip'),
                array('db' => 'nama', 'dt' => 'nama'),
                array(
                    'db' => 'id',
                    'dt' => 'aksi',
                    'formatter' => function( $d ) {
                        return '<a class="btn btn-sm btn-primary" href="' . site_url('crud_operator/edit/' . $d) . '"><i class="glyphicon glyphicon-pencil"></i> Edit</a>  <a class="btn btn-sm btn-danger" href="' . site_url('crud_operator/delete/' . $d) . '"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
                        
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

/* End of file Operator.php */
/* Location: ./application/controllers/Operator.php */