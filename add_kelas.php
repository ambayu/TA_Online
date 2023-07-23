<?php
    include "conn.php";
    $username = $_GET['kelamin'];
$ad = $_GET['var'];

    $sql = mysql_query("UPDATE data_siswa SET Kelas = '$ad' WHERE nis = '$username'");
    if ($sql) {
        //jika  berhasil tampil ini
        header("Location:Ruang_kelas.php?error=Data berhasil diubah!!");
    } else {
        // jika gagal tampil ini
       header("Location:Ruang_kelas.php?error=Update gagal!!");
    }
?>