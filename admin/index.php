<?php
	include("model/peserta.php");
    include("model/artikel.php");
    include("model/admin.php");
    include("model/events.php");
    include("model/gallery.php");
	include('../koneksi.php');
    session_start();
    
    if(!isset($_SESSION['admin_username'])){
            header('location: login_admin.php');
    }else {$user = $_SESSION['admin_username'];}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf‐8">
    <meta http-equiv="X‐UA‐Compatible" content="IE=edge">
    <meta name="viewport" content="width=device‐width, initial‐scale=1">
    <title>Admin</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/custom.css">
    <link href="../font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../css/jquery-ui.min.css" rel="stylesheet">
   	<link href="../css/datepicker/datepicker.css" rel="stylesheet" type="text/css" />
    
  </head>
  <body>
  	<nav class="navbar navbar-default" style="margin:0;">
        <div class="container" >
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="../index.php"><b>Sang Petualang</b></a>
            </div>
            <small><div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation" class="dropdown">
                        <a data-toggle="dropdown" href="#" role="button" aria-expanded="false">
                            <span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;<?php echo $user;?> <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu " role="menu">
                            <li><a href="model/logout.php" ><span class="glyphicon glyphicon-off"></span> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </small></div>
        </div>
    </nav> 
  	<div class="navbar navbar-inverse">
        <div class="container" >
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header navbar-right page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                <ul class="nav navbar-nav">
                	<li class="<?php if($_GET['content']=="peserta"){echo "active";} ?>">
                        <a class="page-scroll" href="?content=peserta"><span class="glyphicon glyphicon-user"></span>&nbsp;Pendaki</a>
                    </li>
                    <li class="<?php if($_GET['content']=="member"){echo "active";} ?>">
                        <a class="page-scroll" href="?content=member"><span class="glyphicon glyphicon-user"></span>&nbsp;Member</a>
                    </li>
                    <li class="<?php if($_GET['content']=="artikel"){echo "active";} ?>">
                        <a class="page-scroll" href="?content=artikel"><span class="glyphicon glyphicon-book"></span>&nbsp;Artikel</a>
                    </li>
                    <li class="<?php if($_GET['content']=="event_add"){echo "active";} ?>">
                        <a class="page-scroll" href="?content=event_add"><span class="glyphicon glyphicon-calendar"></span>&nbsp;Event</a>
                    </li>
                    <li class="<?php if($_GET['content']=="gallery"){echo "active";} ?>">
                        <a class="page-scroll" href="?content=gallery"><span class="glyphicon glyphicon-camera"></span>&nbsp;Gallery</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <?php
		if(empty($_GET['content'])){
			include("page/peserta.php");
		}
		else {
			include("page/$_GET[content].php");
		}
	?><br><br>
    
    <center>    
        <div class="panel-footer">
            Pongtech Studio &copy; 2014   
        </div>
    </center>


    <script src="../js/jquery-1.11.0.js"></script>
    <script src="../js/jquery-ui.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/datepicker/datepicker.js" type="text/javascript"></script>
    <script type="text/javascript" src="../jscripts/tiny_mce/tiny_mce.js"></script>
    <script type="text/javascript">
        tinyMCE.init({
            // General options
            mode : "textareas",
            theme : "advanced",
            plugins : "safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",

            // Theme options
            theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
            theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
            theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
            theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak",
            theme_advanced_toolbar_location : "top",
            theme_advanced_toolbar_align : "left",
            theme_advanced_statusbar_location : "bottom",
            theme_advanced_resizing : true,

            // Example content CSS (should be your site CSS)
            content_css : "css/content.css",

            // Drop lists for link/image/media/template dialogs
            template_external_list_url : "lists/template_list.js",
            external_link_list_url : "lists/link_list.js",
            external_image_list_url : "lists/image_list.js",
            media_external_list_url : "lists/media_list.js",

            // Replace values for the template plugin
            template_replace_values : {
                username : "Some User",
                staffid : "991234"
            }
        });
    </script>
    <script type="text/javascript">        
		
		$(function () {
		  $('[data-toggle="tooltip"]').tooltip()
		})
		$('#datepicker').datepicker();
		$('#datepicker2').datepicker();
		CKEDITOR.replace('ckeditor');
		$(function () {
   		    $('[data-toggle="popover"]').popover()
		    $('#element').popover('show')
			$('#element').popover('hide')
			$('#element').popover('toggle')
			$('#element').popover('destroy')
		})
        $("#dp").datepicker({
            changeMonth:true,
            changeYear:true
        });
		$('#myPopover').on('hidden.bs.popover', function () {
        // do something…
  		
		})
    </script>      
  </body>
</html>