<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Input Nilai</title>

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
   include "conn.php";
   $username=$_SESSION['username'];
  $guru=mysql_fetch_array(mysql_query("SELECT * from `data_guru` where username='$username'"));

} 
 ?>
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
  <div class="col-md-8" style="width: 100%"> 
      
      <div class="step-no-off">1</div>
      <div class="step-light-left">Pilih Mata Pelajaran</div>
      <div class="step-light-right"  >&nbsp;</div>

       <div class="step-no-off">2</div>
      <div class="step-light-left"   >Semester & Kelas</div>
      <div class="step-light-right">&nbsp;</div>
   
      <div class="step-no">3</div>
      <div class="step-dark-left">Input Nilai Siswa</div>
       <div class="step-dark-right">&nbsp;</div>
      <div class="step-no-off">4</div>
      <div class="step-light-left">Selesai</div>
      <div class="step-light-round">&nbsp;</div>
      <div class="clear"></div>

    <br><br><br><br><br>
<form style="background-color: #ffff;border: 1px solid #e3e3e3;width: 91%;" class="well form-horizontal" action="Input_nilai_data_guru.php" method="get"  id="contact_form">
<fieldset>
<?php 
$ix=$_GET['id_pelajaran'];
 ?>
 <?php 
  include "conn.php";
  $namapelajaran=mysql_fetch_array(mysql_query("SELECT * from `setup_pelajaran` where id_pelajaran='$ix' "));
 ?>
<!-- Form Name -->
<?php
$ids=$guru['id_guru'];
$id=$_GET['Semester'];
$kelas=$_GET['kelas']; 
 ?>
<legend>Search Data Siswa</legend>
<input type="hidden" name="id_pelajaran" value="<?php echo $ix;?>" /> 
<input type="hidden" name="kelas" value="<?php echo $kelas; ?>">
<input type="hidden" name="Semester" value="<?php echo $id; ?>">
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

<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>
<table style="margin-left: 291px;">
<tr>
<td><!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" >Search <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>
</td><td>
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
   <a class="btn btn-waarning" href="Input_nilai_data_guru.php?&Semester=<?php echo $id; ?>&kelas=<?php echo $kelas; ?>">Reset<span class="glyphicon glyphicon-send"></span></a>
  </div>
</div>
</td>
</tr>
</table>
</form>

</fieldset>

<?php 
if(isset($_GET['nama'])){
  $cari = htmlentities($_GET['nama']);
    $cari2 = htmlentities($_GET['nis']);
          
          if ($cari==""  && $cari2=="") {
 return false;
          }

if($cari!==""){
$filter_guru="and nama_siswa like '%".$cari."%'";
}else{
$filter_guru="";
}

if($cari2!==""){
$filter_pelajaran="and nis='$cari2'";
}else{
$filter_pelajaran="";
}

     
 ?>
 <form action="add_nilai_guru.php" method="POST" >  
    <legend>Input Nilai</legend>
    <fieldset>
<br> <br>
<table  class="table table-striped table-bordered" cellspacing="0" style="width: 91%;">
<thead>
<tr>
<th class="table-header-repeat" width="1%"><a class="header-repeat" href="">No.</a></th>
<th class="table-header-repeat" width="40%"><a class="header-repeat" href="">Nama Siswa</a></th>
<th class="table-header-repeat" width="30%"><a class="header-repeat" href="">NIS</a></th>
<th class="table-header-repeat" width="29%"><a class="header-repeat" href="">Pelajaran</a></th>
<th class="table-header-repeat" width="29%"><a class="header-repeat" href="">Nilai</a></th>
</tr>
</thead>
<tbody>
<?php
include "conn.php";
$ids=$guru['id_guru'];
$id=$_GET['Semester'];
$kelas=$_GET['kelas'];
$mapel=$namapelajaran['nama_pelajaran'];

 $q="SELECT * FROM   `data_siswa`  WHERE kelas='$kelas' $filter_guru $filter_pelajaran order by data_siswa.nis desc";
  $qe=mysql_query($q);
    $no=0;
while ($row =mysql_fetch_array($qe)) {
?>  
   
      <tr>

        <td><?php echo $no=$no+1;?></td>
        <td><?php echo $row['nama_siswa']; ?></td>
        <td><?php echo $row['nis']; ?></td>
        <td><?php echo $mapel; ?></td>
        <td><input type="text" name="nilai<?php echo $no ?>"></td>
         <input type="hidden" name="id_pelajaran<?php echo $no ?>" value="<?php echo $row['id_pelajaran'];?>" /> 
          <input type="hidden" name="id_siswa<?php echo $no ?>" value="<?php echo $row['id_siswa'];?>" />
</div>       

</tr>

<?php
}

?>
    </tbody>
      </table>
      <br><br>
      <?php
      
        ?>
         <input type="hidden" name="id_pelajaran" value="<?php echo $ix;?>" /> 
        <input type="hidden" name="Semester" value="<?php echo $id;?>" />
         <input type="hidden" name="id_guru" value="<?php echo $ids;?>" />
      <input type="hidden" name="jumlah" value="<?php echo $no; ?>">
            <button  type="submit" class="btn btn-warning" >Simpan <span class="glyphicon glyphicon-send"></span></button>
              <input type="hidden" name="id_kelas" value="<?php echo $kelas; ?>">
    
<?php  }else{   ?>
<form action="add_nilai_guru.php" method="POST" >  
    <legend>Input Nilai</legend>
    
<br> <br>
<table  class="table table-striped table-bordered" cellspacing="0" style="width: 91%;">
<thead>
<tr>
<th class="table-header-repeat" width="1%"><a class="header-repeat" href="">No.</a></th>
<th class="table-header-repeat" width="40%"><a class="header-repeat" href="">Nama Siswa</a></th>
<th class="table-header-repeat" width="30%"><a class="header-repeat" href="">NIS</a></th>
<th class="table-header-repeat" width="29%"><a class="header-repeat" href="">Pelajaran</a></th>
<th class="table-header-repeat" width="29%"><a class="header-repeat" href="">Nilai</a></th>
</tr>
</thead>
<tbody>
<?php
include "conn.php";
$ids=$guru['id_guru'];
$id=$_GET['Semester'];
$kelas=$_GET['kelas'];
$mapel=$namapelajaran['nama_pelajaran'];

  $q="SELECT * FROM   `data_siswa`  WHERE kelas='$kelas'  order by nis asc";
  $qe=mysql_query($q);
    $no=0;
while ($row =mysql_fetch_array($qe)) {
?>  
   
      <tr>

        <td><?php echo $no=$no+1;?></td>
        <td><?php echo $row['nama_siswa']; ?></td>
        <td><?php echo $row['nis']; ?></td>
        <td><?php echo $mapel; ?></td>
        <td><input type="text" name="nilai<?php echo $no ?>"></td>
     
          <input type="hidden" name="id_siswa<?php echo $no ?>" value="<?php echo $row['id_siswa'];?>" />
</div>       

</tr>

<?php
}

?>
    </tbody>
      </table>
      <br><br>
      <?php
      
        ?>
           <input type="hidden" name="id_pelajaran" value="<?php echo $ix;?>" /> 
        <input type="hidden" name="Semester" value="<?php echo $id;?>" />
         <input type="hidden" name="id_guru" value="<?php echo $ids;?>" />
      <input type="hidden" name="jumlah" value="<?php echo $no; ?>">
            <button  type="submit" class="btn btn-warning" >Simpan <span class="glyphicon glyphicon-send"></span></button>
              <input type="hidden" name="id_kelas" value="<?php echo $kelas; ?>">
    </form>
    <?php } ?>
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