<?php 
    include "conn.php";
     $nama = $_POST['nama'];
      $kelamin = $_POST['kelamin'];
      $nip = $_POST['nip'];
       $alamat = $_POST['alamat'];
       $phone = $_POST['phone'];
               $username = $_POST['username'];
    $password = $_POST['password'];

   $q="INSERT INTO `data_guru`(nama_guru,nip,kelamin,alamat_guru,telpon_guru,username,password) VALUES ('$nama','$nip','$kelamin','$alamat','$phone','$username','$password')";
    if (mysql_query($q)) {
     header("Location:dosen.php?error=Data berhasil ditambah!!");
   
    } 
    else{
      header("Location:dosen.php?error=Data gagal ditambah!!");
    }

 ?>