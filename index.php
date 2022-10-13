<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Cek Dokumen Badan Pertanahan Kab Madiun</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-space-dynamic.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <!--
    
TemplateMo 562 Space Dynamic

https://templatemo.com/tm-562-space-dynamic

-->
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <a href="index.php" class="logo">
                            <h4>Badan Pertanahan<span> Kabupaten Madiun</span></h4>
                            <img src="Logo_BPN-KemenATR_(2017).png" style="width:80px;height:80px;">
                        </a>

                        <ul class="nav">
                            <!-- <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="#about">About Us</a></li>
              <li class="scroll-to-section"><a href="#services">Services</a></li>
              <li class="scroll-to-section"><a href="#portfolio">Portfolio</a></li>
              <li class="scroll-to-section"><a href="#blog">Blog</a></li> 
              <li class="scroll-to-section"><a href="#contact">Message Us</a></li>  -->
                            <li class="scroll-to-section">
                                <div class="main-red-button"><a href="#contact">Kontak Kami</a></div>
                            </li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>

                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <?php

                        if (isset($_GET['no_dokumen'])) {
                            // id index exists
                            $queryxx = mysqli_query($kon, "select * from surat_dokumen where no_surat_dokumen='".$_GET['no_dokumen']."'");
                            $data = mysqli_fetch_array($queryxx);
                            if (mysqli_num_rows($queryxx) > 0){
                            echo "
                            <div class='col-lg-8 align-self-center'>
                            <div class='left-content header-text wow fadeInLeft' data-wow-duration='1s' data-wow-delay='1s'>

                            <h2> <em>Hasil</em <span></span> Pencarian Anda ".$data['no_surat_dokumen']."</h2>
                            <h4> <em>Nama</em <span></span> Pemilik : <strong>".$data['nama_pemilik']."<strong></h4>
<hr>
                            
                            ";
                            $queryxxx = mysqli_query($kon, "select * from  file_surat_dokumen where id_surat_dokumen='".$data['id_surat_dokumen']."'");
                            $no="1";
                            while ($datax = mysqli_fetch_array($queryxxx)) {
                            echo"
                            FILE : 
                            <h4><span></span>Silahkan Klik
                            <a href='admin/assets/file_surat_dokumen/".$datax['nm_file_surat_dokumen']."' onclick='window.open(this.href,&quot;popupwindow&quot;,&quot;status=0, height=500, width=650, scrollbars=yes, resizable=0, top=0, left=0&quot;); return false;' target='_blank'>File ".$no.".</a>
                            </h4>
                            ";
                            }

                            echo"
                            
                            </div>
                            </div>
                            ";
                        }else{
                            echo"data tidak ditemukan";
                        }
                        } else {
                        ?>
                            <div class="col-lg-6 align-self-center">
                                <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                                    <h6>Selamat Datang Di Cek Sertifikat Tanah Online</h6>
                                    <h2>Cek <em>Dokumen</em <span> Anda</span> Disini</h2>
                                    <p>Sertifikat Hak Milik, Perusahaan, Wakaf</p>
                                    <form id="search" action="#" method="GET">
                                        <fieldset>
                                            <input type="address" name="no_dokumen" class="email" placeholder="Isikan Nomor Surat ..." autocomplete="on" required>
                                        </fieldset>
                                        <fieldset>
                                            <button type="submit" class="main-button">Cari</button>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        
                        <div class="col-lg-6">
                            <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                <img src="assets/images/banner-right-image.png" alt="team meeting">
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div id="contact" class="contact-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.25s">
                    <div class="section-heading">
                        <h2>Jl. Raya Ponorogo - Madiun No.17, Pandean, Kec. Taman</h2>
                        <p>Kota Madiun, Jawa Timur 63129</p>
                        <div class="phone-info">
                            <h4>Kontak Kami: <span><i class="fa fa-phone"></i> <a href="#">(0351) 464303</a></span></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.25s">

                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.25s">
                    <p>© Copyright 2022 Badan Pertanahan Kab Madiun. All Rights Reserved.

                        <!-- <br>Design: <a rel="nofollow" href="https://templatemo.com"></a></p> -->
                </div>
            </div>
        </div>
    </footer>
    <!-- Scripts -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/animation.js"></script>
    <script src="assets/js/imagesloaded.js"></script>
    <script src="assets/js/templatemo-custom.js"></script>

</body>

</html>