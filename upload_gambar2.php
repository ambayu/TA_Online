<?php
include "conn.php";
$pos=$_POST['ido'];
$lokasi = $_FILES['gambar']['tmp_name']; //lokasi gambar sementara
$nf = $_FILES['gambar']['name']; //nama file
$folder = "img/$nf"; //loasi gambar selamanya
if (move_uploaded_file($lokasi,"$folder")) {
$q=mysql_query("UPDATE data_siswa SET Photo = '$nf' WHERE id_siswa='$pos'");
if ($q) {
 header("Location:profil_mahasiswa.php?error=Data berhasil diubah!!");
} 
else
{
header("Location:profil_mahasiswa.php?error=Data gagal diubah!!");
}
}
else
{
header("Location:profil_mahasiswa.php?error=Data gagal diubah!!");
}
?>
