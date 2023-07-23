<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Input Selesai</title>

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
      <a class="navbar-brand" href="home_guru.php">S.R.S.N 06081</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="home_guru.php">Home<span class="sr-only">(current)</span></a></li>
       
         <li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Activity <span class="caret"></span></a>
          <ul class="dropdown-menu">
             
            <li><a href="Input_nilai_mapel.php">Input Nilai</a></li>
          </ul>
        </li>

     
    <li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Laporan <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="Penilaian_guru.php">Penilaian</a></li>
           
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href=""><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;<?php
         echo $_SESSION['username'] ?></a></li>
        <li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog"></span> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="profil_guru.php">Profile</a></li>
            <li><a href="akun_guru.php">Akun</a></li>
            <li><a href="about_guru.php">About</a></li>
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
  <div class="col-md-8" style="width: 80%"> 
  
      <div class="step-no-off">1</div>
      <div class="step-light-left">Pilih Mata Pelajaran</div>
      <div class="step-light-right"  >&nbsp;</div>

       <div class="step-no-off">2</div>
      <div class="step-light-left"   >Semester & Kelas</div>
      <div class="step-light-right">&nbsp;</div>
   
      <div class="step-no-off">3</div>
      <div class="step-light-left">Input Nilai Siswa</div>
       <div class="step-light-right">&nbsp;</div>
      <div class="step-no">4</div>
      <div class="step-dark-left">Selesai</div>
      <div class="step-dark-round">&nbsp;</div>
    <br><br><br><br><br>

<table  class="table table-striped table-bordered" cellspacing="0" style="width: 91%;">
<thead>
<tr>
<th class="table-header-repeat"><a class="header-repeat" href="">No.</a></th>
<th class="table-header-repeat" ><a class="header-repeat" href="">Nama Siswa</a></th>
<th class="table-header-repeat" ><a class="header-repeat" href="">NIS</a></th>
<th class="table-header-repeat"><a class="header-repeat" href="">Kelas</a></th>
<th class="table-header-repeat"><a class="header-repeat" href="">Nama Pelajaran</a></th>
<th class="table-header-repeat"><a class="header-repeat" href="">Semester</a></th>
<th class="table-header-repeat"><a class="header-repeat" href="">Nilai</a></th>

</tr>
</thead>
<tbody>
<?php 
include "conn.php";
$kelas=$_GET['id_kelas'];
$pelajaran=$_GET['pelajaran'];

$guru=mysql_fetch_array(mysql_query("SELECT * from `tbl_jadwal` INNER JOIN `data_guru` ON tbl_jadwal.id_guru=data_guru.id_guru where id_pelajaran='$pelajaran' and id_kelas='$kelas'"));
$lajar=mysql_fetch_array(mysql_query("SELECT * from `setup_pelajaran` where id_pelajaran='$pelajaran'"));


 ?>
    <form style="background-color: #ffff;border: 1px solid #e3e3e3;" class="well form-horizontal" action="add3.php" method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend>Data Guru</legend>

<div class="form-group">
  <label class="col-md-4 control-label">Nama guru</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="nama" placeholder="First Name" class="form-control"  readonly type="text" value="<?php echo $guru['nama_guru']; ?>">
    </div>
  </div>
</div>
<br><br>
<div class="form-group">
  <label class="col-md-4 control-label">Kelas</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="nama" placeholder="First Name" class="form-control" readonly type="text" value="<?php echo $kelas; ?>">
    </div>
  </div>
</div>
<br><br>
<div class="form-group">
  <label class="col-md-4 control-label">Pelajaran</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="nama" placeholder="First Name" class="form-control"  type="text" value="<?php echo $lajar['nama_pelajaran']; ?>" readonly>
    </div>
  </div>
</div>
</fieldset>
</form>
<br><br>
<legend>Data Nilai</legend>
<?php

include "conn.php";
$kelas=$_GET['id_kelas'];
$pelajaran=$_GET['pelajaran'];

 $q="SELECT * FROM `data_siswa` INNER JOIN `tbl_nilai`  ON  data_siswa.id_siswa=tbl_nilai.id_siswa INNER JOIN `setup_pelajaran` ON setup_pelajaran.id_pelajaran=tbl_nilai.id_pelajaran Where tbl_nilai.id_pelajaran='$pelajaran' AND data_siswa.Kelas='$kelas'  order by data_siswa.Kelas Asc";
  $qe=mysql_query($q);
    $no=0;
while ($row =mysql_fetch_array($qe)) {
?>
   
      <tr>
        <td><?php echo $no=$no+1;?></td>
        <td><?php echo $row['nama_siswa']; ?></td>
        <td><?php echo $row['nis']; ?></td>
        
       
            <td><?php echo $row['id_kelas']; ?></td>
             <td><?php echo $row['nama_pelajaran']; ?></td>
              <td style="text-align:center;"><?php echo $row['id_semester']; ?></td>
              <td><?php echo $row['nilai']; ?></td>
     

</div>       

</tr>

<?php
}
?>
    </tbody>
      </table>
      <br><br>
 
 </div>
 </div>
</div>
<br><br><br><br><br><br><br><br><br>
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