<br>
<?php 
echo form_open('crud_prosesproduksi/edit');
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
                Edit Data Proses Produksi
            </div>
                 <div class="panel-body">
                    <input type="hidden" name="id" value="<?php echo $record['id'];?>" ></input>
                    <table border="0">
						<tr>
							<td width="240" height="45">
								ID Proses Produksi
							</td>
							<td width="606" height="45" colspan="2">
								<input type="text" value="<?php echo $record['id_proses'];?>" class="form-control" name="id_proses" placeholder="ID Proses Produksi">
						  </td>
						</tr>
						<tr>
							<td width="240" height="45">
								Nama Proses Produksi
							</td>
							<td height="45" colspan="2">
								<input type="text" value="<?php echo $record['nama_proses_produksi'];?>" name="nama_proses_produksi"  class="form-control" placeholder = "Nama Proses Produksi">
							</td>
						</tr>
						<tr>
							<td height="45">
							</td>
							<td width="100" weight="10">
								<button type="submit" class="btn btn-primary" name="submit">Simpan</button>
							</td>
							<td width="502">
								<?php echo anchor(site_url('proosesproduksi'), 'Batal', 'class="btn btn-danger"'); ?>
							</td>
						</tr>
					</table>
</form>
                </div>
            </div>
        </div>