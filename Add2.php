<?php 
    include "conn.php";
    $password = $_POST['nama_pelajaran'];

   $q="INSERT INTO `setup_kelas`(nama_kelas) VALUES ('$password')";
    if (mysql_query($q)) {
     header("Location:kelas.php?error=Data berhasil ditambah!!");
   
    } 
    else{
      header("Location:kelas.php?error=Data gagal ditambah!!");
    }

 ?>