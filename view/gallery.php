<?php
error_reporting(0);
?>
<section id="gallery" class="bg-light-gray" style="padding-top: 30px;">
    <div class="container" style="min-height:620px;">
        <nav class="navbar navbar-default" style="background-color:white;">
            <div class="container-fluid">
                <div class="navbar-header navbar-right">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Gallery</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                    <form class="navbar-form navbar-left" method="post" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Keyword" name="keyword" />
                            <button type="search" class="btn btn-default" name="search">cari</button>&nbsp;&nbsp;&nbsp;&nbsp;
                        </div>
                        <a href="?view=gallery_add"><button type="button" class="btn btn-success"><span class="fa fa-upload"></span>&nbsp;Upload</button></a>
                    </form>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="row">
        	<?php 
        	include ('koneksi.php');
            
            $cari = $_POST['keyword'];
        	$sql=mysql_query("select m.member_username, g.nama_file, g.file from member m, gallery g where m.id_member=g.id_member and nama_file like '%$cari%'");
			while($m = mysql_fetch_array($sql)){	
        	?>
            <div class="col-md-4 gallery-item">
                <a href="<?php echo $m['file']; ?>" class="gallery-link" data-toggle="modal">
                    <div class="gallery-hover">
                        <div class="gallery-hover-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                            <h4><?php echo $m['nama_file']?></h4>
                            <p ><i>by</i>&nbsp<?php echo $m['member_username'] ?></p>
                        </div>
                    </div><center>
                    <img src="<?php echo $m['file']; ?>" class="img-responsive" alt="" style="height:240px;"></center>
                </a>   
            </div>
            <!--<div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="<?php echo $m['file'] ?>" alt="...">
                    <div class="caption">
                        <h4><?php echo $m['nama_file']?></h4>
                        <p><i>by</i>&nbsp;<b style="color: #FED136"><?php echo $m['member_username'] ?></b></p>
                        <p>
                            <a href="<?php echo $m['file']; ?>" class="btn btn-success"><span class="fa fa-download"></span>&nbsp;&nbsp;Download</a> 
                            <a href="#" class="btn btn-danger" role="button"><span class="glyphicon glyphicon-heart" style="padding: 3px 3px"></span></a>
                        </p>
                    </div>
                </div>
            </div>-->
            <?php
				}
			?>
            <?php
            $sql=mysql_query("select a.admin_username, g.nama_file, g.file from admin a, gallery g where a.admin_id=g.admin_id and nama_file like '%$cari%'");
            while($a = mysql_fetch_array($sql)){ 
            ?>
            <div class="col-md-4 col-sm-6 gallery-item">
                <a href="admin/<?php echo $a['file'] ?>" class="gallery-link" data-toggle="modal">
                    <div class="gallery-hover">
                        <div class="gallery-hover-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                            <h4><?php echo $a['nama_file']?></h4>
                            <p ><i>by</i>&nbsp<?php echo $a['admin_username'] ?></p>
                        </div>
                    </div>
                    <img src="admin/<?php echo $a['file'] ?>" class="img-responsive" alt="" style="height:240px;">
                </a>   
            </div><!--
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="admin/<?php echo $a['file'] ?>" alt="...">
                    <div class="caption">
                        <h4><?php echo $a['nama_file']?></h4>
                        <p><i>by</i>&nbsp;<b style="color: #FED136"><?php echo $a['admin_username'] ?></b></p>
                        <p>
                            <a href="<?php echo $a['file']; ?>" class="btn btn-success"><span class="fa fa-download"></span>&nbsp;&nbsp;Download</a> 
                            <a href="#" class="btn btn-danger" role="button"><span class="glyphicon glyphicon-heart" style="padding: 3px 3px"></span></a>
                        </p>
                    </div>
                </div>
            </div>-->
            <?php
                }
            ?>
        </div>      
    </div>
</section>