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
    <title>Beranda - Sang Petualang</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/jquery-ui.min.css" rel="stylesheet">
    <!-- Custom CSS -->
   	<link href="css/custom.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>
	<nav class="navbar navbar-default modal-content">
        <div class="container-fluid">
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
                    <li class="active">
                        <a class="page-scroll" href="#"><span class="glyphicon glyphicon-home"></span>&nbsp;Beranda</a>
                    </li>
                    <li>
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
    <div class="container-fluid" style="min-height:640px;">
        <div class="col-md-6 col-lg-3">
            <h2 class="list-group-item">Daftar Gunung</h2>
            <div class="panel-group" id="accordion"  aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h5 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Jawa Barat</a>
                        </h5>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="nav panel-body">
                            <li>
                                <a href="?halaman=ciremai" class="<?php if($_GET['halaman']=="ciremai"){echo "active";} ?>">Gunung Cermai</a>
                            </li>
                            <li>
                                <a href="?halaman=papandayan" class="<?php if($_GET['halaman']=="papandayan"){echo "active";} ?>">Gunung Papandayan</a>
                            </li>
                            <li>
                                <a href="?halaman=Gede" class="<?php if($_GET['halaman']=="Gede"){echo "active";} ?>">Gunung Gede-parango</a>
                            </li>
                            <li>
                                <a href="?halaman=cikuray" class="<?php if($_GET['halaman']=="cikuray"){echo "active";} ?>">Gunung Cikurai</a>
                            </li>
                            
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                         Jawa Tengah
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="nav panel-body">
                            <li>
                                <a href="?halaman=slamet" class="<?php if($_GET['halaman']=="slamet"){echo "active";} ?>">Gunung Slamet</a>
                            </li>
                            <li>
                                <a href="?halaman=sindoro" class="<?php if($_GET['halaman']=="sindoro"){echo "active";} ?>">Gunung Sundoro</a>
                            </li>
                            <li>
                                <a href="?halaman=sumbing" class="<?php if($_GET['halaman']=="sumbing"){echo "active";} ?>">Gunung Sumbing</a>
                            </li>
                            <li>
                                <a href="?halaman=merbabu" class="<?php if($_GET['halaman']=="merbabu"){echo "active";} ?>">Gunung Merbabu</a>
                            </li>
                            <li>
                                <a href="?halaman=lawu" class="<?php if($_GET['halaman']=="lawu"){echo "active";} ?>">Gunung Lawu</a>
                            </li>
                            <li>
                                <a href="?halaman=ungaran" class="<?php if($_GET['halaman']=="ungaran"){echo "active";} ?>">Gunung Ungaran</a>
                            </li>
                        </div>
                    </div>
                </div>  
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Jawa Timur
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="nav panel-body">
                            <li>
                                <a href="?halaman=semeru" class="<?php if($_GET['halaman']=="semeru"){echo "active";} ?>">Gunung Semeru</a>
                            </li>
                            <li>
                                <a href="?halaman=argopuro" class="<?php if($_GET['halaman']=="argopuro"){echo "active";} ?>">Gunung Argapura</a>
                            </li>
                            <li>
                                <a href="?halaman=arjuno" class="<?php if($_GET['halaman']=="arjuno"){echo "active";} ?>">Gunung Arjuna</a>
                            </li>
                            
                            <li>
                                <a href="?halaman=raung" class="<?php if($_GET['halaman']=="raung"){echo "active";} ?>">Gunung Raung</a>
                            </li>     
                        </div>
                    </div>
                </div>            
            </div>
        </div>
        <div class="">
            <div class="row">   
                <div class="well-lg">
                    <div class="col-md-7">
                        <!-- <h4>Search</h4>
                        <div class="input-group">
                            <input type="text" class="form-control" name="keyword" placeholder="Masukkan kata kunci">
                            <span class="input-group-btn"> 
                                <div>
                                    <button type="search" class="btn btn-primary" name="search"> <span class="glyphicon glyphicon-search" style="padding:3px;"></span></button>
                                </div>
                            </span>
                        </div><br /> -->

                        <!--<button>Click to fade in/out boxes</button><br><br>
                        <div id="div1" style="width:80px;height:80px;background-color:red;"></div><br>
                        <div id="div2" style="width:80px;height:80px;background-color:green;"></div><br>
                        <div id="div3" style="width:80px;height:80px;background-color:blue;"></div>-->

                        <?php
                            if(empty($_GET['halaman'])){
                                include("page/ciremai.php");
                            }
                            else {
                                include("page/$_GET[halaman].php");
                            }
                        ?>
            		</div>                           
        		</div>
            </div>
        </div>
	</div><br /><br />
    
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