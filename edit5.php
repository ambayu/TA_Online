<?php
    include "conn.php";
     
   $id = $_POST['nip'];
    $doping = $_POST['doping'];


    $sql = mysql_query("UPDATE data_siswa SET Doping = '$doping' WHERE nis=$id");
    if ($sql) {
        //jika  berhasil tampil ini
        header("Location:Pengajaran.php?error=Data berhasil diubah!!");
    } else {
        // jika gagal tampil ini
       header("Location:Pengajaran.php?error=Update gagal!!");;
    
    }
?>