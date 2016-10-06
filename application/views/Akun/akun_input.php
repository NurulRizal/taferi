<br>
<?php 
echo form_open('crud_akun/post');
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
                Tambah Akun Pengguna
            </div>
                 <div class="panel-body">
                    <table border="0">
						<tr>
							<td width="153" height="45">
								Username
							</td>
							<td height="45" colspan="2">
								<input type="text" class="form-control" name="username" placeholder="Username">
						  </td>
						</tr>
						<tr>
							<td width="153" height="45">
								Password
							</td>
							<td height="45" colspan="2">
								<input type="text" name="password"  class="form-control" placeholder="Password">
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
							<td width="153" height="45">
								Jabatan
							</td>
							<td height="45" colspan="2">
								<select class="form-control" name="jabatan">
                                                <option>-Pilih Jabatan-</option>
                                                <option value = 1>Supervisor</option>
                                                <option value = 2>Groupleader</option>
                                </select>

							</td>
						</tr>
						<tr>
							<td height="45">
							</td>
							<td width="100" weight="10">
								<button type="submit" class="btn btn-primary" name="submit">Simpan</button>
							</td>
							<td width="502">
								<?php echo anchor(site_url('akun'), 'Batal', 'class="btn btn-danger"'); ?>
							</td>
						</tr>
					</table>
</form>
                </div>
            </div>
        </div>