<?php 
	include ('conn.php');

	$username = $_GET['id'];
	
	$que = "DELETE FROM `data_siswa` WHERE id_siswa='$username'";

	if ($q = mysql_query($que)){

		header("location: mhs.php?error=Success!!");
	}
	else{
	header("location: mhs.php?error=Gagal!!");;

	}



 ?>
