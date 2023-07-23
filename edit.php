<?php
    include "conn.php";
    $nama = $_POST['nomor'];
    $umur = $_POST['nama'];


    $sql = mysql_query("UPDATE setup_pelajaran SET nama_pelajaran = '$umur' WHERE id_pelajaran=$nama");
    if ($sql) {
        //jika  berhasil tampil ini
        header("Location:pelajaran.php?error=Data berhasil diubah!!");
    } else {
        // jika gagal tampil ini
       header("Location:pelajaran.php?error=Update gagal!!");;
    }
?>