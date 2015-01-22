<?php
	session_start();
    include("koneksi.php");
    
    if(isset($_POST['login']))
    {
        $user = $_POST['username'];
        $pass = $_POST['pass'];
        
        $query = "SELECT * FROM `member` where member_username='$user' and member_password='$pass' limit 1";
        $query = mysql_query($query);
        $num_rows = mysql_num_rows($query);
        
        if($num_rows > 0 )
        {
        	$_SESSION['member_username'] = $user;
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
        <title>Login Member</title>
        <!--  <!‐‐ Bootstrap ‐‐> -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/custom.css">        
        <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      </head>
    <body> 
    <nav class="navbar navbar-default">
        <div class="container-fluid" >
            <div class="navbar-header page-scroll">
                <a class="navbar-brand page-scroll" href="index.php"><b>Sang Petualang</b></a>
            </div>
        </div>
    </nav><br /><br />
	<div class="container" style="min-height:610px;text-align:center;">
        <div class="col-md-4"></div>
        <div class="row">
            <form method="post" action="">
                <div class="row">
                    <div class="col-md-4 modal-content"><br />
	                    <span class="fa-stack fa-4x">
	                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
	                        <i class="fa fa-user fa-stack-1x fa-inverse"></i>
	                    </span>
                        <h3>Login Member</h3>
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
                        <a href="register_member.php">Belum Punya Akun??</a><br /><br />             
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
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/custom.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    
</body>
</html>
