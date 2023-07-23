<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Pelajaran</title>
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
  <div class="col-md-8"> 
    <h1>Data Kelas</h1>
<br><br>
 <?php
    /* handle error */
    if (isset($_GET['error'])) : ?>
        <div style="position: relative;padding-right: 498px !important;"  class="alert alert-warning alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <strong>Warning!</strong> <?php $error=$_GET['error'];
          echo $error;?>
        </div>
    <?php endif;?>

<form action="add2.php" method="post">
          <table width="100%" cellspacing="0" cellpadding="0" border="0">
            <tbody><tr valign="top">
              <td><!--  start step-holder -->
                <!--  end step-holder -->
                  <!-- start id-form -->
                  <table id="id-form" cellspacing="0" cellpadding="0" border="0">
                    <tbody><tr>
                      <th valign="top">Nama kelas&nbsp;&nbsp; </th>
                      <td><input class="inp-form" name="nama_pelajaran" type="text"></td>
                      <td></td>
                    </tr>
                    <tr>
                      <th>&nbsp;</th>
                      <td valign="top">
                         <div class="button-container">
    <button type="submit" class="button"><span>Submit</span></button>
  </div> </td> <td valign="top">
                             <div class="button-container">
    <button style="left: -91px;" type="reset" class="button"><span>Reset</span></button>
  </div> 
                          
                      </td>
                      <td></td>
                    </tr>
                  </tbody></table>
                <!-- end id-form  --></form>
              </td>

            </tr>
            <tr>
              <td><img src="img/shared/blank.gif" alt="blank" width="695" height="1"></td>
              <td></td>
            </tr>
          </tbody></table>

<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>Nomor</th>
        <th>Nama Kelas</th>
        <th>Action</th>
      
      </tr>
    </thead>
    <tbody>
<?php
include "conn.php";
 $q="SELECT * FROM `setup_kelas` ";
  $qe=mysql_query($q);
while ($row =mysql_fetch_array($qe)) {
?>
   
      <tr>
        <td><?php echo $row['id_kelas']; ?></td>
        <td><?php echo $row['nama_kelas']; ?></td>
        <td>
        <a class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal<?php echo $row['id_kelas']; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
          <a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')" href="delete2.php?id=<?php echo $row['id_kelas']; ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

     



<!-- Modal -->
<div class="modal fade" id="myModal<?php echo $row['id_kelas']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel<?php echo $row['id_kelas']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel<?php echo $row['id_kelas']; ?>">Edit Data</h4>
      </div>
      <div class="modal-body">

<form action="edit2.php" method="post">
  <div class="form-group">
    <label for="nm">Nomor</label>
    <input name="nomor" type="text" class="form-control" id="nm<?php echo $row['id_kelas']; ?>" value="<?php echo $row['id_kelas']; ?>">
  </div>
  <div class="form-group">
    <label for="gd">Nama Pelajaran</label>
    <input name="nama" type="text" class="form-control" id="gd<?php echo $row['nama_kelas']; ?>" value="<?php echo $row['nama_kelas']; ?>">
  </div>

     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" >Save changes</button>

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