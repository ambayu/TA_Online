<?php 
    include "conn.php";
    $password = $_POST['nama_pelajaran'];

   $q="INSERT INTO `setup_pelajaran`(nama_pelajaran) VALUES ('$password')";
    if (mysql_query($q)) {
     header("Location:pelajaran.php?error=Data berhasil ditambah!!");
   
    } 
    else{
      header("Location:pelajaran.php?error=Data gagal ditambah!!");
    }

 ?>