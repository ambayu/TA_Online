<?php 
    include "conn.php";
     $nama = $_POST['nama_guru'];
      $peajaran = $_POST['pelajaran'];
      $kelas = $_POST['kelas'];
     $dataku = mysql_query("SELECT * from tbl_jadwal where id_guru='$nama' and id_kelas='$kelas' and id_pelajaran='$peajaran' ");
  $rowcount = mysql_num_rows($dataku);
  if ($rowcount >= 1) {
    header("Location:pengajaran.php?error=Data Sudah Ada");
}
else{
   $q="INSERT INTO `tbl_jadwal`(id_guru,id_pelajaran,id_kelas) VALUES ('$nama','$peajaran','$kelas')";
    if (mysql_query($q)) {
     header("Location:pengajaran.php?error=Data berhasil ditambah!!");
   
    } 
    else{
      header("Location:pengajaran.php?error=Data gagal ditambah!!");
    }
}
 ?>