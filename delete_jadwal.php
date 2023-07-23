<?php 
	include ('conn.php');

	$username = $_GET['id'];
	
	$que = "DELETE FROM `tbl_jadwal` WHERE id_jadwal='$username'";

	if ($q = mysql_query($que)){

		header("location: pengajaran.php?error=Success!!");
	}
	else{
	header("location: pengajaran.php?error=Gagal!!");;

	}

 ?>
