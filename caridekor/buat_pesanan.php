<?php
session_start();
include "backdekor/conf/koneksi.php";
if($_SESSION['username']==""){
    header("location: login.php");
}
if(isset($_GET['dekor'])){
    $idDekor=$_GET['dekor'];
    $tgl=$_GET['tgl'];

$q="SELECT * FROM dekor JOIN vendor ON dekor.Id_vendor=vendor.Id_vendor WHERE dekor.Id_vendor='".$idDekor."'";
$r=mysqli_query($k,$q);
$row=mysqli_fetch_array($r);}
?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="web-icon.ico" type="image/x-icon" />

    <title>Caridekor | Cari Dekorasi Acaramu!</title>

    <!--=== Bootstrap CSS ===-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!--=== Slicknav CSS ===-->
    <link href="assets/css/plugins/slicknav.min.css" rel="stylesheet">
    <!--=== Magnific Popup CSS ===-->
    <link href="assets/css/plugins/magnific-popup.css" rel="stylesheet">
    <!--=== Owl Carousel CSS ===-->
    <link href="assets/css/plugins/owl.carousel.min.css" rel="stylesheet">
    <!--=== Gijgo CSS ===-->
    <link href="assets/css/plugins/gijgo.css" rel="stylesheet">
    <!--=== FontAwesome CSS ===-->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!--=== Theme Reset CSS ===-->
    <link href="assets/css/reset.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="style.css" rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="assets/css/responsive.css" rel="stylesheet">


    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="loader-active">

    
    <!--== Header Area Start ==-->
    <header id="header-area" class="fixed-top">
       

        <!--== Header Bottom Start ==-->
        <div id="header-bottom">
            <div class="container">
                <div class="row">
                    <!--== Logo Start ==-->
                    <div class="col-lg-4">
                        <a href="index.php" class="logo">
                            <img src="logo2.png" alt="JSOFT">
                        </a>
                    </div>
                    <!--== Logo End ==-->

                    <!--== Main Menu Start ==-->
                    <div class="col-lg-8 d-none d-xl-block">
                        <nav class="mainmenu alignright">
                            <ul>
                                <li><a href="index.php">Home</a>
                                </li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <?php

                                if(isset($_SESSION['username'])){
                                    $user=$_SESSION['username'];
                                    echo "<li class='active'><a href=#>Hai, $user</li>";
                                    echo "<li><a href='logout.php'>Logout</a></li>";
                                }else{
                                    echo "<li><a href='login.php'>Log In</a></li>";
                                    echo "<li><a href='register.php'>Sign Up</a></li>";
                                }
                                ?>
                            </ul>
                        </nav>
                    </div>
                    <!--== Main Menu End ==-->
                </div>
            </div>
        </div>
        <!--== Header Bottom End ==-->
    </header>
    <!--== Header Area End ==-->
    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Buat Pesanan</h2>
                        <span class="title-line"><br></i></span>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Car List Area Start ==-->
    <section id="car-list-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Car List Content Start -->
                <div class="col-lg-8">
                    <div class="car-details-content">
                        <h2><?php echo $row['Nama_dekor']; ?> <span class="price">Tarif : <b><?php $rp="Rp ".number_format($row['Harga'],2,',','.'); echo $rp; ?></b></span></h2>
                        <div>
                            <div class="single-car-preview">
                                <img src="file/<?php echo $row['Foto']; ?>" alt="gambar rusak">
                            </div>
                            
                        </div>
                        <div class="car-details-info">
                            <h4>Detail</h4>
                            <p><?php echo $row['Deskripsi']; ?></p>
                            <br>
                            <h4>Informasi Kontak</h4>
                            <p>Nama Pemilik Dekor : <b><?php echo $row['Nama']; ?></b></p>
                            <p>Alamat Dekor : <b><?php echo $row['Alamat']; ?></b></p>
                            <p>Nomor Handphone : <b><?php echo $row['No_Hp']; ?></b></p>

                            <div class="review-area">
                                <h3>Detail Pesanan</h3>
                                <div class="review-form">
                                    <form action="proses_pesanan.php" method="post">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="name-input">
                                                    <label>Tanggal Event</label>
                                                    <input type="date" name="tgl" value="<?php echo $tgl; ?>">
                                                </div>
                                                <input type="hidden" name="biaya" value="<?php echo $row['Harga']; ?>">
                                                <input type="hidden" name="Id_dekor" value="<?php echo $row['Id_dekor']; ?>">
                                                <input type="hidden" name="Id_user" value="<?php echo $_SESSION['user_id']; ?>">
                                                <input type="hidden" name="jenis" value="<?php echo $row['Jenis']; ?>">
                                            </div>
                                        </div>

                                        <div class="message-input">
                                            <textarea name="lokasi" cols="15" rows="5" placeholder="Alamat Event"></textarea>
                                        </div>

                                        <div class="input-submit">
                                            <button name="submit" type="submit">Submit</button>
                                            <button type="reset">Clear</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Car List Content End -->
        </div>
    </section>
    <!--== Car List Area End ==-->
<!--== Footer Area Start ==-->
<section id="footer-area">
        <!-- Footer Widget Start -->
        <div class="footer-widget-area">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>About Us</h2>
                            <div class="widget-body">
                                <img src="logo2.png" alt="JSOFT">
                                <p>caridekor.com adalah situs penghubung jasa dekorasi dengan pelanggan.</p>

                                <div class="newsletter-area">
                                    <form action="index.html">
                                        <input type="email" placeholder="Subscribe Our Newsletter">
                                        <button type="submit" class="newsletter-btn"><i class="fa fa-send"></i></button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->
                  
                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>Contact US</h2>
                            <div class="widget-body">
                                <ul class="get-touch">
                                    <li><i class="fa fa-map-marker"></i> Fakultas Sains dan Teknologi, Unisnu Jepara</li>
                                    <li><i class="fa fa-mobile"></i> +62 853 307 946 39</li>
                                    <li><i class="fa fa-envelope"></i> combecombeku@unisnu.ac.id</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->
                </div>
            </div>
        </div>
        <!-- Footer Widget End -->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> | Edited by Combe Combe Club
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </section>
    <!--== Footer Area End ==-->
    <!--=======================Javascript============================-->
    <!--=== Jquery Min Js ===-->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <!--=== Jquery Migrate Min Js ===-->
    <script src="assets/js/jquery-migrate.min.js"></script>
    <!--=== Popper Min Js ===-->
    <script src="assets/js/popper.min.js"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--=== Gijgo Min Js ===-->
    <script src="assets/js/plugins/gijgo.js"></script>
    <!--=== Vegas Min Js ===-->
    <script src="assets/js/plugins/vegas.min.js"></script>
    <!--=== Isotope Min Js ===-->
    <script src="assets/js/plugins/isotope.min.js"></script>
    <!--=== Owl Caousel Min Js ===-->
    <script src="assets/js/plugins/owl.carousel.min.js"></script>
    <!--=== Waypoint Min Js ===-->
    <script src="assets/js/plugins/waypoints.min.js"></script>
    <!--=== CounTotop Min Js ===-->
    <script src="assets/js/plugins/counterup.min.js"></script>
    <!--=== YtPlayer Min Js ===-->
    <script src="assets/js/plugins/mb.YTPlayer.js"></script>
    <!--=== Magnific Popup Min Js ===-->
    <script src="assets/js/plugins/magnific-popup.min.js"></script>
    <!--=== Slicknav Min Js ===-->
    <script src="assets/js/plugins/slicknav.min.js"></script>

    <!--=== Mian Js ===-->
    <script src="assets/js/main.js"></script>

</body>

</html>