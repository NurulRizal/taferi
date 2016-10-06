
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <h2 style="margin-top:0px">Akun Pengguna</h2>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <?php echo anchor(site_url('crud_akun/post'), 'Tambah', 'class="btn btn-primary"'); ?>
            </div>
        </div>
        <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="mytable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Nama Lengkap</th>
                    <th>Jabatan</th>
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
                    "ajax": "<?php echo site_url('akun/ajax_tabel'); ?>",
                    "columns": [
                        {
                            "data": null,
                            "class": "text-center",
                            "orderable": false
                        },
                        {"data": "username"},
                        {"data": "password"},
                        {"data": "nama"},
                        {"data": "jabatan"},
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
        
   