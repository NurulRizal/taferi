<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PT Nihon Plast Indonesia</title>
	   <!-- BOOTSTRAP STYLES-->
    <link href="http://localhost/coba_ta3/assets/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- FONTAWESOME STYLES-->
    <link href="http://localhost/coba_ta3/assets/bootstrap/css/font-awesome.min.css" rel="stylesheet">
    <!-- CUSTOM STYLES-->
    <link href="http://localhost/coba_ta3/assets/bootstrap/css/custom.css" rel="stylesheet">
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">PT Nihon Plast Indonesia</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> <?php include'waktu.php'; ?> &nbsp; <a href="<?php echo base_url('index.php/dashboard/logout');?>" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
<nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
			<!-- Tambahan dari Rizal start-->
			<?php if($this->session->userdata('jabatan') == '1'){
				include'S_menu.php'; 
			} else {
				include'G_menu.php';
			}?>
			<!-- Tambahan dari Rizal end-->
    </div>
            
        </nav> 

          <!-- /. ISI DISINI Untuk Judul  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                       
						<?php if($page == 'dash'){
						echo 'Selamat Datang '.$this->session->userdata('uname');?>
						</div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
            <!-- ISI Halaman Disini -->
            
                
            
            
            
            </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
      </div>
	      
        <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="http://localhost/coba_ta3/assets/jquery/jquery-2.1.4.min.js"></script>
    <script src="http://localhost/coba_ta3/assets/bootstrap/js/bootstrap.min.js"></script>
    
    
   

						<?php } else if ($page == 'akun'){
							
							$this->load->view('akun/akun_list');
						}?>
						
    <script src="http://localhost/coba_ta3/assets/jquery/jquery.metisMenu.js"></script>
    <script src="http://localhost/coba_ta3/assets/jquery/custom.js"></script>
    </body>
</html>                
    