<?php
    include "conn.php";
    $id = $_POST['no'];
    $judul = $_POST['judul'];
 
    $lokasi = $_FILES['gambar']['tmp_name']; //lokasi gambar sementara
    $nf   = $_FILES['gambar']['name']; //nama file
    $folder = "img/$nf"; //loasi gambar selamanya

if ($nf!="") {
 if (move_uploaded_file($lokasi,"$folder")) {
$q=mysql_query("UPDATE `tga` SET juduls = '$judul', `file`='$nf' WHERE No='$id'");

if ($q) {
 header("Location:ta.php?error=Data berhasil diubah!!");
} 
else
{
    header("Location:ta.php?error=Data gagal diubah!!");
}
}
}

else{
$q=mysql_query("UPDATE `tga` SET juduls = '$judul' WHERE No='$id'");
if ($q) {
 header("Location:ta.php?error=Data berhasil diubah!!");
} 
else
{
    header("Location:ta.php?error=Data gagal diubah!!");
}
}


?>