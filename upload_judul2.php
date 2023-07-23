<?php
  include "conn.php";
$pos=$_POST['idsiswa'];
$judul=$_POST['judul'];
$date = date("Y-m-d");
$lokasi = $_FILES['gambar']['tmp_name']; //lokasi gambar sementara
$nf   = $_FILES['gambar']['name']; //nama file
$folder = "img/$nf"; //loasi gambar selamanya
if (move_uploaded_file($lokasi,"$folder")) {
$q=mysql_query("INSERT into tga(`id_siswa`,`juduls`,`file`,`Date`) values('$pos','$judul','$nf','$date')");
if ($q) {
 header("Location:ta.php?error=Data berhasil diubah!!");
} 
else
{
 header("Location:ta.php?error=Data gagal diubah!!");
}
}
//

//jika tidak
else
{
header("Location:ta.php?error=Data gagal diubah!!");
}
?>
