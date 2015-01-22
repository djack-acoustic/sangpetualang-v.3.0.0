<?php 
    session_start();
    if (isset($_SESSION['member_username'])) { 
       $user = $_SESSION['member_username'];
    }else{
		$user = "login";
        $url = "login_member.php";
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Gallery - Sang Petualang</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
   	<link href="css/custom.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>
	<nav class="navbar navbar-default modal-content" style="margin:0;">
        <div class="container-fluid" >
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="index.php"><b>Sang Petualang</b></a>
            </div>
            <small><div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a class="page-scroll" href="beranda.php"><span class="glyphicon glyphicon-home"></span>&nbsp;Beranda</a>
                    </li>
                    <li class="active">
                        <a class="page-scroll" href="gallery.php"><span class="glyphicon glyphicon-camera"></span>&nbsp;Galery</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="event.php?page=1"><span class="glyphicon glyphicon-flag"></span>&nbsp;Event</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation" class="dropdown">
                        <a href="<?php echo "$url";?>" data-toggle="<?php if(isset($_SESSION['member_username'])){ echo "dropdown";}?>">
                            <?php if(isset($_SESSION['member_username'])){ ?><span class="glyphicon glyphicon-user"></span><?php }else { ?><span class="glyphicon glyphicon-log-in"></span><?php } ?>
                            &nbsp;<?php echo $user;?>
                            <?php if(isset($_SESSION['member_username'])){ ?><span class="caret"></span><?php } ?>
                        </a>
                        <?php if(isset($_SESSION['member_username'])) { ?>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenuDivider">
                                <!--<li role="presentation"><a role="menuitem" tabindex="-1" href="#"><span class="glyphicon glyphicon-cog"></span>&nbsp;Profile</a></li>
                                <li role="presentation" class="divider"></li>-->
                                <li role="presentation"><a href="model/logout.php" ><span class="glyphicon glyphicon-off"></span> Logout</a></li>
                            </ul>
                        <?php } ?>    
                    </li>
                </ul>
            </small></div>
        </div>
    </nav>    
    <!-- Page Content -->
    <?php 
    if(empty($_GET['view']))
    {
		include ("view/gallery.php");
	}
	else if($_GET['view']=="gallery_add")
	{ 
		include("view/gallery_add.php");
	}
	?>
    <center>    
        <div class="panel-footer">
            Pongtech Studio &copy; 2014 
        </div>
    </center>
    
	<script src="js/jquery-1.11.0.js"></script>
    <script src="js/jquery-ui.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
    $(function () {
            $('[data-toggle="dropdown"]').dropdown()
            $('#element').dropdown('show')
            $('#element').dropdown('hide')
            $('#element').dropdown('toggle')
            $('#element').dropdown('destroy')
        })
    </script>
    
</body>
</html>