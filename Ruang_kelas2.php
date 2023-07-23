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
    <style type="text/css">
      .table{
        width: auto;
      }
    </style>
  </head>
  <body>
    <nav class="navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">S.R.S.N 06081</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="home.php">Home<span class="sr-only">(current)</span></a></li>
              <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Setup <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="pelajaran.php">Pelajaran</a></li>
            <li><a href="kelas.php">Kelas</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Data Induk <span class="caret"></span></a>
          <ul class="dropdown-menu">
               <li><a href="guru.php">Guru</a></li>
            <li><a href="siswa.php">Siswa</a></li>
          </ul>
        </li>
             <li><a href="ruang_kelas.php">Ruang Kelas</a></li>
      <li><a href="laporan.php">Laporan</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span>User Login</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog"></span> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Profile</a></li>
            <li><a href="#">Akun</a></li>
            <li><a href="#">About</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Logout</a></li>
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
  <table><tr><td>
  <h1>Kelas I</h1>
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

<form action="add.php" method="post">
          <table width="100%" cellspacing="0" cellpadding="0" border="0">
            <tbody><tr valign="top">
              <td><!--  start step-holder -->
                <!--  end step-holder -->
                  <!-- start id-form -->
                  <table id="id-form" cellspacing="0" cellpadding="0" border="0">
                    <tbody><tr>
                      <th valign="top">Nama Mata Pelajaran&nbsp;&nbsp; </th>
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
        <th>Nama Siswa</th>
        <th>Action</th>
      
      </tr>
    </thead>
    <tbody>
<?php
include "conn.php";
 $q="SELECT * FROM `setup_pelajaran` ";
  $qe=mysql_query($q);
while ($row =mysql_fetch_array($qe)) {
?>
   
      <tr>
        <td><?php echo $row['id_pelajaran']; ?></td>
        <td><?php echo $row['nama_pelajaran']; ?></td>
        <td>
     
          <a class="btn btn-danger btn-sm"  href="delete.php?id=<?php echo $row['id_pelajaran']; ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>       
        </td>
      </tr>
<?php
}
?>
    </tbody>
      </table>
      </td><td>  <h1>Kelas II</h1>
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

<form action="add.php" method="post">
          <table width="100%" cellspacing="0" cellpadding="0" border="0">
            <tbody><tr valign="top">
              <td><!--  start step-holder -->
                <!--  end step-holder -->
                  <!-- start id-form -->
                  <table id="id-form" cellspacing="0" cellpadding="0" border="0">
                    <tbody><tr>
                      <th valign="top">Nama Mata Pelajaran&nbsp;&nbsp; </th>
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
<table id="example"  class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>Nomor</th>
        <th>Nama Siswa</th>
        <th>Action</th>
      
      </tr>
    </thead>
    <tbody>
<?php
include "conn.php";
 $q="SELECT * FROM `setup_pelajaran` ";
  $qe=mysql_query($q);
while ($row =mysql_fetch_array($qe)) {
?>
   
      <tr>
        <td><?php echo $row['id_pelajaran']; ?></td>
        <td><?php echo $row['nama_pelajaran']; ?></td>
        <td>
        
          <a class="btn btn-danger btn-sm" href="delete.php?id=<?php echo $row['id_pelajaran']; ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

    
       
        </td>
      </tr>
<?php
}
?>
    </tbody>
      </table></td></tr><tr><td><div class="panel panel-info">
                                <div class="panel-heading">VII a</div>
                                <div class="panel-body" style="height: 300px; overflow: auto">
                                <table class="table table-stripped">
                                    <thead>
                                        <tr><th>No</th><th>Nama</th><th>Aksi</th></tr>
                                    </thead>
                                    <tbody><tr><td>1</td><td>Agus</td><td class="ctr"><a href="#" onclick="return hapus(1);" class="btn btn-danger btn-xs"><i class="fa fa-remove"></i></a></td></tr><tr><td>2</td><td>Budi</td><td class="ctr"><a href="#" onclick="return hapus(2);" class="btn btn-danger btn-xs"><i class="fa fa-remove"></i></a></td></tr></tbody></table></div></div></td></tr></table>
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