<?php
include "conn.php";
  $jumSis = $_POST['jumlah'];
  
  $semester=$_POST['Semester'];
  for ($i=1; $i<=$jumSis; $i++)
  {
     $id_siswa = $_POST['id_siswa'.$i];
     $nilai  = $_POST['nilai'.$i];
     
     $id_guru = $_POST['id_guru'];
     $id_kelas = $_POST['id_kelas'];
     $id_pelajaran = $_POST['id_pelajaran'];
  if ($nilai=="") {
    # code...
  }
  else{
     $dataku = mysql_query("SELECT * from tbl_nilai where id_siswa='$id_siswa' and id_pelajaran='$id_pelajaran' and id_semester='$semester' and id_kelas='$id_kelas'");

    $rowcount = mysql_num_rows($dataku);
    if ($rowcount >= 1) {
    $sql = mysql_query("UPDATE tbl_nilai SET nilai = '$nilai',id_guru='$id_guru' where id_siswa='$id_siswa' and id_pelajaran='$id_pelajaran' and id_semester='$semester' and id_kelas='$id_kelas'");
    } 

else{
   $q="INSERT INTO `tbl_nilai`(id_siswa,id_pelajaran,id_kelas,nilai,id_semester,id_guru) VALUES ('$id_siswa','$id_pelajaran','$id_kelas','$nilai','$semester','$id_guru')";
   $hasil=mysql_query($q);
  }
   
  }
}
header("location: input_nilai_selesai_admin.php?pelajaran=$id_pelajaran&id_kelas=$id_kelas&eror=Berhasil!!");



?>