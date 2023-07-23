<?php
    include "conn.php";
     $nama = $_POST['nama'];
      $kelamin = $_POST['kelamin'];
      $nip = $_POST['nip'];
       $alamat = $_POST['alamat'];
       $phone = $_POST['phone'];
               $username = $_POST['username'];
    $password = $_POST['password'];
   $id = $_POST['id'];


    $sql = mysql_query("UPDATE data_guru SET nama_guru = '$nama',kelamin='$kelamin',nip='$nip',alamat_guru='$alamat',telpon_guru='$phone',username='$username',password='$password' WHERE id_guru=$id");
    if ($sql) {
        //jika  berhasil tampil ini
        header("Location:dosen.php?error=Data berhasil diubah!!");
    } else {
        // jika gagal tampil ini
       header("Location:dosen.php?error=Update gagal!!");;
    
    }
?>