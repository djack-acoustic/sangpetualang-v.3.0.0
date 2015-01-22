<div class="container" style="min-height:620px;">
    <h3>Posting Artikel</h3><br />
   	<form method="post" action="" role="form">
        <div class="col-md-6">
            <div class="form-group">
                <label for="damin_id">Nama</label>
                <select class="form-control chosen-select" name="pengirim"><?php
                    $user = $_SESSION['admin_username'];
                    $sql = mysql_query("select * from admin where admin_username='$user'");
                    $row = mysql_num_rows($sql);
                    while($data = mysql_fetch_array($sql)){ ?>
                        <option value="<?php echo $data['admin_id']; ?>"><?php echo $data['admin_name']; ?></option><?php
                    } ?>
                </select>
            </div>
            <div class="form-group">
                <label>Judul Artikel</label>
                <input type="text" name="judul" class="form-control" placeholder="Judul Artikel" required>
            </div>
            <div class="form-group">
                <label>Content</label>
                <textarea name="isi" class="form-control content" placeholder="ISI" style="width:100%"></textarea>
            </div>
            <button type="submit" name="upload_artikel" id="submitbtn" class="btn btn-success">Posting</button>
            <a href="index.php"><button type="button" class="btn btn-primary">Back</button></a>
        </form>
    </div>
</div>