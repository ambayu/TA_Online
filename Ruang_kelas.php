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
  .panel{
    width: 301px;
  }
  td{
    padding-right: 113px;
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
  <div class="col-md-8"> 
  <table>
<tr>
<td>
<?php
include"conn.php";

$tampil=mysql_query("SELECT * FROM data_siswa where kelas = '' ORDER BY id_siswa");
 ?>
<br><br><br><br><br>
<form action="add_kelas.php">
<div class="form-group">
<input style="position: absolute;" type="hidden" name="var" value="I">
  <label class="control-label">Belum Dapat Kelas</label>  
  <div class="inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <select name="kelamin" class="form-control"><?php 
                          while($w=mysql_fetch_array($tampil))
{
    echo "<option value=$w[nis]>$w[nama_siswa] ( $w[nis] )</option>";        
}
?>
                        </select>
    </div><button class="btn btn-warning" type="Submit" >Submit</button>
  </div>
</div> </form>
<div class="panel panel-info">
<div class="panel-heading">Kelas I</div>
<div class="panel-body" style="height: 500px; overflow: auto">
<table id="example" class="table table-striped" cellspacing="0" width="100%">
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
 $q="SELECT * FROM `data_siswa` where kelas ='I' ";
  $qe=mysql_query($q);
while ($row =mysql_fetch_array($qe)) {
?>
<tr>
<td><?php echo $row['id_siswa']; ?></td>
<td><?php echo $row['nama_siswa']; ?></td>
<td>   
<a class="btn btn-danger btn-sm"  href="delete_kelas.php?id=<?php echo $row['id_siswa']; ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>       
        </td>
      </tr>
<?php
}
?>
</tbody>
</table>
</div></div>
</td>
<td>
<?php
include"conn.php";
$tampil=mysql_query("SELECT * FROM data_siswa where kelas = '' ORDER BY id_siswa");
 ?>
<form action="add_kelas.php">
<div class="form-group">
<input style="position: absolute;" type="hidden" name="var" value="II">
  <label class="control-label">Belum Dapat Kelas</label>  
  <div class="inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <select name="kelamin" class="form-control"><?php 
                           while($w=mysql_fetch_array($tampil))
{
    echo "<option value=$w[nis]>$w[nama_siswa] ( $w[nis] )</option>";        
}
?>
</select>
</div><button class="btn btn-warning" type="Submit" >Submit</button></div>
</div> </form>
<form action="add_kelas.php">
<input style="position: absolute;" type="hidden" name="var" value="II">
<?php
include"conn.php";

$tampil=mysql_query("SELECT * FROM data_siswa where kelas = 'I' ORDER BY id_siswa");
 ?>
<div class="form-group">
<label class="control-label">Kelas I</label>  
<div class="inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><select name="kelamin" class="form-control"><?php 
 while($w=mysql_fetch_array($tampil))
{
    echo "<option value=$w[nis]>$w[nama_siswa] ( $w[nis] )</option>";        
}
?>
</select>
</div><button class="btn btn-warning" type="Submit" >Submit</button>
<div>
</div>
 </form>

  <div class="panel panel-info">
  <div class="panel-heading">Kelas II</div>
  <div class="panel-body" style="height: 500px; overflow: auto">
  <table id="example" class="table table-striped" cellspacing="0" width="100%">
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
  $q="SELECT * FROM `data_siswa` where kelas ='II' ";
  $qe=mysql_query($q);
  while ($row =mysql_fetch_array($qe)) {
  ?>
  <tr>
  <td><?php echo $row['id_siswa']; ?></td>
  <td><?php echo $row['nama_siswa']; ?></td>
  <td>   
  <a class="btn btn-danger btn-sm"  href="delete_kelas.php?id=<?php echo $row['id_siswa']; ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>       
  </td>
  </tr>
  <?php
  }
  ?>
  </tbody>
  </table>
  </div>
  </div>
  </td>
<td>
<?php
include"conn.php";
$tampil=mysql_query("SELECT * FROM data_siswa where kelas = '' ORDER BY id_siswa");
 ?>
<form action="add_kelas.php">
<div class="form-group">
<input style="position: absolute;" type="hidden" name="var" value="III">
  <label class="control-label">Belum Dapat Kelas</label>  
  <div class="inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <select name="kelamin" class="form-control"><?php 
                           while($w=mysql_fetch_array($tampil))
{
    echo "<option value=$w[nis]>$w[nama_siswa] ( $w[nis] )</option>";        
}
?>
</select>
</div><button class="btn btn-warning" type="Submit" >Submit</button></div>
</div> </form>
<form action="add_kelas.php">
<input style="position: absolute;" type="hidden" name="var" value="III">
<?php
include"conn.php";

$tampil=mysql_query("SELECT * FROM data_siswa where kelas = 'II' ORDER BY id_siswa");
 ?>
<div class="form-group">
<label class="control-label">Kelas II</label>  
<div class="inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><select name="kelamin" class="form-control"><?php 
 while($w=mysql_fetch_array($tampil))
{
    echo "<option value=$w[nis]>$w[nama_siswa] ( $w[nis] )</option>";        
}
?>
</select>
</div><button class="btn btn-warning" type="Submit" >Submit</button>
<div>
</div>
</form>

  <div class="panel panel-info">
  <div class="panel-heading">Kelas III</div>
  <div class="panel-body" style="height: 500px; overflow: auto">
  <table id="example" class="table table-striped" cellspacing="0" width="100%">
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
  $q="SELECT * FROM `data_siswa` where kelas ='III' ";
  $qe=mysql_query($q);
  while ($row =mysql_fetch_array($qe)) {
  ?>
  <tr>
  <td><?php echo $row['id_siswa']; ?></td>
  <td><?php echo $row['nama_siswa']; ?></td>
  <td>   
  <a class="btn btn-danger btn-sm"  href="delete_kelas.php?id=<?php echo $row['id_siswa']; ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>       
  </td>
  </tr>
  <?php
  }
  ?>
  </tbody>
  </table>
  </div>
  </div>
</td>
</tr>
<tr>

<td>
<?php
include"conn.php";
$tampil=mysql_query("SELECT * FROM data_siswa where kelas = '' ORDER BY id_siswa");
 ?>
<form action="add_kelas.php#lol">
<div class="form-group">
<input style="position: absolute;" type="hidden" name="var" value="IV">
<label class="control-label">Belum Dapat Kelas</label>  
<div class="inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<select name="kelamin" class="form-control">
<?php while($w=mysql_fetch_array($tampil))
{
echo "<option value=$w[nis]>$w[nama_siswa] ( $w[nis] )</option>";        
}
?>
</select>
</div><button class="btn btn-warning" type="Submit" >Submit</button></div>
</div> </form>
<form action="add_kelas.php#lol">
<input style="position: absolute;" type="hidden" name="var" value="IV">
<?php
include"conn.php";
$tampil=mysql_query("SELECT * FROM data_siswa where kelas = 'III' ORDER BY id_siswa");
 ?>
<div class="form-group">
<label class="control-label">Kelas III</label>  
<div class="inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><select name="kelamin" class="form-control"><?php 
 while($w=mysql_fetch_array($tampil))
{
    echo "<option value=$w[nis]>$w[nama_siswa] ( $w[nis] )</option>";        
}
?>
</select>
</div><button class="btn btn-warning" type="Submit" >Submit</button>
<div>
</div>
</form>

<div class="panel panel-info">
<div class="panel-heading">Kelas IV</div>
<div class="panel-body" style="height: 500px; overflow: auto">
<table id="example" class="table table-striped" cellspacing="0" width="100%">
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
  $q="SELECT * FROM `data_siswa` where kelas ='IV' ";
  $qe=mysql_query($q);
  while ($row =mysql_fetch_array($qe)) {
  ?>
  <tr>
  <td><?php echo $row['id_siswa']; ?></td>
  <td><?php echo $row['nama_siswa']; ?></td>
  <td>   
  <a class="btn btn-danger btn-sm"  href="delete_kelas.php?id=<?php echo $row['id_siswa']; ?>#lol"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>       
  </td>
  </tr>
  <?php
  }
  ?>
</tbody>
</table>
</div></div>
</td>

<td>
<?php
include"conn.php";
$tampil=mysql_query("SELECT * FROM data_siswa where kelas = '' ORDER BY id_siswa");
 ?>
<form action="add_kelas.php#lol">
<div class="form-group">
<input style="position: absolute;" type="hidden" name="var" value="V">
  <label class="control-label">Belum Dapat Kelas</label>  
  <div class="inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <select name="kelamin" class="form-control"><?php 
                           while($w=mysql_fetch_array($tampil))
{
    echo "<option value=$w[nis]>$w[nama_siswa] ( $w[nis] )</option>";        
}
?>
</select>
</div><button class="btn btn-warning" type="Submit" >Submit</button></div>
</div> </form>
<form action="add_kelas.php#lol">
<input style="position: absolute;" type="hidden" name="var" value="V">
<?php
include"conn.php";

$tampil=mysql_query("SELECT * FROM data_siswa where kelas = 'IV' ORDER BY id_siswa");
 ?>
<div class="form-group">
<label class="control-label">Kelas IV</label>  
<div class="inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><select name="kelamin" class="form-control"><?php 
 while($w=mysql_fetch_array($tampil))
{
    echo "<option value=$w[nis]>$w[nama_siswa] ( $w[nis] )</option>";        
}
?>
</select>
</div><button class="btn btn-warning" type="Submit" >Submit</button>
<div>
</div>
</form>
   <div class="panel panel-info">
  <div class="panel-heading">Kelas V</div>
  <div class="panel-body" style="height: 500px; overflow: auto">
  <table id="example" class="table table-striped" cellspacing="0" width="100%">
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
  $q="SELECT * FROM `data_siswa` where kelas ='V' ";
  $qe=mysql_query($q);
  while ($row =mysql_fetch_array($qe)) {
  ?>
  <tr>
  <td><?php echo $row['id_siswa']; ?></td>
  <td><?php echo $row['nama_siswa']; ?></td>
  <td>   
  <a class="btn btn-danger btn-sm"  href="delete_kelas.php?id=<?php echo $row['id_siswa']; ?>#lol"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>       
  </td>
  </tr>
  <?php
  }
  ?>
</tbody>
</table>
</div></div>
</td>
<td>
<?php
include"conn.php";
$tampil=mysql_query("SELECT * FROM data_siswa where kelas = '' ORDER BY id_siswa");
 ?>
<form action="add_kelas.php#lol"  id="lol">
<div class="form-group">
<input style="position: absolute;" type="hidden" name="var" value="VI">
  <label class="control-label">Belum Dapat Kelas</label>  
  <div class="inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <select name="kelamin" class="form-control"><?php 
                           while($w=mysql_fetch_array($tampil))
{
    echo "<option value=$w[nis]>$w[nama_siswa] ( $w[nis] )</option>";        
}
?>
</select>
</div><button class="btn btn-warning" type="Submit" >Submit</button></div>
</div> </form>


<form action="add_kelas.php#lol" >
<input style="position: absolute;" type="hidden" name="var" value="VI">
<?php
include"conn.php";

$tampil=mysql_query("SELECT * FROM data_siswa where kelas = 'V' ORDER BY id_siswa");
 ?>
<div class="form-group">
<label class="control-label">Kelas V</label>  
<div class="inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><select name="kelamin" class="form-control"><?php 
 while($w=mysql_fetch_array($tampil))
{
    echo "<option value=$w[nis]>$w[nama_siswa] ( $w[nis] )</option>";        
}
?>
</select>
</div><button class="btn btn-warning" type="Submit" >Submit</button>
<div>
</div>
</form>

  <div class="panel panel-info">
    <div class="panel-heading">Kelas VI</div>
  <div class="panel-body" style="height: 500px; overflow: auto">
  <table id="example" class="table table-striped" cellspacing="0" width="100%">
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
  $q="SELECT * FROM `data_siswa` where kelas ='VI' ";
  $qe=mysql_query($q);
  while ($row =mysql_fetch_array($qe)) {
  ?>
  <tr>
  <td><?php echo $row['id_siswa']; ?></td>
  <td><?php echo $row['nama_siswa']; ?></td>
  <td>   
  <a class="btn btn-danger btn-sm"  href="delete_kelas.php?id=<?php echo $row['id_siswa']; ?>#lol"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>       
  </td>
  </tr>
  <?php
  }
  ?>
</tbody>
</table>
</div></div>
</td>
</tr>
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