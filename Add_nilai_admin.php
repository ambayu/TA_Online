<?php 
    include "conn.php";
    $id = $_GET['id_siswa'];
 $pelajaran = $_GET['id_pelajaran'];
 $nilai = $_GET['nilai'];
 $kelas = $_GET['id_kelas'];
$semester = $_GET['Semester'];

	$dataku = mysql_query("SELECT * from tbl_nilai where id_siswa='$id' and id_pelajaran='$pelajaran' and id_semester='$semester' ");
	$rowcount = mysql_num_rows($dataku);
	if ($rowcount >= 1) {
    $sql = mysql_query("UPDATE tbl_nilai SET nilai = '$nilai' where id_siswa='$id' and id_pelajaran='$pelajaran' and id_semester='$semester'");
    if ($sql) {
        //jika  berhasil tampil ini
      header("location: input_nilai_selesai.php?id_kelas=$kelas&id_pelajaran=$pelajaran&id_siswa=$id");
    } else {
        // jika gagal tampil ini
      header("location: input_nilai_selesai.php?error=Gagal!!");
    }
	
	}


else{
   $q="INSERT INTO `tbl_nilai`(id_siswa,id_pelajaran,id_kelas,nilai,id_semester) VALUES ('$id','$pelajaran','$kelas','$nilai','$semester')";
    if (mysql_query($q)) {
   header("location: input_nilai_selesai.php?id_kelas=$kelas&id_pelajaran=$pelajaran&id_siswa=$id");
    } 
    else{
         header("location: input_nilai_selesai.php?error=Gagal!!");
    }
}
 ?>