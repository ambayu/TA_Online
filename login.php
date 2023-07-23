  <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Login</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
  </head>
  <body>
    <div class="col-md-4 col-md-offset-4 form-login">
    
    <?php
    /* handle error */
    if (isset($_GET['error'])) : ?>
        <div style="position: absolute;bottom: 373px;padding-right: 115px!important;"  class="alert alert-warning alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <strong>Warning!</strong> <?php $error=$_GET['error'];
          echo $error;?>
        </div>
    <?php endif;?>

        <div class="outter-form-login">
        <div class="logo-login">
            <em class="glyphicon glyphicon-user"></em>
            <img src="img/asdas.png" style="width: 61%;margin-top: -9px;">
        </div>
            <form action="proses_login.php" class="inner-login" method="post">
            <h3 class="text-center title-login">Login</h3>
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username">
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div> 
                <div class="form-group">
                 <th>Akses :</th>
                 <td>
             <select name="domain" class="styledselect" >
            	<option value="ADMIN"> ADMIN </option>
                <option value="GURU"> DOSEN </option>
                <option value="SISWA"> MAHASISWA </option>
            </select>
            </td></div>   
            <input type="submit" class="btn btn-block btn-custom-green" value="LOGIN" />
                
                <div class="text-center forget">
                    <p>Forgot Password ?</p>
                </div>
            </form>
        </div>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html> 
