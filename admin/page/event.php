<div class="container" style="min-height:620px;">
    <?php
    	include('koneksi.php');
    	$page=$_GET['page'];
        if ($page=="" || $page=="1") 
        {
            $page1=0;   # code...
        }
        else{
            $page1=($page*5)-5;
        }
    	$sql= mysql_query("select * FROM events LIMIT $page1,5");
    	if(mysql_num_rows($sql)>0){
		$no=1;
		while($data = mysql_fetch_array($sql)){			
    ?>
    
	<div class="col-sm-6 col-md-6">
        <div class="thumbnail">
            <img src="../img/gallery/asdsa.jpg" alt="...">
            <div class="caption">
                <h4><?php echo $data['event_name']?></h4>
                <p><?php echo $data['event_isi'] ?></p>
                <p> 
                <form method="POST">
                	<input type="hidden" name="event_id" value="<?php echo $data['event_id']?>" >
                	<a href="?content=event_edit&event_id=<?php echo $data['event_id']?>" class="btn btn-info" role="button"><span class="glyphicon glyphicon-edit"></span>&nbsp;&nbsp;Edit</a>
                    <button type="submit" class="btn btn-danger" name="delete_events"><span class="glyphicon glyphicon-trash"></span> Hapus </button>
                </form>
                </p>
            </div>
        </div>
    </div>
    

    <?php
    }
	}else{
		echo("<h4>Data tidak Ada</h4>");
	}
    ?>
</div>
<center>
    <ul class="pagination">
        <li><a href="index.php?page=<?php echo $b+1;?>">&laquo;</a></li>
        <?php
        $pag=mysql_query("SELECT * FROM events");
        $cou=mysql_num_rows($pag);
        $a=$cou/5;
        $a=ceil($a);
        for ($b=1; $b<=$a; $b++) { ?>  
        <li><a href="event.php?page=<?php echo "$b";?>" style="text-decoration:none"><?php echo $b?></a></li><?php } ?>
        <li><a href="event.php?page=<?php echo $b-1;?>">&raquo;</a></li>
    </ul>
</center>