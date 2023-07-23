<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Data Dosen</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
   <link href="assets/css/style1.css" rel="stylesheet">
   <script type="text/javascript" src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js"></script>    


  </head>
  <body>
<?php
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
   
<div class="container">
<?php 
include "conn.php";
$poss=$_SESSION['username'];
$q="SELECT * FROM `data_siswa` WHERE username='$poss'";
$eq=mysql_query($q);
$rowi = mysql_fetch_assoc($eq);
 ?>

    <form style="background-color: #ffff;border: 1px solid #e3e3e3;" class="well form-horizontal" action="upload_judul.php" method="post"  id="contact_form" enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
<legend>Permohonan Judul</legend>
<input type="hidden" name="idsiswa" value="<?php echo $rowi['id_siswa']; ?>">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label">Judul Proposal</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="judul" placeholder="First Name" class="form-control"  type="text">
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Upload Judul</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="gambar" type="file" class="form-control"  >
    </div>
  </div>
</div>
<!-- Text input-->



<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>
<table style="margin-left: 332px;">
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
    <button type="reset" class="btn btn-waarning" >Reset <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>
</td>
</tr>
</table>
</fieldset>
</form>
</div>
    </div><!-- /.container -->

            
        

<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<table style="width: 97.5%;max-width: 100%;margin-bottom: 20px;margin-left: 2.5%;" id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>Tanggal</th>
        <th>Judul Proposal</th>
        <th>File</th>
       <th>Revisi</th>
        <th>Comment</th>
         <th>Disetujui / Tidak</th>
<th>Action</th>
      </tr>
    </thead>
    <tbody>
<?php
include "conn.php";
$popo=$rowi['id_siswa'];
 $q="SELECT * FROM `judul` where id_siswa='$popo'";
  $qe=mysql_query($q);
while ($row =mysql_fetch_array($qe)) {
?>  
<tr>
<td><?php echo $row['Date']; ?></td>
<td><?php echo $row['juduls']; ?></td>
<td><?php echo $row['file']; ?></td>

<td><a href="download.php?file=<?php echo $row['Revisi']; ?>"><?php echo $row['Revisi']; ?>
</td>
<td><TEXTAREA><?php echo $row['Comment']; ?></TEXTAREA></td>
<td><?php echo $row['dt']; ?></td>

<td>
<a class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal<?php echo $row['No']; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>

     



<!-- Modal -->
<div class="modal fade" id="myModal<?php echo $row['No']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel<?php echo $row['No']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel<?php echo $row['No']; ?>">Edit Data</h4>
      </div>
      <div class="modal-body">


<form style="background-color: #ffff;border: 1px solid #e3e3e3;" class="well form-horizontal" action="edit8.php" method="post"  id="contact_form" enctype="multipart/form-data">
<fieldset>
<input type="hidden" name="no" value="<?php echo $row['No']; ?>">
<!-- Form Name -->
<legend>Data Mahasiswa</legend>
<div class="form-group">
  <label class="col-md-4 control-label">Judul Proposal</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input style=" width: 234%"  name="judul" placeholder="Judul" value="<?php echo $row['juduls']; ?>" class="form-control"  type="text">
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Upload Judul</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input style=" width: 234%" name="gambar" type="file" class="form-control"  >
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