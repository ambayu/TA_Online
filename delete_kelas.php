<?php
    include "conn.php";
    $username = $_GET['id'];


    $sql = mysql_query("UPDATE data_siswa SET kelas = '' WHERE id_siswa=$username");
    if ($sql) {
        //jika  berhasil tampil ini
        header("Location:Ruang_kelas.php?error=Data berhasil diubah!!");
    } else {
        // jika gagal tampil ini
       header("Location:Ruang_kelas.php?error=Update gagal!!");;
    }
?>