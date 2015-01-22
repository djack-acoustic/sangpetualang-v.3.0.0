<?php
	session_start();
    include("koneksi.php");
    
    if(isset($_POST['login']))
    {
        $user = $_POST['username'];
        $pass = md5($_POST['pass']);
        
        $query = "SELECT * FROM `admin` where admin_username='$user' and password='$pass' limit 1";
        $query = mysql_query($query);
        $num_rows = mysql_num_rows($query);
            
        if($num_rows > 0 )
        {   
        	$_SESSION['admin_username'] = $user;
			echo "<script>alert(' $user ')</script>";
            //header('Location : index.php');
            ?><script>document.location.href='index.php';</script><?php
        }else
        {
        	echo "<script> alert('Login gagal')</script>";
        }
        	
    }
?>

    <!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="utf‐8">
        <meta http-equiv="X‐UA‐Compatible" content="IE=edge">
        <meta name="viewport" content="width=device‐width, initial‐scale=1">
        <title>Login Admin</title>
       <!--  <!‐‐ Bootstrap ‐‐> -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../css/custom.css">
        <link href="../font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
        <!-- [if lt IE 9]> -->
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
       <!--  <![endif]‐‐> -->
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
                <a class="navbar-brand page-scroll" href="../index.php"><b>Sang-Petualang</b></a>
            </div>
        </div>
    </nav><br><br>
	<div class="container " style="min-height:630px;text-align:center;">
        <div class="col-md-4"></div>
        <div class="row">
            <form method="post" action="">
                <div class="row">
                    <div class="col-md-4 modal-content"><br />
                    	<span class="fa-stack fa-4x">
	                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
	                        <i class="fa fa-user fa-stack-1x fa-inverse"></i>
	                    </span>
                        <h3>Login Admin</h3>
                        <div class="form-group">
                            <label for="username"></label>
                            <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                            <input type="text" class="form-control input-lg" name="username" placeholder="Enter username" required /><br /><br />
                        </div></div>
    
                        <div class="form-group">
                            <label for="password"></label>
                            <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-wrench"></span></span>
                            <input type="password" class="form-control input-lg" name="pass" placeholder="Password" required /><br /><br />
                        </div></div> <br />
                        <button type="submit" class="btn btn-primary" name="login" value="login"><span class="glyphicon glyphicon-log-in"></span> Login</button><br /><br  />           
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
    
    <!-- jQuery Version 1.11.0 -->
    <script src="../js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../js/custom.js"></script>
        
</body>
</html>
