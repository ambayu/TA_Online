<?php 
	include ('conn.php');

	$username = $_GET['id'];
	
	$que = "DELETE FROM `data_guru` WHERE id_guru='$username'";

	if ($q = mysql_query($que)){

		header("location: dosen.php?error=Success!!");
	}
	else{
	header("location: dosen.php?error=Gagal!!");;

	}

 ?>
