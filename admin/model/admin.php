<?php
	include("koneksi.php");

	error_reporting(0);
	
	if(isset($_POST['register'])){
		$username = $_POST['username'];
		$pass = md5($_POST['pass']);
		$cpass = md5($_POST['conpass']);
		
		$check_user ="select * from admin where username='$username'";
		$run = mysql_query($check_user);
		if(mysql_num_rows($run)>0){
			echo "<script> alert ('User $username is already exist, Please try another one!!')</script>";
			exit();
		}
		
			if($pass==$cpass){
			$sql = " INSERT INTO admin set 
							  admin_name = \"".$_POST[nama]."\",
							  admin_username = \"".$_POST[username]."\",
							  admin_tlp = \"".$_POST[telepon]."\",
							  password = \"".md5($_POST[pass])."\""; 
						 
							$query = mysql_query($sql) or die (mysql_error());
							if ($query) 
							{
							  echo "<script> alert ('Registrasi Successful')</script>";
							  echo "<script>window.open('index.php','_self')</script>";
							}
			}else {echo "<script> alert ('Password yang anda masukan tidak sama!!')</script>";}
	}
?>

    

