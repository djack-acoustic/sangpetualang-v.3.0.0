<?php
include('koneksi.php');
include("model/events.php");
 ?>
 <?php
    $id = $_GET['event_id'];
    $query = mysql_query("SELECT * FROM  events WHERE event_id='$id'");
    while ($data=mysql_fetch_array($query)) {
?>
<div class="container" style="min-height:620px;">
    <div class="row"><br>
        <form method="post" action="" role="form">
            <!--<input type="hidden" name="id" value="<?php echo $data['event_id']?>" >-->
            <div class="form-group">
                <label for="pat_id">Nama</label>
                <select class="form-control chosen-select" name="pengirim"><?php
                    $user = $_SESSION['admin_username'];
                    $sql = mysql_query("select * from admin where admin_username='$user'");
                    $row = mysql_num_rows($sql);
                    while($d = mysql_fetch_array($sql)){ ?>
                        <option value="<?php echo $d['admin_id']; ?>"><?php echo $d['admin_name']; ?></option><?php
                    } ?>
                </select>
            </div>
            <div class="form-group">
                <label>Judul Event</label>
                <input type="text" name="judul_event" class="form-control" value="<?php echo $data['event_name']?>" required>
            </div>
            <div class="form-group">
                <label>Content</label>
                <textarea name="isi_event" class="form-control content" style="width:100%"><?php echo $data['event_isi']; ?></textarea>
            </div>
            <button type="submit" name="edit_events" id="submitbtn" class="btn btn-success">upload</button>
            <a href="?content=event"><button type="button" class="btn btn-primary">Back</button></a>
        </form>
    </div>
</div>
 <?php
}
?>
