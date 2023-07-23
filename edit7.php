<?php
    include "conn.php";
    $id = $_POST['id'];
    $Comment = $_POST['Comment'];
    $yt = $_POST['ty'];
    $lokasi = $_FILES['gambar']['tmp_name']; //lokasi gambar sementara
    $nf   = $_FILES['gambar']['name']; //nama file
    $folder = "img/$nf"; //loasi gambar selamanya
if ($nf!="") {
 
if (move_uploaded_file($lokasi,"$folder")) {
$q=mysql_query("UPDATE `judul` SET Comment = '$Comment',Revisi = '$nf',dt='$yt' WHERE No='$id'");

if ($q) {
 header("Location:lta.php?error=Data berhasil diubah!!");
} 
else
{
    header("Location:lta.php?error=Data gagal diubah!!");
}
}
}

else{
$q=mysql_query("UPDATE `judul` SET Comment = '$Comment',dt='$yt' WHERE No='$id'");
if ($q) {
 header("Location:lta.php?error=Data berhasil diubah!!");
} 
else
{
    header("Location:lta.php?error=Data gagal diubah!!");
}
}


?>