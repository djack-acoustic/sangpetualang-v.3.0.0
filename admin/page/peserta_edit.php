<?php
include("../model/peserta.php");
include('../koneksi.php');
?> 
    <?php
        $id = $_GET['id'];
        $query = mysql_query("select * from peserta where id='$id'");
        while ($data=mysql_fetch_array($query)) {
    ?>
    <div class="container" style="min-height:620px;"><br>  
        <div class="col-md-5">
            <form method="post">
                <input type="hidden" name="id" value="<?php echo $data['id']?>" >
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" value="<?php echo $data['nama'];?>" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" value="<?php echo $data['email'];?>" required>
                </div>
                <div class="form-group">
                    <label>Telepon</label>
                    <input type="text" name="telepon" class="form-control" value="<?php echo $data['telepon'];?>" required>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control" required><?php echo $data['alamat'];?></textarea>
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" name="tl" class="form-control" id="dp" value="<?php echo $data['tgl_lahir'] ?>" required>
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label><br>
                    <select name="jenis_kelamin" style="padding:6px 40px 6px 10px;">
                        <option><?php echo $data['jenis_kelamin'];?></option>
                        <option>Pria</option>
                        <option>Wanita</option>
                    </select>
                </div><br>
                <div class="checkbox">
                    <label><input type="checkbox" name="check" required> I am Agree</label>
                </div>
                <button type="submit" name="edit" id="submitbtn" class="btn btn-success">Update</button>
                <a href="index.php" class="btn btn-primary">cencel</a>
            </form>       
        </div>
    </div>
    <?php
    }
    ?>
    