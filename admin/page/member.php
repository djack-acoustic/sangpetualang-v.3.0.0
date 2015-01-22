<div class="container" style="min-height:620px;">
    <h4>Search</h4>
    <form method="post">
        <div class="input-group" style="">
            <span class="input-group-btn"> 
                <input type="text" class="form-control" name="keyword" placeholder="Keyword" style="border-radius:5px;">
            </span>
        </div><br><br> 
    </form>              
    <div class="table-responsive">
        <table class="table table-hover table-bordered" >
            <thead>
                <tr class="text-primary bg-primary" style="color:#fff;">
                    <td><b>No</b></td>
                    <td><b>Nama</b></td>
                    <td><b>Username</b></td>
                    <td><b>Email</b></td>
                    <td colspan="6" style="text-align:center;"><b>Aksi</b></td>
                </tr>
            </thead>
            <?php
            include('koneksi.php');

            $page=$_GET['page'];
            if ($page=="" || $page=="1") 
            {
                $page1=0;   # code...
            }
            else{
                $page1=($page*10)-10;
            }


            $cari = $_POST['keyword'];
            $sql = mysql_query("SELECT * FROM member where member_nama like '%$cari%' ORDER BY id_member DESC limit $page1,10");
            if(mysql_num_rows($sql) > 0){
            $no=1;
            while($data = mysql_fetch_array($sql)){
            ?>	
                <form method="post" action="">
                    <input type="hidden" name="id" value="<?php echo $data['id']?>" >
                    <tr>      
                        <td><?php echo $no++; ?> </td>
                        <td><?php echo $data['member_nama'];?></td>
                        <td><?php echo $data['member_username'];?></td>
                        <td><?php echo $data['member_email'];?></td>
                        <!--<td>
                            <button type="button" class="btn btn-success" name="confirm"><span class="glyphicon glyphicon-check"></span> Confirmasi </button>
                        </td>-->
                        <td style="text-align:center;" colspan="6">
                            <a class="btn btn-primary" name="#" href="?content=peserta_edit&id=<?php echo $data['id_member']?>"> <span class="glyphicon glyphicon-edit"></span> Edit </a>
                            <button type="submit" class="btn btn-danger" name="delete"><span class="glyphicon glyphicon-trash"></span> Hapus </button>
                        </td>
                    </tr>
                </form>
            <tbody>
            <?php 	
            }
            }else{
            ?>
                <tbody>
                    <tr align="center">
                        <td align="center" colspan="6"> Tidak ada data! </td>
                    </tr>
                </tbody>
            <?php
            }
            ?>
        </table>
        <center>
            <ul class="pagination">
                <li><a href="index.php?page=<?php echo $b+1;?>">&laquo;</a></li>
                <?php
                $pag=mysql_query("SELECT * FROM member where member_nama like '%$cari%'");
                $cou=mysql_num_rows($pag);
                $a=$cou/10;
                $a=ceil($a);
                for ($b=1; $b<=$a; $b++) { ?>  
                <li><a href="index.php?page=<?php echo "$b";?>" style="text-decoration:none"><?php echo $b?></a></li><?php } ?>
                <li><a href="index.php?page=<?php echo $b-1;?>">&raquo;</a></li>
            </ul>
        </center>
    </div>
</div>