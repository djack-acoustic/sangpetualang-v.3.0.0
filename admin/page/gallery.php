<div class="container" style="min-height: 640px">
    <div class="text-center">
        <h2>Sang Petualang</h2>
        <span style="color: #fab005">My Live is My Adventure</span>
    </div><br /><br />
    <div class="content">
        <p align="center">File yang bisa di Upload hanya file dengan ekstensi <b>.jpg | .jpeg | .png | .gif</b> dan besar file (file size) maksimal hanya 1 MB.</p><br />

        <?php
        
        include('koneksi.php');
        if(isset($_POST['upload'])){
            $allowed_ext    = array('jpg','png','png','gif');
            $file_name      = $_FILES['file']['name'];
            $file_ext       = strtolower(end(explode('.', $file_name)));
            $file_size      = $_FILES['file']['size'];
            $file_tmp       = $_FILES['file']['tmp_name'];
            
            $nama           = $_POST['nama'];
            $tgl            = date("Y-m-d");
            $admin       = $_POST['pengirim'];
            if(in_array($file_ext, $allowed_ext) === true){
                if($file_size < 1044070){
                    $lokasi = 'img/gallery/'.$nama.'.'.$file_ext;
                    move_uploaded_file($file_tmp, $lokasi);
                    $in = mysql_query("INSERT INTO gallery VALUES(NULL,'$admin','','$tgl', '$nama', '$file_ext', '$file_size', '$lokasi')");
                    if($in){
                        echo '<div class="alert alert-success">SUCCESS: File berhasil di Upload!</div>';
                    }else{
                        echo '<div class="alert alert-danger">ERROR: Gagal upload file!</div>';
                    }
                }else{
                    echo '<div class="alert alert-danger">ERROR: Besar ukuran file (file size) maksimal 1 Mb!</div>';
                }
            }else{
                echo '<div class="alert alert-danger">ERROR: Ekstensi file tidak di izinkan!</div>';
            }
        }
        ?>

        <form action="" method="post" enctype="multipart/form-data">
            <table class="input-group" width="100%" align="center" bgcolor="#eee" cellpadding="2" >
                <tr>
                    <td width="40%" align="right"><b>Nama</b></td><td><b>:</b></td>
                    <td>
                        <select class="chosen-select text-cente" name="pengirim" style="border-radius:5px"><?php
                            $user = $_SESSION['admin_username'];
                            $sql = mysql_query("select * from admin where admin_username='$user'");
                            $row = mysql_num_rows($sql);
                            while($data = mysql_fetch_array($sql)){ ?>
                                <option value="<?php echo $data['admin_id']; ?>"><?php echo $data['admin_username']; ?></option><?php
                            } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td width="40%" align="right"><br /><b>Nama File</b></td><td><br /><b>:</b></td><td><br /><input type="text" name="nama" size="40" style="border-radius:5px" required /></td>
                </tr>
                <tr>
                    <td width="40%" align="right"><b>Pilih File</b></td><td><b>:</b></td><td><br /><input type="file" name="file" required /><br /></td>
                </tr>
                <tr>
                    <td>&nbsp;</td><td>&nbsp;</td><td><input class="btn btn-success" type="submit" name="upload" value="Upload" /></td>
                </tr>
                <tr>
                    <td>&nbsp;</td><td>&nbsp;</td><td><br><a href="?content=gallery_view" class="btn btn-info">Lihat gallery</a></td>
                </tr>
            </table>
        </form>
    </div>
</div>
