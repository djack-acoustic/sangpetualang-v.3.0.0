<?php      
	include('../koneksi.php');
	
	error_reporting(0);
	
	if(isset($_POST['upload_artikel']))
	{
	$sql = " INSERT INTO artikel set 
			judul_artikel = \"".$_POST[judul]."\",
			isi_artikel = \"".$_POST[isi]."\",
			admin_id = \"".$_POST[pengirim]."\",
			tgl_upload=\"".date('ymd')."\"";

			$query = mysql_query($sql) or die (mysql_error());
			if ($query) {
				echo "<script> alert ('Upload Success')</script>";
				?><script>document.location.href='index.php';</script><?php  
			}else {
			echo "<script> alert ('Upload Gagal!!!')</script>"; 
		}
	}
    
	
	if(isset($_POST['delete_artikel']))
	{
		$id = $_POST['id'];
		$hps = mysql_query("delete from artikel where id=$id");
		if ($hps) {
			echo "<script> alert ('Hapus Berhasil')</script>";
			?><script>document.location.href='index.php';</script><?php
		} else {
			echo "<script> alert ('Maaf, Gagal Menghapus!!!')</script>"; 
		}
	}
    

    if(isset($_POST['edit_artikel']))
    {	
		$id = $_GET['id'];
		$edit = mysql_query("update artikel set
            judul_artikel = \"".$_POST[judul]."\",
			isi_artikel = \"".$_POST[isi]."\",
			admin_id = \"".$_POST[pengirim]."\",
			tgl_upload=\"".date('ymd')."\"
            where id=$id");
		if ($edit) {
			echo "<script> alert ('Update Berhasil')</script>";
			 ?><script>document.location.href='index.php';</script><?php
		} else {
			echo "<script> alert ('Proses Update Gagal')</script>"; 
		}
	}
?>