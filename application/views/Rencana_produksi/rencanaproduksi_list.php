<!doctype html>
<html>
    <head>
   
        <title>PT Nihon Plast Indonesia</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/datatables/dataTables.bootstrap.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
            .dataTables_wrapper .dataTables_processing {
                position: absolute;
                top: 50%;
                left: 50%;
                width: 100%;
                height: 40px;
                margin-left: -50%;
                margin-top: -25px;
                padding-top: 20px;
                text-align: center;
                font-size: 1.2em;
                color:grey;
            }
        </style>
    </head>
    <body>
        
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <h2 style="margin-top:0px">Data Rencana Produksi</h2>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <?php echo anchor(site_url('crud_rencanaproduksi/post'), 'Tambah', 'class="btn btn-primary"'); ?>
            </div>
        </div>
        <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="mytable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Rencana Produksi</th>
                    <th>Part Number</th>
                    <th>Tanggal</th>
                    <th>Jumlah Shift 1</th>
                    <th>Jumlah Shift 2</th>
                    <th>Area Plan</th>
                    <th>Action</th>
                </tr>
            </thead>
        </table>
        
        <script src="<?php echo base_url('assets/jquery/jquery-2.1.4.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
        <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
        <script type="text/javascript">
        var save_method; //for save method string
        var table;
        
            $(document).ready(function () {
 
                $.fn.dataTableExt.oApi.fnPagingInfo = function (oSettings)
                {
                    return {
                        "iStart": oSettings._iDisplayStart,
                        "iEnd": oSettings.fnDisplayEnd(),
                        "iLength": oSettings._iDisplayLength,
                        "iTotal": oSettings.fnRecordsTotal(),
                        "iFilteredTotal": oSettings.fnRecordsDisplay(),
                        "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
                        "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
                    };
                };
 
                var t = $('#mytable').DataTable({
                    "processing": true,
                    "serverSide": true,
                    "ajax": "<?php echo site_url('rencanaproduksi/ajax_tabel'); ?>",
                    "columns": [
                        {
                            "data": null,
                            "class": "text-center",
                            "orderable": false
                        },
                        {"data": "id_rencana"},
                        {"data": "part_number"},
                        {"data": "tanggal"},
                        {"data": "jumlah_shift1"},
                        {"data": "jumlah_shift2"},
                        {"data": "area_plan"},
                        {
                            "class": "text-center",
                            "data": "aksi"
                        }
                    ],
                    "order": [[1, 'asc']],
                    "rowCallback": function (row, data, iDisplayIndex) {
                        var info = this.fnPagingInfo();
                        var page = info.iPage;
                        var length = info.iLength;
                        var index = page * length + (iDisplayIndex + 1);
                        $('td:eq(0)', row).html(index);
                    }
                });
            });
            
        </script>
        
        
        
    </body>
</html>