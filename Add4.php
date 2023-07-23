<?php 
    include "conn.php";
     $nama = $_POST['nama'];
      $kelamin = $_POST['kelamin'];
      $nip = $_POST['nip'];
       $alamat = $_POST['alamat'];
       $phone = $_POST['phone'];
               $username = $_POST['username'];
    $password = $_POST['password'];
    $kelas = $_POST['kelas'];;

   $q="INSERT INTO `data_siswa`(nama_siswa,nis,kelamin,alamat_siswa,telpon_siswa,username,password,kelas) VALUES ('$nama','$nip','$kelamin','$alamat','$phone','$username','$password','$kelas')";
    if (mysql_query($q)) {
     header("Location:mhs.php?error=Data berhasil ditambah!!");
   
    } 
    else{
      header("Location:mhs.php?error=Data gagal ditambah!!");
    }

 ?>