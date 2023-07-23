<?php
    include "conn.php";
    $nama = $_POST['nomor'];
    $umur = $_POST['nama'];


    $sql = mysql_query("UPDATE setup_kelas SET nama_kelas = '$umur' WHERE id_kelas=$nama");
    if ($sql) {
        //jika  berhasil tampil ini
        header("Location:kelas.php?error=Data berhasil diubah!!");
    } else {
        // jika gagal tampil ini
       header("Location:kelas.php?error=Update gagal!!");;
    }
?>