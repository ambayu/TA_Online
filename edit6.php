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
 $sql = mysql_query("UPDATE data_guru SET nama_guru = '$nama' WHERE id_guru=$id");
    if ($sql) {
        //jika  berhasil tampil ini
        header("Location:profil_dosen.php?error=Data berhasil diubah!!");
    } else {
        // jika gagal tampil ini
       header("Location:profil_dosen.php?error=Update gagal!!");;
    
    }
}
if ($kelamin!="") {
 $sql = mysql_query("UPDATE data_guru SET kelamin = '$kelamin' WHERE id_guru=$id");
    if ($sql) {
        //jika  berhasil tampil ini
        header("Location:profil_dosen.php?error=Data berhasil diubah!!");
    } else {
        // jika gagal tampil ini
       header("Location:profil_dosen.php?error=Update gagal!!");;
    
    }
}
if ($nip!="") {
 $sql = mysql_query("UPDATE data_guru SET nip = '$nip' WHERE id_guru=$id");
    if ($sql) {
        //jika  berhasil tampil ini
        header("Location:profil_dosen.php?error=Data berhasil diubah!!");
    } else {
        // jika gagal tampil ini
       header("Location:profil_dosen.php?error=Update gagal!!");;
    
    }
}
if ($alamat!="") {
 $sql = mysql_query("UPDATE data_guru SET alamat_guru = '$alamat' WHERE id_guru=$id");
    if ($sql) {
        //jika  berhasil tampil ini
        header("Location:profil_dosen.php?error=Data berhasil diubah!!");
    } else {
        // jika gagal tampil ini
       header("Location:profil_dosen.php?error=Update gagal!!");
    
    }
}
if ($phone!="") {
 $sql = mysql_query("UPDATE data_guru SET telpon_guru = '$phone' WHERE id_guru=$id");
    if ($sql) {
        //jika  berhasil tampil ini
        header("Location:profil_dosen.php?error=Data berhasil diubah!!");
    } else {
        // jika gagal tampil ini
       header("Location:profil_dosen.php?error=Update gagal!!");
    
    }
}

?>