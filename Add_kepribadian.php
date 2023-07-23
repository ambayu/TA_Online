<?php 
    include "conn.php";
     $Kelakuan = $_POST['Kelakuan'];
      $Kerajinan = $_POST['Kerajinan'];
      $Kerapian = $_POST['Kerapian'];
       $Sakit = $_POST['Sakit'];
       $Izin = $_POST['Izin'];
               $id_siswa = $_POST['id_siswa'];
               $semester=$_POST['Semester'];
    $TK = $_POST['TK'];
    $Catatan = $_POST['Catatan'];
 $kelas = $_POST['kelas'];

 $dataku = mysql_query("SELECT * from `tbl_sikap` where Id_siswa='$id_siswa' and Semester='$semester'");
      $rowcount = mysql_num_rows($dataku);

      if ($rowcount >= 1) {
    $sql = mysql_query("UPDATE `tbl_sikap` SET Kelakuan='$Kelakuan',Kerajinan='$Kerajinan',Kerapian='$Kerapian',Sakit='$Sakit',Izin='$Izin',T_K='$TK',Catatan='$Catatan' where Id_siswa='$id_siswa' and Semester='$semester'");

    if ($sql) {
        //jika  berhasil tampil ini
        header("Location:Laporan_Siswa.php?error=Data berhasil disimpan!!&Semester=$semester&kelas=$kelas");
    } else {
        // jika gagal tampil ini
   
    header("Location:Laporan_Siswa.php?error=Data gagal disimpan!!&Semester=$semester&kelas=$kelas");
    }
}
else{
 $q="INSERT INTO `tbl_sikap`(Kelakuan,Kerajinan,Kerapian,Sakit,Izin,T_K,Catatan,Semester,Id_siswa) VALUES ('$Kelakuan','$Kerajinan','$Kerapian','$Sakit','$Izin','$TK','$Catatan','$semester','$id_siswa')";
    if (mysql_query($q)) {
      header("Location:Laporan_Siswa.php?error=Data berhasil disimpan!!&Semester=$semester&kelas=$kelas");
    } 
    else{
       header("Location:Laporan_Siswa.php?error=Data gagal disimpan!!&Semester=$semester&kelas=$kelas");
    }

 }


 ?>
