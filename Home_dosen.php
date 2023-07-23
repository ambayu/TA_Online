<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
   <link href="assets/css/style1.css" rel="stylesheet">
      <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  </head>
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
  <div class="col-md-8" >

            <table width="100%" cellspacing="0" cellpadding="0" border="0">
            <tbody><tr>
                <td class="green-left">Selamat Datang di web Sistem Informasi Nilai Online. Waktu Akses [ <?php $tgl=date('l, d-m-Y');echo $tgl;
                ?> ]</td>
                <td class="green-right"></td>
            </tr>
            </tbody></table>
            <p style="font-family: times new roman;font-size: 16px;line-height: 28px;">
            <br><br>
            <div id="images" style="z-index: 1;
">
<a href=""> <img id="image1" src="img/1.jpg"></a>

<a href=""> <img id="image2" src="img/5.jpg"></a>

<a href=""> <img id="image3" src="img/3.jpg" style="
"></a>

<a href=""> <img id="image4" src="img/4.jpg"></a>

<a href=""><img id="image5" src="img/2.jpg"></a></div>
<div id="slider" style="
">
<a href="#image1">1</a>
<a href="#image2">2</a>
<a href="#image3">3</a>
<a href="#image4">4</a>
<a href="#image5">5</a><br><br>
<legend>VISI SEKOLAH</legend>
</div>
        Ramah dalam pelayanan, Sopan dalam penampilan, Unggul dalam prestasi berdasarkan iman, ilmu dan taqwa.
        <br>
        <br>
 <br>
        <br>
   <legend>MISI SEKOLAH :</legend>
        1. Menanamkan nilai-nilai agama dalam kehidupan sehari-hari.<br>
        2.Mengoptimalkan proses pembelajaran dengan pendekatan Aktif, Inovatif, Kreatif, Kreatif, Efektif dan Menyenangkan.<br>
        3.Terwujudnya disiplin, integrasitas yang tinggi dari seluruh warga sekolah.<br>
        4.Meningkatkan rasa tanggung jawab, kedisiplinan, percaya diri, kejujuran serta sikap hormat dan santun.<br>
        5.Terwujudnya lingkungan sekolah yang bersih, indah dan asri.<br>
   </div>
  <div class="col-md-4">
  <p> </p>
    <ul class="nav nav-pills nav-stacked" style="font-family: times new roman;font-size: 15px;line-height: 21px;">
      <li role="presentation" class="active"><a href="">PENGUMUMAN :</a></li>
      <br>
         Sistem informasi merupakan sejumlah komponen (manusia, komputer, teknologi informasi dan prosedur kerja), ada suatu yang diproses data menjadi infromasi dan dimaksudkan untuk mencapai sasaran dan tujuan (Kadir.A, 2003 : 10). Dalam membuat website ada banyak jenis software dan bahasa pemrograman yang dibutuhkan. Website sistem informasi yang penulis gunakan yaitu website dinamis yang menggunakan beberapa software dan bahasa pemrograman. Aplikasi yang penulis gunakan untuk membuat website ” Perancangan Sistem Informasi Pengolahan Nilai Raport Siswa Pada SD Negeri 060891 Jamin Ginting Berbasis Website” ini yaitu sublime text 2 dan xampp.
    <br><br>
      <li role="presentation"><a style="color: #fff;background-color: rebeccapurple;" href="">Pengumuman Lomba 17 Agustus</a></li>
      <li role="presentation"><a style="color: #fff;background-color: rebeccapurple;" href="">Pentas Seni Akan Segera Dimulai</a></li>
    </ul>
    <br/>
    <div class="list-group">
      <a href="" class="list-group-item active">
      Soal Try Out
      </a>
      <a href="" class="list-group-item">Matematika</a>
      <a href="" class="list-group-item">Bahasa Indonesia</a>
      <a href="" class="list-group-item">Bahasa Inggris</a>
      <a href="" class="list-group-item">Seni Lukis</a>
    </div>
  </div> 
</div>
</div><div id="footer">
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