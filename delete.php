<?php 
	include ('conn.php');

	$username = $_GET['id'];
	$que = "DELETE FROM `setup_pelajaran` WHERE id_pelajaran='$username'";

	if ($q = mysql_query($que)){
		header("location: pelajaran.php?error=Success!!");
	}
	else{
	echo $username;
		die("delete gagal");
	
	}



 ?>
