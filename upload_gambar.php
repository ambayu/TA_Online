<?php
  include "conn.php";
  $pos=$_POST['ido'];
$lokasi = $_FILES['gambar']['tmp_name']; //lokasi gambar sementara
$nf   = $_FILES['gambar']['name']; //nama file
$folder = "img/$nf"; //loasi gambar selamanya
if (move_uploaded_file($lokasi,"$folder")) {
$q=mysql_query("UPDATE data_guru SET Foto = '$nf' WHERE id_guru='$pos'");
if ($q) {
 header("Location:profil_dosen.php?error=Data berhasil diubah!!");
} 
else
{
    header("Location:profil_dosen.php?error=Data gagal diubah!!");
}
}
//

//jika tidak
else
{
header("Location:profil_dosen.php?error=Data gagal diubah!!");
}
?>
