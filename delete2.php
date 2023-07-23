<?php 
	include ('conn.php');

	$username = $_GET['id'];
	
	$que = "DELETE FROM `setup_kelas` WHERE id_kelas='$username'";

	if ($q = mysql_query($que)){

		header("location: kelas.php?error=Success!!");
	}
	else{
	echo $username;
		die("delete gagal");

	}



 ?>
