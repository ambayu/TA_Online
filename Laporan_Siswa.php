<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Laporan Kepribadian</title>

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
   <link href="assets/css/style1.css" rel="stylesheet">
   <script type="text/javascript" src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js"></script>    
  <style type="text/css">
  
 
.step-dark-left {
  float:left;
   
  background: url(images/forms/step_dark_left.gif) no-repeat;
  height:27px;
  padding:13px 15px 26px 25px;
  font-size: 13px;
  color:#fff;
  font-weight: bold;
}

.step-dark-left a{
   
  font-size: 13px;
  color:#fff;
  font-weight: bold;
}

.step-dark-right {
  float:left;
  width:12px;
  background: url(images/forms/step_dark_right.gif) no-repeat;
  height:39px;
}
.step-dark-round {
  float:left;
  width:8px;
  height:39px;
  background: url(images/forms/step_dark_round.gif) no-repeat;
}

.step-light-left {
  float:left;
    height:27px;
  padding:13px 15px 0 25px;
  font-size: 13px;
  background: url(images/forms/step_light_left.gif) no-repeat;
  height:39px;
  color:#cbcbcb;
  font-weight: bold;
}

.step-light-left a{
   
   
  font-size: 13px;
 
  color:#cbcbcb;
  font-weight: bold;
}
.step-light-right {
  float:left;
  width:12px;
  background: url(images/forms/step_light_right.gif) no-repeat;
  height:39px;
}
.step-light-round {
  float:left;
  width:8px;
  height:39px;
  background: url(images/forms/step_light_round.gif) no-repeat;
}
.table-header-repeat {
    background: url(images/table/table_header_repeat.jpg) repeat-x;
    border: none;
    font-size: 0px;
    line-height: 0;
    padding: 0px 0 0 0;

}

  </style>
  </head>
  <body>
<?php
 session_start();
 if (empty($_SESSION['username'])) {
 header("location:login.php"); // jika belum login, maka dikembalikan ke file form_login.php
 }
 else {
} ?>
    <nav class="navbar-inverse navbar-top" role="navigation">
    <div class="container-fluid">
       <a style="font-size: 38px;  color:white!important;" class="navbar-brand" href="home.php">SD NEGRI 06081</a>
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
      <a class="navbar-brand" href="home.php">S.R.S.N 06081</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="home.php">Home<span class="sr-only">(current)</span></a></li>
              <li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Setup <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="pelajaran.php">Pelajaran</a></li>
            <li><a href="kelas.php">Kelas</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Data Induk <span class="caret"></span></a>
          <ul class="dropdown-menu">
               <li><a href="guru.php">Guru</a></li>
            <li><a href="siswa.php">Siswa</a></li>
          </ul>
        </li>
              <li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Penjadwalan <span class="caret"></span></a>
          <ul class="dropdown-menu">
             <li><a href="ruang_kelas.php">Ruang Kelas</a></li>
            <li><a href="Pengajaran.php">Pengajaran</a></li>
          </ul>
        </li>

          <li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Laporan <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="Penilaian.php">Penilaian</a></li>
            <li><a href="Input_nilai.php">Input Nilai</a></li>
             <li><a href="Sikap.php">Input Kepribadian</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href=""><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;<?php
         echo $_SESSION['username'] ?></a></li>
        <li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog"></span> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="profil.php">Profile</a></li>
            <li><a href="Akun.php">Akun</a></li>
            <li><a href="About.php">About</a></li>
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
<?php 
$semester=$_GET['Semester'];
$kelas=$_GET['kelas']; ?>
  <div class="col-md-8" style="width: 100%;"> 
  <?php
    /* handle error */
    if (isset($_GET['error'])) : ?>
        <div style="position: absolute;bottom: 373px;padding-right: 115px!important;"  class="alert alert-success alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <strong>Warning!</strong> <?php $error=$_GET['error'];
          echo $error;?>
        </div>
    <?php endif;?>


 <div class="step-no-off">1</div>
     
        <div class="step-no">1</div>
      <div class="step-light-left"><a class="header-repeat" href="Sikap.php">Pilih Semester</a></div>
      <div class="step-light-right"  >&nbsp;</div>
        <div class="step-no-off">2</div>
      <div class="step-dark-left" >Add Kepribadian</div>
      <div class="step-dark">&nbsp;</div>
      
     
    <br><br><br><br><br>
<?php 
$semester=$_GET['Semester'] ?>
    <form style="background-color: #ffff;border: 1px solid #e3e3e3;" class="well form-horizontal" action="Laporan_Siswa.php" method="GET"  id="contact_form">
    <input type="hidden" style="position: absolute;" name="Semester" value="<?php echo $semester; ?>">
<fieldset>

<!-- Form Name -->
<legend>Search Data Siswa </legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label">Nama</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="nama" placeholder="Name siswa" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">NIS</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="nis" placeholder="Nomor induk siswa" class="form-control"  type="text">
    </div>
  </div>
</div>
<input type="hidden" name="pelajaran">
<input type="hidden" name="kelas">

<?php 

$Semester=$_GET['Semester']; 
$kelas=$_GET['kelas']; 

 ?>

<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>
<table style="margin-left: 327px;">

<tr>
<td><!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
  <input type="hidden" name="id_pelajaran" value="<?php echo $pelajaran; ?>">
   <input type="hidden" name="Semester" value="<?php echo $Semester; ?>">
    <input type="hidden" name="kelas" value="<?php echo $kelas; ?>">
    <button type="submit" class="btn btn-warning" >Search <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>
</td><td>
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
   <a class="btn btn-waarning" href="Laporan_Siswa.php?Semester=<?php echo $semester ?>&kelas=<?php echo $kelas; ?>">Reset<span class="glyphicon glyphicon-send"></span></a>
  </div>
</div>
</td>
</tr>
</fieldset>
</form>
</table>
</div>
<?php 
if(isset($_GET['nama'])){
  $cari = htmlentities($_GET['nama']);
   $cari1 = htmlentities($_GET['kelas']);
    $cari2 = htmlentities($_GET['nis']);    
    $cari3 = htmlentities($_GET['pelajaran']);   
if ($cari=="" && $cari1=="" && $cari2=="" ) {
 return false;
}

if($cari!==""){
$filter_guru="and data_siswa.nama_siswa like '%".$cari."%'";
}else{
$filter_guru="";
}
if($cari1!==""){
$filter_siswa="and data_siswa.Kelas='$cari1'";
}else{
$filter_siswa="";
}
if($cari2!==""){
$filter_pelajaran="and data_siswa.nis='$cari2'";
}else{
$filter_pelajaran="";
}          
?>

<table  class="table table-striped table-bordered" cellspacing="0" >
<thead>
<tr>
<th class="table-header-repeat"><a class="header-repeat" href="">No.</a></th>
<th class="table-header-repeat" ><a class="header-repeat" href="">Nama Siswa</a></th>
<th class="table-header-repeat" ><a class="header-repeat" href="">NIS</a></th>
<th class="table-header-repeat"><a class="header-repeat" href="">Kelas</a></th>
<th class="table-header-repeat"><a class="header-repeat" href="">Isi Kelakuan</a></th>
</tr>
</thead>
<tbody>
<?php

include "conn.php";
$pelajaran=$_GET['id_pelajaran']; 
$kelas=$_GET['kelas'];
$semester=$_GET['Semester'];
 $q="SELECT * FROM `data_siswa` INNER JOIN `tbl_nilai` ON data_siswa.id_siswa=tbl_nilai.id_siswa  Where data_siswa.Kelas='$kelas' and tbl_nilai.id_semester='$semester' $filter_guru $filter_siswa $filter_pelajaran  order by data_siswa.nis";
 
  $qe=mysql_query($q);
    $no=0;
while ($row =mysql_fetch_array($qe)) {
?>
<tr>  
        <td><?php echo $no=$no+1;?></td>
        <td><?php echo $row['nama_siswa']; ?></td>
        <td ><?php echo $row['nis']; ?></td>
             <td style="text-align: center;" ><?php echo $row['id_kelas']; ?></td>

              <td style="text-align: center;" >
        <a class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal<?php echo $row['id_siswa']; ?>">Action  &nbsp; &nbsp;<span  class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>

     



<?php 
    $idsis=$row['id_siswa'];
 $guru=mysql_fetch_array(mysql_query("Select * from tbl_sikap where Id_siswa='$idsis' and Semester='$semester'"));

  ?>

<!-- Modal -->
<div class="modal fade" id="myModal<?php echo $row['id_siswa']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel<?php echo $row['id_guru']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel<?php echo $row['id_siswa']; ?>">Kepribadian dan Ketidakhadiran</h4>
      </div>
      <div class="modal-body">


<form style="background-color: #ffff;border: 1px solid #e3e3e3;" class="well form-horizontal" action="Add_kepribadian.php" method="post"  id="contact_form">
 <input type="hidden" style="position: absolute;" name="Semester" value="<?php echo $semester; ?>">
  <input type="hidden" style="position: absolute;" name="id_siswa" value="<?php echo $row['id_siswa']; ?>">
   <input type="hidden" style="position: absolute;" name="kelas" value="<?php echo $row['id_kelas']; ?>">
<fieldset>

<!-- Form Name -->
<legend>Kepribadian</legend>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Kelakuan</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="Kelakuan" value="<?php echo $guru['Kelakuan']; ?>" placeholder="Kelakuan" style=" width: 234%" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Kerajinan</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="Kerajinan" value="<?php echo $guru['Kerajinan']; ?>"  placeholder="Kerajinan" style=" width: 234%" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Kerapian</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="Kerapian" value="<?php echo $guru['Kerapian']; ?>" placeholder="Kerapian" style=" width: 234%" class="form-control"  type="text">
    </div>
  </div>
</div>

<legend>Ketidakhadiran</legend>

<div class="form-group">
  <label class="col-md-4 control-label">Sakit</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="Sakit" value="<?php echo $guru['Sakit']; ?>"  placeholder="Sakit" style=" width: 234%" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Izin</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="Izin" value="<?php echo $guru['Izin']; ?>"  placeholder="Izin" style=" width: 234%" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Tanpa Keterangan</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="TK" value="<?php echo $guru['T_K']; ?>" placeholder="Tanpa Keterangan" style=" width: 234%" class="form-control"  type="text">
    </div>
  </div>
</div>

<legend>Catatan Untuk Diperhatikan Orangtua</legend>

<div class="form-group">
  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <textarea value="<?php echo $guru['Catatan']; ?>" style="width: 415%;" name="Catatan" class="form-control" type="Text" placeholder="Catatan ....................................."><?php echo $guru['Catatan']; ?></textarea>
    </div>
  </div>
</div>
<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>
<table style="margin-left: 139px;">
<tr>
<td><!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>
</td><td>
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="reset" class="btn btn-waarning" data-dismiss="modal">Close <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>
</td>
</tr>
</table>
</fieldset>
</form>

      </div>
    </div>
  </div>
</div>
       
        </td>
</div>       
</tr>
<?php
}
?>
</tbody>
</table>
<?php }else{?>

<table  class="table table-striped table-bordered" cellspacing="0" >
<thead>
<tr>
<th class="table-header-repeat"><a class="header-repeat" href="">No.</a></th>
<th class="table-header-repeat" ><a class="header-repeat" href="">Nama Siswa</a></th>
<th class="table-header-repeat" ><a class="header-repeat" href="">NIS</a></th>
<th class="table-header-repeat"><a class="header-repeat" href="">Kelas</a></th>
<th class="table-header-repeat"><a class="header-repeat" href="">Isi Kelakuan</a></th>
</tr>
</thead>
<tbody>
<?php
include "conn.php";
$semester=$_GET['Semester'];
$kelas=$_GET['kelas'];
 $q="SELECT * FROM `data_siswa` INNER JOIN `tbl_nilai` ON data_siswa.id_siswa=tbl_nilai.id_siswa  Where data_siswa.Kelas='$kelas' and tbl_nilai.id_semester='$semester' order by data_siswa.nis";
  $qe=mysql_query($q);
    $no=0;
while ($row =mysql_fetch_array($qe)) {
?>
<tr>
        <td><?php echo $no=$no+1;?></td>
        <td><?php echo $row['nama_siswa']; ?></td>
        <td ><?php echo $row['nis']; ?></td>
             <td style="text-align: center;" ><?php echo $row['id_kelas']; ?></td>

              <td style="text-align: center;" >
        <a class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal<?php echo $row['id_siswa']; ?>">Action  &nbsp; &nbsp;<span  class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>

 

<?php 
    $idsis=$row['id_siswa'];
 $guru=mysql_fetch_array(mysql_query("Select * from tbl_sikap where Id_siswa='$idsis' and Semester='$semester'"));

  ?>

<!-- Modal -->
<div class="modal fade" id="myModal<?php echo $row['id_siswa']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel<?php echo $row['id_guru']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel<?php echo $row['id_siswa']; ?>">Kepribadian dan Ketidakhadiran</h4>
      </div>
      <div class="modal-body">


<form style="background-color: #ffff;border: 1px solid #e3e3e3;" class="well form-horizontal" action="Add_kepribadian.php" method="post"  id="contact_form">
 <input type="hidden" style="position: absolute;" name="Semester" value="<?php echo $semester; ?>">
  <input type="hidden" style="position: absolute;" name="id_siswa" value="<?php echo $row['id_siswa']; ?>">
   <input type="hidden" style="position: absolute;" name="kelas" value="<?php echo $row['id_kelas']; ?>">
<fieldset>

<!-- Form Name -->
<legend>Kepribadian</legend>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Kelakuan</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="Kelakuan" value="<?php echo $guru['Kelakuan']; ?>" placeholder="Kelakuan" style=" width: 234%" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Kerajinan</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="Kerajinan" value="<?php echo $guru['Kerajinan']; ?>"  placeholder="Kerajinan" style=" width: 234%" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Kerapian</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="Kerapian" value="<?php echo $guru['Kerapian']; ?>" placeholder="Kerapian" style=" width: 234%" class="form-control"  type="text">
    </div>
  </div>
</div>

<legend>Ketidakhadiran</legend>

<div class="form-group">
  <label class="col-md-4 control-label">Sakit</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="Sakit" value="<?php echo $guru['Sakit']; ?>"  placeholder="Sakit" style=" width: 234%" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Izin</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="Izin" value="<?php echo $guru['Izin']; ?>"  placeholder="Izin" style=" width: 234%" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Tanpa Keterangan</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="TK" value="<?php echo $guru['T_K']; ?>" placeholder="Tanpa Keterangan" style=" width: 234%" class="form-control"  type="text">
    </div>
  </div>
</div>

<legend>Catatan Untuk Diperhatikan Orangtua</legend>

<div class="form-group">
  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <textarea value="<?php echo $guru['Catatan']; ?>" style="width: 415%;" name="Catatan" class="form-control" type="Text" placeholder="Catatan ....................................."><?php echo $guru['Catatan']; ?></textarea>
    </div>
  </div>
</div>
<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>
<table style="margin-left: 139px;">
<tr>
<td><!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>
</td><td>
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="reset" class="btn btn-waarning" data-dismiss="modal">Close <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>
</td>
</tr>
</table>
</fieldset>
</form>

      </div>
    </div>
  </div>
</div>
       
        </td>
</div>       
</tr>
<?php
}}
?>
</tbody>
</table>
</div>
</div>
<div id="footer">
        <div id="footer-left">
        Admin Skin by <span id="spanYear"></span> <a href="http://www.sdnegrijamingintinng  .co.uk" target="_blank">www.raportjaminginting.co.uk</a> S.R.S.N 06081 © Copyright <a href="http://sdnegri.wordpress.com" target="_blank">Jaminginting Network Project.</a> All rights reserved.</div>
        <div class="clear">&nbsp;</div>
    </div>
</div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>