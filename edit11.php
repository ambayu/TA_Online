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

if ($nama!="") {
 $sql = mysql_query("UPDATE data_siswa SET nama_siswa = '$nama' WHERE id_siswa=$id");
    if ($sql) {
        //jika  berhasil tampil ini
        header("Location:profil_mahasiswa.php?error=Data berhasil diubah!!");
    } else {
        // jika gagal tampil ini
       header("Location:profil_mahasiswa.php?error=Update gagal!!");;
    
    }
}
if ($kelamin!="") {
 $sql = mysql_query("UPDATE data_siswa SET kelamin = '$kelamin' WHERE id_siswa=$id");
    if ($sql) {
        //jika  berhasil tampil ini
        header("Location:profil_mahasiswa.php?error=Data berhasil diubah!!");
    } else {
        // jika gagal tampil ini
       header("Location:profil_mahasiswa.php?error=Update gagal!!");;
    
    }
}
if ($nip!="") {
 $sql = mysql_query("UPDATE data_siswa SET nis = '$nip' WHERE id_siswa=$id");
    if ($sql) {
        //jika  berhasil tampil ini
        header("Location:profil_mahasiswa.php?error=Data berhasil diubah!!");
    } else {
        // jika gagal tampil ini
       header("Location:profil_mahasiswa.php?error=Update gagal!!");;
    
    }
}
if ($alamat!="") {
 $sql = mysql_query("UPDATE data_siswa SET alamat_siswa = '$alamat' WHERE id_siswa=$id");
    if ($sql) {
        //jika  berhasil tampil ini
        header("Location:profil_mahasiswa.php?error=Data berhasil diubah!!");
    } else {
        // jika gagal tampil ini
       header("Location:profil_mahasiswa.php?error=Update gagal!!");
    
    }
}
if ($phone!="") {
 $sql = mysql_query("UPDATE data_siswa SET telpon_siswa = '$phone' WHERE id_siswa=$id");
    if ($sql) {
        //jika  berhasil tampil ini
        header("Location:profil_mahasiswa.php?error=Data berhasil diubah!!");
    } else {
        // jika gagal tampil ini
       header("Location:profil_mahasiswa.php?error=Update gagal!!");
    
    }
}

?>