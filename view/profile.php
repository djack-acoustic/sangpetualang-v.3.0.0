	
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
        $query = mysql_query("select * from member");
        while ($data=mysql_fetch_array($query)) {
    ?>
	<div class="container" style="min-height: 640px">
		<div class="text-center">
			<h2>profile</h2>
		   	<span>My Live is My Adventure</span>
	    </div><br /><br />
	    <div class="table-responsive">
	        <form action="" method="post" enctype="multipart/form-data">
	            <table class="table table-hover table-bordered">
	            	<tr>
	                	<td align="right"><b>Nama Lengkap</b></td>
	                	<td align="center"><b>:</b></td>
	                	<td><?php echo $data['member_nama'] ?></td>
	                </tr>
	                <tr>
	                	<td align="right"><b>Username</b></td>
	                	<td align="center"><b>:</b></td>
	                	<td><?php echo $data['member_username'] ?></td>
	                </tr>
	                <tr>
	                	<td align="right"><b>Email</b></td>
	                	<td align="center"><b>:</b></td>
	                	<td><?php echo $data['member_email'] ?></td>
	                </tr>
	                <tr>
	                	<td align="right"><b>Password</b></td>
	                	<td align="center"><b>:</b></td>
	                	<td><?php echo $data['member_password'] ?></td>
	                </tr>
	            </table>
	        </form>
        </div>
   	</div>
   	<?php } ?>
