<?php
    include "conn.php";
     $nama = $_POST['nama'];
      $kelamin = $_POST['kelamin'];
      $nip = $_POST['nip'];
       $kelas = $_POST['kelas'];
       $alamat = $_POST['alamat'];
       $phone = $_POST['phone'];
               $username = $_POST['username'];
    $password = $_POST['password'];
   $id = $_POST['id'];
   $pass2 = $_POST['pass2'];



    $sql = mysql_query("UPDATE data_siswa SET nama_siswa = '$nama',kelamin='$kelamin',nis='$nip',alamat_siswa='$alamat',telpon_siswa='$phone',username='$username',password='$password',Kelas='$kelas' WHERE id_siswa=$id");
    if ($sql) {
        //jika  berhasil tampil ini
        header("Location:mhs.php?error=Data berhasil diubah!!");
    } else {
        // jika gagal tampil ini
       header("Location:mhs.php?error=Update gagal!!");
    }
?>