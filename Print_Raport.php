<!DOCTYPE html>
<html>
<head>
  <title>Print Raport</title>
  <style type="text/css">
    input{
      border: 0;
    }
  </style>
</head>
<body>
<link href="assets/css/style_doc.css" rel="stylesheet" type="text/css">

  <?php 
 
  // FUNGSI TERBILANG OLEH : MALASNGODING.COM
  // WEBSITE : WWW.MALASNGODING.COM
  // AUTHOR : https://www.malasngoding.com/author/admin
 
 
  function penyebut($nilai) {
    $nilai = abs($nilai);
    $huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
    $temp = "";
    if ($nilai < 12) {
      $temp = " ". $huruf[$nilai];
    } else if ($nilai <20) {
      $temp = penyebut($nilai - 10). " belas";
    } else if ($nilai < 100) {
      $temp = penyebut($nilai/10)." puluh". penyebut($nilai % 10);
    } else if ($nilai < 200) {
      $temp = " seratus" . penyebut($nilai - 100);
    } else if ($nilai < 1000) {
      $temp = penyebut($nilai/100) . " ratus" . penyebut($nilai % 100);
    } else if ($nilai < 2000) {
      $temp = " seribu" . penyebut($nilai - 1000);
    } else if ($nilai < 1000000) {
      $temp = penyebut($nilai/1000) . " ribu" . penyebut($nilai % 1000);
    } else if ($nilai < 1000000000) {
      $temp = penyebut($nilai/1000000) . " juta" . penyebut($nilai % 1000000);
    } else if ($nilai < 1000000000000) {
      $temp = penyebut($nilai/1000000000) . " milyar" . penyebut(fmod($nilai,1000000000));
    } else if ($nilai < 1000000000000000) {
      $temp = penyebut($nilai/1000000000000) . " trilyun" . penyebut(fmod($nilai,1000000000000));
    }     
    return $temp;
  }
 
  function terbilang($nilai) {
    if($nilai<0) {
      $hasil = "minus ". trim(penyebut($nilai));
    } else {
      $hasil = trim(penyebut($nilai));
    }         
    return $hasil;
  }
 
 function ter($nilai){

if ($nilai=='I') {
  $nilai="Satu";
}
elseif ($nilai=='II') {
  $nilai="Dua";
}
elseif ($nilai=='III') {
  $nilai="Tiga";
}
elseif ($nilai=='IV') {
  $nilai="empat";
}
elseif ($nilai=='V') {
  $nilai="lima";
}
elseif ($nilai=='VI') {
  $nilai="enam";
}
return $nilai;
 }
  ?>




<table width="807" border="0">
<?php 
  include "conn.php";
  $id=$_GET['id'];
  $semester=$_GET['semester'];
   $kelas=$_GET['kelas'];
$data_siswa=mysql_fetch_array(mysql_query("SELECT * from data_siswa where id_siswa='$id'"));

$nama=$data_siswa['nama_siswa'];
$nis=$data_siswa['nis'];


$culik_guru=mysql_fetch_array(mysql_query("SELECT * from `tbl_nilai` INNER JOIN `data_siswa` ON tbl_nilai.id_siswa=data_siswa.id_siswa INNER JOIN `tbl_jadwal` ON tbl_nilai.id_pelajaran=tbl_jadwal.id_pelajaran INNER JOIN `data_guru` ON tbl_jadwal.id_guru=data_guru.id_guru where data_siswa.id_siswa=$id and tbl_nilai.id_pelajaran='16' and tbl_nilai.id_kelas='$kelas'"));

   ?>
  <tbody><tr>
    <td width="179">Nama Sekolah</td>
    <td width="8">:</td>
    <td width="305">SD Negri No.060891</td>
    <td width="103">Kelas </td>
    <td width="14">:</td>
    <td width="158"><?php echo  $kelas;?> / <?php echo ter($kelas); ?></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td>:</td>
    <td>Jl. Jamin Ginting No.303</td>
    <td>Semester</td>
    <td>:</td>
    <td><?php echo $semester; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>:</td>
    <td>................................................................</td>
    <td>Tahun Pelajaran</td>
    <td>:</td>
    <td><?php
        $tgl=date('Y');
        echo $tgl;
        echo "/";
        echo $tgl+1;
        ?>  
 </td>
  </tr>
  <?php 
  include "conn.php";
  $id=$_GET['id'];
$data_siswa=mysql_fetch_array(mysql_query("SELECT * from data_siswa where id_siswa='$id'"));
$nama=$data_siswa['nama_siswa'];
$nis=$data_siswa['nis'];
   ?>
  <tr>
    <td>Nama Siswa/ Nomor Induk</td>
    <td>:</td>
    <td colspan="4"><?php echo $nama; ?> / <?php echo $nis; ?></td>
  </tr>
</tbody></table>
<?php  
$pendidikan_agama=mysql_fetch_array(mysql_query("SELECT * from tbl_nilai where id_siswa='$id' and id_semester=$semester and id_pelajaran='14' and id_kelas='$kelas'"));
$pendidikan_kewarganegaraan=mysql_fetch_array(mysql_query("SELECT * from tbl_nilai where id_siswa='$id' and id_semester=$semester and id_pelajaran='15' and id_kelas='$kelas'"));
$Bahasa_indonesia=mysql_fetch_array(mysql_query("SELECT * from tbl_nilai where id_siswa='$id' and id_semester=$semester and id_pelajaran='16' and id_kelas='$kelas'"));
$Matematika=mysql_fetch_array(mysql_query("SELECT * from tbl_nilai where id_siswa='$id' and id_semester=$semester and id_pelajaran='3' and id_kelas='$kelas'"));
$Ilmu_pengetahuan_alam=mysql_fetch_array(mysql_query("SELECT * from tbl_nilai where id_siswa='$id' and id_semester=$semester and id_pelajaran='17' and id_kelas='$kelas'"));
$Bahasa_indonesia=mysql_fetch_array(mysql_query("SELECT * from tbl_nilai where id_siswa='$id' and id_semester=$semester and id_pelajaran='16' and id_kelas='$kelas'"));
$ips=mysql_fetch_array(mysql_query("SELECT * from tbl_nilai where id_siswa='$id' and id_semester=$semester and id_pelajaran='18' and id_kelas='$kelas'"));
$sbd=mysql_fetch_array(mysql_query("SELECT * from tbl_nilai where id_siswa='$id' and id_semester=$semester and id_pelajaran='19' and id_kelas='$kelas'"));
$penjas=mysql_fetch_array(mysql_query("SELECT * from tbl_nilai where id_siswa='$id' and id_semester=$semester and id_pelajaran='20' and id_kelas='$kelas'"));
$Bahasa_iggris=mysql_fetch_array(mysql_query("SELECT * from tbl_nilai where id_siswa='$id' and id_semester=$semester and id_pelajaran='21' and id_kelas='$kelas'"));
?>
<p></p>

<table width="807" border="1">
  <tbody><tr>
    <th rowspan="2" scope="col" width="32">No</th>
    <th rowspan="2" scope="col" width="354">Mata Pelajaran</th>
    <th rowspan="2" scope="col" width="54">KKM</th>
    <th colspan="2" scope="col" height="39">Nilai</th>
   
  </tr>
  <tr>
    <td width="89" align="center" height="23">Angka</td>
    <td width="90" align="center">Huruf</td>
    
  </tr>
       <tr>
        <td align="center">1</td>
        <td>Pendidikan Agama</td>
        <td align="center">70</td>
        <td align="center"><?php echo $pendidikan_agama['nilai']; ?></td>
     <td align="center"><?php echo terbilang($pendidikan_agama['nilai']); ?></td>
    
      </tr>
         <tr>
        <td align="center">2</td>
        <td>Pendidikan Kewarganegaraan</td>
        <td align="center">62</td>
        <td align="center"><?php echo $pendidikan_kewarganegaraan['nilai']; ?></td>
      <td align="center"><?php echo terbilang($pendidikan_kewarganegaraan['nilai']); ?></td>
    
      </tr>
         <tr>
        <td align="center">3</td>
        <td>Bahasa Indonesia</td>
        <td align="center">63</td>
        <td align="center"><?php echo $Bahasa_indonesia['nilai']; ?></td>
         <td align="center"><?php echo terbilang($Bahasa_indonesia['nilai']); ?></td>
  
    
      </tr>
         <tr>
        <td align="center">4</td>
        <td>Matematika</td>
        <td align="center">64</td>
        <td align="center"><?php echo $Matematika['nilai']; ?></td>
         <td align="center"><?php echo terbilang($Matematika['nilai']); ?></td>

    
      </tr>
         <tr>
        <td align="center">5</td>
        <td>Ilmu Pengetahuan Alam</td>
        <td align="center">61</td>
        <td align="center"><?php echo $Ilmu_pengetahuan_alam['nilai']; ?></td>
     <td align="center"><?php echo terbilang($Ilmu_pengetahuan_alam['nilai']); ?></td>
    
      </tr>
        <tr>
        <td align="center">6</td>
        <td>Ilmu Pengetahuan Sosial</td>
        <td align="center">60</td>
        <td align="center"><?php echo $ips['nilai']; ?></td>
    
      <td align="center"><?php echo terbilang($ips['nilai']); ?></td>
      </tr>
  <tr>
        <td align="center">7</td>
        <td>Seni Budaya Dan Keterampilan</td>
        <td align="center">68</td>
        <td align="center"><?php echo $sbd['nilai']; ?></td>
     <td align="center"><?php echo terbilang($sbd['nilai']); ?></td>
    
      </tr>
  <tr>
        <td align="center">8</td>
        <td>Pendidika Jasmani, Olahraga Dan Kesehatan</td>
        <td align="center">68</td>
        <td align="center"><?php echo $penjas['nilai']; ?></td>
   <td align="center"><?php echo terbilang($penjas['nilai']); ?></td>
    
      </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
     <td>&nbsp;</td>
    
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td>Muatan Lokal (Sejumlah mata pelajaran)</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
     <td>&nbsp;</td>
    
  </tr>
  <tr>
    <td rowspan="3">&nbsp;</td>
    <td>a Bahasa Inggris </td>
     <td align="center">68</td>
        <td align="center"><?php echo $Bahasa_iggris['nilai']; ?></td>
    
 <td align="center"><?php echo terbilang($Bahasa_iggris['nilai']); ?></td>  </tr>
  <tr>
    <td>b <input value="........................................................................" style="width: 90%" type="text" name="b"></td>
    <td><input style="width: 100%;text-align: center;" type="text" name="c"></td>
  <td><input style="width: 100%;text-align: center;" type="text" name="c"></td>
      <td><input style="width: 100%;text-align: center;" type="text" name="c"></td>
    
  </tr>
  <tr>
    <td>c <input value="........................................................................" style="width: 90%" type="text" name="c"></td>
    <td><input style="width: 100%;text-align: center;" type="text" name="c"></td>
     <td><input style="width: 100%;text-align: center;" type="text" name="c"></td>
 <td><input style="width: 100%;text-align: center;" type="text" name="c"></td>    
  </tr>
  

</tbody></table>

<?php 
   
 $guru=mysql_fetch_array(mysql_query("Select * from tbl_sikap where Id_siswa='$id' and Semester='$semester'"));
  ?>
<p></p>
<table width="807" border="1">
  <tbody>
  <tr>
  
    <th colspan="3" scope="col" height="31"> Kepribadian</th>
     <th scope="col" width="95">Nilai</th>
  </tr>
  <tr>
    <td colspan="2" rowspan="3">&nbsp;&nbsp;Kepribadian</td>
    <td>&nbsp;&nbsp;1. Kelakuan</td>
    <td style="text-align: center;"><?php echo $guru['Kelakuan']; ?></td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;2. Kerajinan</td>
     <td style="text-align: center;"><?php echo $guru['Kerajinan']; ?></td>

  </tr>
  <tr>
    <td>&nbsp;&nbsp;3. Kerapian</td>
      <td style="text-align: center;"><?php echo $guru['Kerapian']; ?></td>

  </tr>
</tbody></table>
<p></p>

<table width="807" border="1">
  <tbody><tr>
    <td rowspan="3" width="130">&nbsp;&nbsp;Ketidakhadiran</td>
    <td colspan="4">&nbsp;&nbsp;1. Sakit 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $guru['Sakit']; ?>&nbsp;  hari</td>
  </tr>
  <tr>
    <td colspan="4">&nbsp;&nbsp;2. Izin 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $guru['Izin']; ?>&nbsp;  hari</td>&nbsp;hari</td>
  </tr>
  <tr>
    <td colspan="4">&nbsp;&nbsp;3. Tanpa Keterangan 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $guru['T_K']; ?>&nbsp;  hari</td>&nbsp;hari</td>
  </tr>
  <tr>
    <td colspan="5" height="49">&nbsp;&nbsp;Catatan untuk diperhatikan Orang Tua / Wali:<br>&nbsp;&nbsp;<?php echo $guru['Catatan']; ?>&nbsp;</td></td>
  </tr>

</tbody></table>


<p></p>



<table width="807" border="0  ">
  <tbody>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td width="103">Tanggal</td>
    <td width="14">:</td>
    <td width="158"><?php $dat=date('d-m-Y'); echo $dat;?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="234" align="center">Mengetahui</td>
    <td width="258">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center">Orang Tua/ Wali,</td>
    <td>&nbsp;</td>
    <td colspan="3" align="center">Guru Kelas</td>
  </tr>
  <tr>
    <td height="68">&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td align="center">(................................................)</td>
    <td>&nbsp;</td>
    <td colspan="3" align="center"><p>(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $culik_guru['nama_guru']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</p></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NIP.&nbsp;<?php echo $culik_guru['nip']; ?></td>
  </tr>
</tbody></table>







</body>
</html>