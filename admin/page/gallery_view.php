<?php
error_reporting(0);
?>
<section id="gallery" class="bg-light-gray" style="padding-top: 30px;">
    <div class="container" style="min-height:620px;">
        <div class="row">
        	<?php 
        	include ('koneksi.php');
            
            $cari = $_POST['keyword'];
        	$sql=mysql_query("select m.member_username, g.id, g.nama_file, g.file from member m, gallery g where m.id_member=g.id_member and nama_file like '%$cari%'");
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
                    <img src="../<?php echo $m['file']; ?>" class="img-responsive" alt="" style="height:240px;"></center>
                </a> 
                <div class="gallery-caption">
                    <form method="POST">
                        <input type="hidden" name="id" value="<?php echo $m['id']?>">
                        <button type="submit" class="btn btn-danger" name="delete_gallery"><span class="glyphicon glyphicon-trash"></span> Hapus </button>
                    </form>
                </div>  
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
            $sql=mysql_query("select a.admin_username, g.id, g.nama_file, g.file from admin a, gallery g where a.admin_id=g.admin_id and nama_file like '%$cari%'");
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
                    <img src="<?php echo $a['file'] ?>" class="img-responsive" alt="" style="height:240px;">
                </a>
                <div class="gallery-caption">
                    <form method="POST">
                        <input type="hidden" name="id" value="<?php echo $a['id']?>">
                        <button type="submit" class="btn btn-danger" name="delete_gallery"><span class="glyphicon glyphicon-trash"></span> Hapus </button>
                    </form>
                </div>     
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