<?php
 
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
 
class Kodepos extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('kodepos_model','kodepos');
	}
	
    public function index()
    {
        $this->load->view('kodepos_list');
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
            $table = 'kodepos';
 
            // Table's primary key
            $primaryKey = 'id_kodepos';
 
            // Array of database columns which should be read and sent back to DataTables.
            // The `db` parameter represents the column name in the database, while the `dt`
            // parameter represents the DataTables column identifier. In this case simple
            // indexes
 
            $columns = array(
                array('db' => 'id_kodepos', 'dt' => 'DT_RowId'),
                array('db' => 'kodepos', 'dt' => 'kodepos'),
                array('db' => 'kelurahan', 'dt' => 'kelurahan'),
                array('db' => 'kecamatan', 'dt' => 'kecamatan'),
                array('db' => 'kota', 'dt' => 'kota'),
                array('db' => 'provinsi', 'dt' => 'provinsi'),
                array(
                    'db' => 'id_kodepos',
                    'dt' => 'aksi',
                    'formatter' => function( $d ) {
                        return '<a class="btn btn-sm btn-primary" href="' . site_url('kodepos/update/' . $d) . '"><i class="glyphicon glyphicon-pencil"></i> Edit</a>  <a class="btn btn-sm btn-danger" href="' . site_url('kodepos/delete/' . $d) . '"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
						
				   }
                ),
            );
 
            // SQL server connection information
            $sql_details = array(
                'user' => 'root',
                'pass' => '',
                'db' => 'crud',
                'host' => 'localhost'
            );
 
            echo json_encode(
                    Datatables_ssp::simple($_GET, $sql_details, $table, $primaryKey, $columns)
            );
        }
    }
	
	public function ajax_add()
	{
		$kodepos = $this->input->post('kodepos');
		$kelurahan = $this->input->post('kelurahan');
		$kecamatan = $this->input->post('kecamatan');
		$kota = $this->input->post('kota');
		$provinsi = $this->input->post('provinsi');
		$data = array('kodepos'=>$kodepos, 'kelurahan'=>$kelurahan,
						'kecamatan'=>$kecamatan,'kota'=>$kota,
						'provinsi'=>$provinsi);
						print_r($data);
						
						die;
		
		
		echo json_encode(Datatables_ssp::simple($_GET, $sql_details, $table, $primaryKey, $columns));
	}
 
}
 
/* End of file Kodepos.php */
/* Location: ./application/controllers/Kodepos.php */