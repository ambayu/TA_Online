<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Profile</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
   <link href="assets/css/style1.css" rel="stylesheet">
   <script type="text/javascript" src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js"></script>    


  </head>
  <body>
<?php
include "conn.php"; 
 session_start();
 if (empty($_SESSION['username'])) {
 header("location:login.php"); // jika belum login, maka dikembalikan ke file form_login.php
 }
 else {
} ?>
  <body>
  <div class="wrapper">
    <div class="header"></div>
    <div class="conte">
    <nav class="navbar-inverse navbar-top" role="navigation">
    <div class="container-fluid">
       <a style="font-size: 38px;  color:white!important;" class="navbar-brand" href="home_mahasiswa.php">Tugas Akhir Online</a>
    </div>

  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home_mahasiswa.php">D3 Teknik Informatika</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="home_mahasiswa.php">Home<span class="sr-only">(current)</span></a></li>
   
    <li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dosen <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="doping.php">Lihat Dosen</a></li>
             <li><a href="Judul.php">Permohonan Judul</a></li>
                <li><a href="bimbingan.php">Permohonan Bimbingan</a></li>
              </ul>
        </li>
<li><a href="ta.php">Kirim TA<span class="sr-only">(current)</span></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href=""><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;<?php
         echo $_SESSION['username'] ?></a></li>
        <li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog"></span> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="profil_mahasiswa.php">Profile</a></li>
            <li><a href="akun_siswa.php">Akun</a></li>
            <li><a href="about_siswa.php">About</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="Logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<p><br/><br/><br/></p>
<div class="container">

<div class="row">
  <div class="col-md-8"> 
   <legend style="
    font-size: 29px;
">Profile</legend>
<div class="container">

</div>
    </div><!-- /.container -->


            


<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<?php 
 $posss=$_SESSION["username"];
  $q="SELECT * FROM `data_guru` INNER JOIN `data_siswa` ON data_siswa.Doping = data_guru.id_guru WHERE data_siswa.username='$posss'";
  $eq=mysql_query($q);
  $rowi = mysql_fetch_assoc($eq);
  $po=$rowi['id_guru'];
 ?>
 <table style="float: right;">
 <tr>
 <td>
 
<img  src="img/<?php echo  $rowi["Foto"]; ?>" class="img-rounded" alt="Cinque Terre" style="height: 275px;width: auto;margin-left: 2.5%;"></td>
</tr>
<td>


</table>
<br><br>
<table style="float:left;width:40%;max-width: 100%;margin-bottom: 20px;margin-left: 2.5%;" id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
      <tr>
        
       
        

      </tr>
    </thead>
    <tbody>
<?php


 $q="SELECT * FROM `data_guru` where id_guru='$po'";
  $qe=mysql_query($q);
  $no=0;
while ($row =mysql_fetch_array($qe))
{
?>
      <tr><th>Nama Dosen</th>
      <td><?php echo $row['nama_guru']; ?></td>
</tr>

<tr>

<th>Nomor Induk Dosen</th>
 <td ><?php echo $row['nip']; ?>
        </td>
      </tr>
      <tr>
      <th>Jenis Kelamin</th>
 <td ><?php echo $row['kelamin']; ?>
        </td>
      </tr>
       <tr>
      <th>Alamat Dosen</th>
 <td ><?php echo $row['alamat_guru']; ?>
        </td>
      </tr>
       <tr>
      <th>Nomor Telepon</th>
 <td ><?php echo $row['telpon_guru']; ?>
        </td>
      </tr>
<?php
}
?>
    </tbody>
      </table>
  </div>
  

</div></div><div id="footer">
        <div id="footer-left">
        Admin Skin by <span id="spanYear"></span> <a href="http://www.d3teknikinformatika.co.uk" target="_blank">www.tugasakhironline.co.uk</a> D3Ti © Copyright <a href="http://d3teknikinformatika.wordpress.com" target="_blank">D3 Teknik Informatika.</a> All rights reserved.</div>
        <div class="clear">&nbsp;</div>
    </div>

</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>