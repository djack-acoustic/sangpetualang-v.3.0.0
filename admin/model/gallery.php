<?php
if(isset($_POST['delete_gallery']))
{
	$id = $_POST['id'];
	$hps = mysql_query("delete from gallery where id=$id");
	if ($hps) {
		echo "<script> alert ('Gallery Berhasil Dihapus')</script>";
		?><script>document.location.href='?content=gallery_view';</script><?php
	} else {
		echo "<script> alert ('Maaf, Gagal Menghapus Gallery!!!')</script>"; 
	}
}
?>