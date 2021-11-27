<?php
session_start();
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
                        <a href="index.html" class="logo">
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
                        <h2>Dekor</h2>
                        <span class="title-line"><br></span>
                        <p>Temukan dekor favoritmu disini.</p>
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
                 <!-- Sidebar Area Start -->
                 <div class="col-lg-4">
                    <div class="sidebar-content-wrap m-t-50">
                        

                        <!-- Single Sidebar Start -->
                        <div class="single-sidebar">
                            <h3>Pencarian</h3>

                            <div class="sidebar-body">
                            <form action="dekor_query.php" method="post">
                                <!--== Pick Up Date ==-->
                                <div class="pick-up-date book-item">
                                    <h4>Pilih Tanggal Event:</h4>
                                    <input name="startDate" id="startDate" type="date" value="<?php echo $_POST['startDate']; ?>"/>
                                </div>
                                <!--== Car Choose ==-->
                                <div class="choose-car-type book-item">
                                    <h4>Jenis Event:</h4>
                                    <select name="jenis" class="custom-select">
                                      <option>--</option>
                                      <option <?php if($_POST['jenis']=="Pelaminan"){echo "selected";} ?> value="Pelaminan">Pelaminan</option>
                                      <option <?php if($_POST['jenis']=="Lain-lain"){echo "selected";} ?> value="Lain-lain">Lain-lain</option>
                                    </select>
                                </div>
                                <!--== Car Choose ==-->

                                <div class="book-button text-center">
                                    <button type="submit" class="book-now-btn">Cari Dekor</button>
                                </div>
                            </form>
                            </div>
                        </div>
                        <!-- Single Sidebar End -->
                        <!-- Single Sidebar Start -->
                        <div class="single-sidebar">
                            <h3>Informasi Lebih Lanjut</h3>

                            <div class="sidebar-body">
                                <p><i class="fa fa-mobile"></i> +6285330794639</p>
                                <p><i class="fa fa-clock-o"></i> Senin - Jumat 09.00 - 15.00</p>
                            </div>
                        </div>
                        <!-- Single Sidebar End -->

                        <!-- Single Sidebar Start -->
                        <div class="single-sidebar">
                            <h3>Connect with Us</h3>

                            <div class="sidebar-body">
                                <div class="social-icons text-center">
                                    <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-behance"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-dribbble"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Sidebar End -->
                    </div>
                </div>
                <!-- Sidebar Area End -->
                <!-- Car List Content Start -->
                <div class="col-lg-8">
                    <div class="car-list-content">
                        <?php
                        $tgl_event=$_POST['startDate'];
                        $jenis=$_POST['jenis'];
                        include 'backdekor/conf/koneksi.php';
                        
                        $q=("SELECT * FROM dekor WHERE Status='Available' AND Jenis='".$jenis."' ");
                        $r=mysqli_query($k,$q);
                        while ($row=mysqli_fetch_array($r)){
                            
                        ?>
                        <!-- Single Car Start -->
                        <div class="single-car-wrap">
                            <div class="row">
                                <!-- Single Car Thumbnail -->
                                <div class="col-lg-5">
                                    <div class="car-list-thumb">
                                    <img src="file/<?php echo $row['Foto']; ?>" >
                                </div>
                                </div>
                                <!-- Single Car Thumbnail -->

                                <!-- Single Car Info -->
                                <div class="col-lg-7">
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <div class="car-list-info">
                                                <h2><a href="#"><?php echo $row['Nama_dekor']; ?></a></h2>
                                                <h5><?php $rp="Rp ".number_format($row['Harga'],2,',','.'); echo $rp; ?></h5>
                                                <p><?php echo $row['Deskripsi']; ?></p>
                                                <ul class="car-info-list">
                                                    <li><?php echo $row['Jenis']; ?></li>
                                                </ul>
                                                <p class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star unmark"></i>
                                                </p>
                                                <a href="buat_pesanan.php?dekor=<?php echo $row['Id_dekor']; ?>&tgl=<?php echo $tgl_event; ?>" class="rent-btn">Pesan Sekarang</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Car info -->
                            </div>
                        </div>
                        <!-- Single Car End -->
                        <?php } ?>
                        
                    </div>

                    <!-- Page Pagination Start -->
                    <div class="page-pagi">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Page Pagination End -->
                </div>
                <!-- Car List Content End -->

               
            </div>
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