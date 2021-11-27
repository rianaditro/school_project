<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>171240000669</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="bootstrap/css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();
    });
    </script>
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="home.php?act=tampil_pgw&d=all">Aplikasi Kepegawaian PT Kitasuka</a>
          </div>
        <ul class="nav navbar-nav navbar-right">
          <li>
            <form class="form-inline my-2 my-lg-0" action="#" method=GET>
              <input class="form-control mr-sm-2" type="search" placeholder="Cari lewat nama" name="keyword">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">
                <span class="glyphicon glyphicon-search"></span>
              </button>
            </form>
          </li>
          <li>
            <a href="index.php">Log Out</a>
          </li>
        </ul>
        </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <?php
              $dd=$_GET['d'];
              if(isset($dd)){
                if($dd=='keu'){
                  $all="";
                  $pro="";
                  $pem="";
                  $keu="class='active'";
                  $kep="";
                  $adm="";
                }else if($dd=='pro'){
                  $all="";
                  $pro="class='active'";
                  $pem="";
                  $keu="";
                  $kep="";
                  $adm="";
                }else if($dd=='pem'){
                  $all="";
                  $pro="";
                  $pem="class='active'";
                  $keu="";
                  $kep="";
                  $adm="";
                }else if($dd=='adm'){
                  $all="";
                  $pro="";
                  $pem="";
                  $keu="";
                  $kep="";
                  $adm="class='active'";
                }else if($dd=='kep'){
                    $all="";
                    $pro="";
                    $pem="";
                    $keu="";
                    $kep="class='active'";
                  $adm="";
                }else{
                  $all="class='active'";
                  $pro="";
                  $pem="";
                  $keu="";
                  $kep="";
                  $adm="";
                }
              }
            ?>
            <li <?php echo $all; ?> ><a href="home.php?act=tampil_pgw&d=all&p=1">Data Kepegawaian <span class="sr-only">(current)</span></a></li>
            <li <?php echo $pro; ?> ><a href="home.php?act=tampil_pgw&d=pro&p=1">Divisi Produksi</a></li>
            <li <?php echo $pem; ?> ><a href="home.php?act=tampil_pgw&d=pem&p=1">Divisi Pemasaran</a></li>
            <li <?php echo $keu; ?> ><a href="home.php?act=tampil_pgw&d=keu&p=1">Divisi Keuangan</a></li>
            <li <?php echo $kep; ?> ><a href="home.php?act=tampil_pgw&d=kep&p=1">Divisi Kepegawaian</a></li>
            <li <?php echo $adm; ?> ><a href="home.php?act=tampil_adm&d=adm&p=1">Data Admin</a></li>
          </ul>
          
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <?php
          if(isset($_GET['submit'])){
            $cr=$_GET['keyword'];
            echo "<script>document.location='home.php?act=tampil_pgw&d=$cr'</script>";
          } 
           if(empty($_GET['act'])){
           echo "<script>document.location='home.php?act=tampil_pgw&d=all&p=1'</script>";
           }else{
                $r=$_GET['act'];
                include "konten/$r.php";
            }
          ?>
          
        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery-3.2.1.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
