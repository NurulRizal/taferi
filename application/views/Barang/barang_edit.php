<br>
<?php 
echo form_open('crud_barang/edit');
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
                Edit Data Barang
            </div>
                 <div class="panel-body">
                 <input type="hidden" class="form-control" value="<?php echo $record['id'];?>">
                    <table border="0">
						<tr>
							<td width="153" height="45">
								Part Number
							</td>
							<td height="45" colspan="2">
								<input type="text" class="form-control" value="<?php echo $record['part_number'];?>" name="part_number" placeholder="Part Number">
						  </td>
						</tr>
						<tr>
							<td width="153" height="45">
								ID Proses
							</td>
							<td height="45" colspan="2">
						    <select name="id_proses" class="form-control">
							<?php
                				foreach ($id_proses as $k)
                			{
                   				 
                   				 echo "<option value='$k->id_proses'";
                    			 echo $record['id_proses']==$k->id_proses?'selected':'';
                    			 echo">$k->id_proses</option>";
                			}
                			?>
            				</select>
							</td>
						</tr>
						<tr>
							<td width="153" height="45">
								Produk
							</td>
							<td height="45" colspan="2">
								<input type="text" name="produk" value="<?php echo $record['produk'];?>" class="form-control" placeholder="Produk">
							</td>
						</tr>
						<tr>
							<td width="153" height="45">
								Model
							</td>
							<td height="45" colspan="2">
								<input type="text" name="model" value="<?php echo $record['model'];?>" class="form-control" placeholder="Model">
							</td>
							</td>
						</tr>
						<tr>
							<td height="45">
							</td>
							<td width="100" weight="10">
								<button type="submit" class="btn btn-primary" name="submit">Simpan</button>
							</td>
							<td width="502">
								<?php echo anchor(site_url('barang'), 'Lihat Data', 'class="btn btn-danger"'); ?>
							</td>
						</tr>
					</table>
</form>
                </div>
            </div>
        </div>