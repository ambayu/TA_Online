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
    <nav class="navbar-inverse navbar-top" role="navigation">
    <div class="container-fluid">
       <a style="font-size: 38px;  color:white!important;" class="navbar-brand" href="home_dosen.php">Tugas Akhir Online</a>
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
      <a class="navbar-brand" href="home_dosen.php">D3 Teknik Informatika</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="home_dosen.php">Home<span class="sr-only">(current)</span></a></li>
       
        <li><a href="lta.php">Lihat Judul<span class="sr-only">(current)</span></a></li>
        <li><a href="fta.php">Lihat TA<span class="sr-only">(current)</span></a></li>
        <li><a href="Bimbingan2.php">Bimbingan<span class="sr-only">(current)</span></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href=""><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;<?php
         echo $_SESSION['username'] ?></a></li>
        <li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog"></span> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="profil_dosen.php">Profile</a></li>
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
  <div class="col-md-8"> 
   
<div class="container">
<?php 
include "conn.php";
$poss=$_SESSION['username'];
$q="SELECT * FROM `data_guru` WHERE username='$poss'";
$eq=mysql_query($q);
$rowi = mysql_fetch_assoc($eq);

 ?>

   
</div>
    </div><!-- /.container -->

            
        



<table style="width: 97.5%;max-width: 100%;margin-bottom: 20px;margin-left: 2.5%;" id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>Nama Mahasiswa</th>
        <th>Tanggal</th>
        <th>Comment</th>
        <th>Tanggal Revisi</th>
        <th>Disetujui / Tidak</th>
        <th>Comment</th>
  <th>Action</th>
      </tr>

    </thead>
    <tbody>
<?php
$dp=$rowi['id_guru'];
$qo="SELECT * FROM `data_siswa` where doping='$dp'";
$qeo=mysql_query($qo);
while ($rows =mysql_fetch_array($qeo))
{
$ds=$rows['id_siswa'];

$q="SELECT * FROM `Bimbingan` where ids='$ds' ";
$qe=mysql_query($q);
while ($rowsi =mysql_fetch_array($qe))
{
?>  
<tr>
<td><?php echo $rows['nama_siswa']; ?></td>
<td><?php echo $rowsi['Date']; ?></td>
<td><textarea readonly><?php echo $rowsi['Comment']; ?></textarea></td>
<td><?php echo $rowsi['Revisi']; ?></td>
<td><?php echo $rowsi['Setuju']; ?></td>
<td><textarea readonly><?php echo $rowsi['Comment2']; ?></textarea></td>

<td>
<a class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal<?php echo $rowsi['No']; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>

       
<!-- Modal -->
<div class="modal fade" id="myModal<?php echo $rowsi['No']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel<?php echo $rowsi['No']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel<?php echo $rowsi['No']; ?>">Edit Data</h4>
      </div>
      <div class="modal-body">


<form style="background-color: #ffff;border: 1px solid #e3e3e3;" class="well form-horizontal" action="add9.php" method="post"  id="contact_form" enctype="multipart/form-data"> 
<fieldset>

<!-- Form Name -->
<legend>Edit</legend>

<!-- Text input-->
<input name="no" value="<?php echo $rowsi['No']; ?>" style="position: absolute;" type="hidden">

<div class="form-group">
  <label class="col-md-4 control-label">Tanggal Perubahan Jadwal Bimbingan</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input style=" width: 154%" name="dat"  class="form-control"  type="Date" value="<?php echo $rowsi['Revisi']; ?>">
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Comment</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <textarea style=" width: 234%" name="com" type="text" class="form-control"  ><?php echo $rowsi['Comment2']; ?></textarea>
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Setuji / Tidak</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>

  <select style=" width: 234%" name="ty" class="form-control">
    <option name="ty" ><?php echo $rowsi['Setuju']; ?></option>
    <option name="ty" >Setuju</option>
     <option name="ty">Tidak</option>
  </select>
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

<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>