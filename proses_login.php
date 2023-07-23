

<?php
include("conn.php");
$cek=$_POST['domain'];

if ($cek=='SISWA') {

 $username = $_POST['username']; 
 $password = ($_POST['password']); 

 $perintah = "SELECT * from data_siswa WHERE username = '$username' AND password = '$password'";
 $hasil = mysql_query($perintah);
 $row = mysql_fetch_array($hasil);
 if ($row['username'] == $username AND $row['password'] == $password) {
 session_start(); // memulai fungsi session
 $_SESSION['username'] = $username;
 header("location:home_mahasiswa.php");// jika berhasil login, maka masuk ke file home.php
 }
 else {
  header("Location:login.php?error=Username/Password wrong!!");
  // jika gagal, maka muncul teks gagal masuk
 }
 
}
elseif ($cek=='GURU') {
  

	$username = $_POST['username']; 
 $password = ($_POST['password']); // 

 $perintah = "SELECT * from data_guru WHERE username = '$username' AND password = '$password'";
 $hasil = mysql_query($perintah);
 $row = mysql_fetch_array(  $hasil);
 if ($row['username'] == $username AND $row['password'] == $password) {
 session_start(); // memulai fungsi session
 $_SESSION['username'] = $username;
 header("location:home_dosen.php");// jika berhasil login, maka masuk ke file home.php
 }
 else {
  header("Location:login.php?error=Username/Password wrong!!");
  // jika gagal, maka muncul teks gagal masuk
 }

}
else{
 

 $username = $_POST['username']; 
 $password = ($_POST['password']); 
 $perintah = "SELECT * from user_admin WHERE username = '$username' AND password = '$password'";
 $hasil = mysql_query($perintah);
 $row = mysql_fetch_array($hasil);
 if ($row['username'] == $username AND $row['password'] == $password) {
 session_start();
 $_SESSION['username'] = $username;
 header("location:home.php");
 }
 else {
  header("Location:login.php?error=Username/Password wrong!!");

}}
 ?>
