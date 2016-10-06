<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rencanaproduksi extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('rencanaproduksi_model','rencanaproduksi');

    }
    
    public function index()
    {
        $this->load->view('rencana_produksi/rencanaproduksi_list');
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
            $table = 'rencana_produksi';
 
            // Table's primary key
            $primaryKey = 'id';
 
            // Array of database columns which should be read and sent back to DataTables.
            // The `db` parameter represents the column name in the database, while the `dt`
            // parameter represents the DataTables column identifier. In this case simple
            // indexes
 
            $columns = array(
                array('db' => 'id', 'dt' => 'DT_RowId'),
                array('db' => 'id_rencana', 'dt' => 'id_rencana'),
                array('db' => 'part_number', 'dt' => 'part_number'),
                array('db' => 'tanggal', 'dt' => 'tanggal'),
                array('db' => 'jumlah_shift1', 'dt' => 'jumlah_shift1'),
                array('db' => 'jumlah_shift2', 'dt' => 'jumlah_shift2'),
                array('db' => 'area_plan', 'dt' => 'area_plan'),
                array(
                    'db' => 'id',
                    'dt' => 'aksi',
                    'formatter' => function( $d ) {
                        return '<a class="btn btn-sm btn-primary" href="' . site_url('crud_rencanaproduksi/edit/' . $d) . '"><i class="glyphicon glyphicon-pencil"></i> Edit</a>  <a class="btn btn-sm btn-danger" href="' . site_url('crud_rencanaproduksi/delete/' . $d) . '"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
                        
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

/* End of file rencanaproduksi.php */
/* Location: ./application/controllers/rencanaproduksi.php */