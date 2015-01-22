<?php      
	include('../koneksi.php');
	
	error_reporting(0);
	
	if(isset($_POST['registrasi']))
	{
	$sql = " INSERT INTO peserta set 
			nama = \"".$_POST[nama]."\",
			email = \"".$_POST[email]."\",
			jenis_kelamin = \"".$_POST[jenis_kelamin]."\",
			telepon = \"".$_POST[telepon]."\",
			alamat = \"".$_POST[alamat]."\",
			tgl_lahir=\"".$_POST[tl]."\",
			tgl_daftar=\"".date('ymd')."\""; 
			$query = mysql_query($sql) or die (mysql_error());
			if ($query) {
				echo "<script> alert ('Registrasi Berhasil')</script>";
				?><script>document.location.href='index.php';</script><?php  
			}else {
			echo "<script> alert ('Registrasi Gagal!!!')</script>"; 
		}
	}
    
	
	if(isset($_POST['delete']))
	{
		$id = $_POST['id'];
		$hps = mysql_query("delete from peserta where id=$id");
		if ($hps) {
			echo "<script> alert ('Hapus Berhasil')</script>";
			?><script>document.location.href='index.php';</script><?php
		} else {
			echo "<script> alert ('Maaf, Gagal Menghapus!!!')</script>"; 
		}
	}
    

    if(isset($_POST['edit']))
    {	
		$id = $_GET['id'];
		$edit = mysql_query("update peserta set
            id=\"".$_POST[id]."\",
            nama = \"".$_POST[nama]."\",
			email = \"".$_POST[email]."\",
			jenis_kelamin = \"".$_POST[jenis_kelamin]."\",
			telepon = \"".$_POST[telepon]."\",
			alamat = \"".$_POST[alamat]."\",
			tgl_lahir=\"".$_POST[tl]."\"           
            where id=$id");
		if ($edit) {
			echo "<script> alert ('Update Berhasil')</script>";
			 ?><script>document.location.href='index.php';</script><?php
		} else {
			echo "<script> alert ('Proses Update Gagal')</script>"; 
		}
	}
?>