<?php
 $file = $_REQUEST['file'];

 header("Content-Disposition: attachment; filename=".basename($file));
 header("Content-Type: application/octet-stream;");
  //header("Content-Transfer-Encoding: binary");
 readfile("img/".$file);
?>