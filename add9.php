<?php 
    include "conn.php";

$dat = $_POST['dat'];
$com = $_POST['com'];
$no = $_POST['no'];
$ty=$_POST['ty'];


  $q=("UPDATE `Bimbingan` SET Comment2 = '$com',`Revisi`='$dat',Setuju='$ty' WHERE No='$no'");

if (mysql_query($q)) {
    header("Location:Bimbingan2.php?error=Data berhasil ditambah!!"); 
    } 
    else{
      header("Location:Bimbingan2.php?error=Data gagal ditambah!!");
    }





 ?>