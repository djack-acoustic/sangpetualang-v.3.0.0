<div class="container" style="min-height:620px;">
	<h3>Tambah Event</h3><br />
	<div class="col-md-6">
        <form method="post" action="" role="form">
        	<input type="hidden" name="event_id" value="<?php echo $data['event_id']?>" >
            <div class="form-group">
                <label>Nama</label>
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
                <label>Judul Event</label>
                <input type="text" name="judul_event" class="form-control" placeholder="Judul Events" required>
            </div>
            <div class="form-group">
                <label>Content</label>
                <textarea name="isi_event" class="form-control content" placeholder="Isi Events" style="width:100%"></textarea>
            </div>
            <button type="submit" name="upload_events" id="submitbtn" class="btn btn-success">Upload</button>
            <a href="?content=event"><button type="button" class="btn btn-info">List Event</button></a>
        </form><br>
    </div>
</div>
