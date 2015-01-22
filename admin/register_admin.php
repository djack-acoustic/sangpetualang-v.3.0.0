<?php
    include('model/admin.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
   	<link href="../css/custom.css" rel="stylesheet">
	
    <!-- Custom Fonts -->
    <link href="../font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">    
    
    <!--[if lt IE 9]-->
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <!--[endif]-->
    
</head>

<body>
	<nav class="navbar navbar-default">
        <div class="container" >
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="index.php"><b>Sang Petualang</b></a>
            </div>
        </div>
    </nav><br><br>    
    <div class="container" style="min-height:630px;text-align:center;">
        <div class="col-md-4"></div>
        <div class="row">
            <form method="post" action="">
                <div class="row">
                    <div class="col-md-4 modal-content">
                        <h3>Registrasi</h3>
                        <div class="form-group">
                            <label for="nama"></label>
                            <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                            <input type="text" class="form-control input-lg" name="nama" placeholder="Nama lengkap" required /><br /><br />
                        </div></div>
                        
                        <div class="form-group">
                            <label for="username"></label>
                            <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                            <input type="text" class="form-control input-lg" name="username" placeholder="Enter username" required /><br /><br />
                        </div></div>
    
                        <div class="form-group">
                            <label for="telepon"></label>
                            <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span>
                            <input type="text" class="form-control input-lg" name="telepon" placeholder="No Telepon" required /><br /><br />
                        </div></div>
                       
                        <div class="form-group">
                            <label for="password"></label>
                            <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-wrench"></span></span>
                            <input type="password" class="form-control input-lg" name="pass" placeholder="Password" required /><br /><br />
                        </div></div>
                        <div class="form-group">
                            <label for="password"></label>
                            <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-repeat"></span></span>
                            <input type="password" class="form-control input-lg" name="conpass" placeholder="confirmasi password" required />                       </div></div><br />
                        <button type="submit" class="btn btn-primary" name="register" value="Registrasi"><span class="glyphicon glyphicon-ok"></span> Registrasi</button>&nbsp;
                        <a href="login_admin.php"><button type="button" class="btn btn-primary">Login</button></a><br><br>             
                    </div>
                </div>
            </form>
        </div> 
    </div>
    <center>    
        <div class="panel-footer">
            Pongtech Studio &copy; 2014 
        </div>
    </center>
    
</body>
</html>