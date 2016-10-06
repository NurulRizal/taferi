<html >
  <head>
    <meta charset="UTF-8">
    <title>PT Nihon Plas Indonesia</title>
        <link rel="stylesheet" href="http://localhost/coba_ta3/assets/bootstrap/css/reset.css">
        <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900|Material+Icons'>
        <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
        <link rel="stylesheet" href="http://localhost/coba_ta3/assets/bootstrap/css/style.css">
  </head>
  <body>
    <div class="pen-title">
      <H1>PT Nihon Plast Indonesia</H1>
        <span>Automotive Parts Manufacturing</span>
    </div>
    <div class="container">
        <!-- Column-->
            <div class="col">
                <!-- Form Container-->
                    <div class="form-container">
                        <div style="width: 360px;" class="form style-1" align="center">
                            <header class="header">
                            <h1 class="active">LOGIN FORM</h1>
                            <h1>Sign Up</h1>
                            </header>
                            <form action="<?php echo base_url('index.php/Login/do_login')?>" method="post" class="active">
                                <div class="form-group">
                                    <input type="text" name="uname" placeholder="username" required/>
                                    <label for="username">Username</label>
                                    <div class="line"></div>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="pass" placeholder="Password" required/>
                                    <label for="password">Password</label>
                                    <div class="line"></div>
                                </div>
                                    <button class="button" value="Login">Masuk</button>
                            </form>
                                <footer class="footer"><a href="#">Belum punya akun? Harap Hubungi Supervisor</a></footer>
                        </div>
                    </div>
            </div>
    </div>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="http://localhost/coba_ta3/assets/jquery/index.js"></script>   
  </body>
</html>