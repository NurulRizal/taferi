<br>
<?php 
echo form_open('crud_operator/post');
?>

	<link href="http://localhost/coba_ta3/assets/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- FONTAWESOME STYLES-->
    <link href="http://localhost/coba_ta3/assets/bootstrap/css/font-awesome.min.css" rel="stylesheet">
    <!-- CUSTOM STYLES-->
    <link href="http://localhost/coba_ta3/assets/bootstrap/css/custom.css" rel="stylesheet">
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

	<div class="col-md-6 col-sm-4">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Tambah Operator
            </div>
                 <div class="panel-body">
                    <table border="0">
						<tr>
							<td width="153" height="45">
								NIP
							</td>
							<td height="45" colspan="2">
								<input type="text" class="form-control" name="nip" placeholder="NIP">
						  </td>
						</tr>
						<tr>
							<td width="153" height="45">
								Nama Lengkap
							</td>
							<td height="45" colspan="2">
								<input type="text" name="nama"  class="form-control" placeholder="Nama Lengkap">
							</td>
						</tr>
						<tr>
							<td height="45">
							</td>
							<td width="100" weight="10">
								<button type="submit" class="btn btn-primary" name="submit">Simpan</button>
							</td>
							<td width="502">
								<?php echo anchor(site_url('Operator'), 'Batal', 'class="btn btn-danger"'); ?>
							</td>
						</tr>
					</table>
</form>
                </div>
            </div>
        </div>