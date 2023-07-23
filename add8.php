<?php 
    include "conn.php";

$dat = $_POST['dat'];
$com = $_POST['com'];
$no = $_POST['no'];

if ($no==""){
  $id = $_POST['idsiswa'];
   $q="INSERT INTO `bimbingan`(`Date`,ids,Comment) VALUES ('$dat','$id','$com')";
    if (mysql_query($q)) {
     header("Location:Bimbingan.php?error=Data berhasil ditambah!!");
   
    } 
    else{
      header("Location:Bimbingan.php?error=Data gagal ditambah!!");
    }
  }
if ($no!="") {
  $q=("UPDATE `Bimbingan` SET Comment = '$com',`Date`='$dat' WHERE No='$no'");

if (mysql_query($q)) {
    header("Location:Bimbingan.php?error=Data berhasil ditambah!!"); 
    } 
    else{
      header("Location:Bimbingan.php?error=Data gagal ditambah!!");
    }

}



 ?>