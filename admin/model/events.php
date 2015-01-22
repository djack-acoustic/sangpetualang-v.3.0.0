<?php      
	include('../koneksi.php');
	
	error_reporting(0);
	
	if(isset($_POST['upload_events']))
	{
	$sql =	" INSERT INTO events set 
			event_name = \"".$_POST[judul_event]."\",
			event_isi = \"".$_POST[isi_event]."\",
			event_tgl = \"".date('ymd')."\"";

			$query = mysql_query($sql) or die (mysql_error());
			if ($query) {
				echo "<script> alert ('Upload Success')</script>";
				?><script>document.location.href='?content=event';</script><?php  
			}else {
			echo "<script> alert ('Upload Gagal!!!')</script>"; 
		}
	}
    
	
	if(isset($_POST['delete_events']))
	{
		$id = $_POST['event_id'];
		$hps = mysql_query("delete from events where event_id=$id");
		if ($hps) {
			echo "<script> alert ('Event Berhasil Dihapus')</script>";
			?><script>document.location.href='?content=event';</script><?php
		} else {
			echo "<script> alert ('Maaf, Gagal Menghapus Event!!!')</script>"; 
		}
	}
    

    if(isset($_POST['edit_events']))
    {	
		$id = $_GET['event_id'];
		$edit = mysql_query("update events set
			event_id=\"".$_POST[id]."\",
            event_name = \"".$_POST[judul_event]."\",
			event_isi = \"".$_POST[isi_event]."\"
            where event_id=$id");
		if ($edit) {
			echo "<script> alert ('Update Berhasil')</script>";
			 ?><script>document.location.href='?content=event';</script><?php
		} else {
			echo "<script> alert ('Proses Update Events Gagal')</script>"; 
		}
	}
?>