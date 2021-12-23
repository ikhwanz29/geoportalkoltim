<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Geoportal - <?= $title; ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url(); ?>assets/apple-touch-icon.png" rel="icon">
    <link href="<?= base_url(); ?>assets/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url(); ?>assets/template/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/template/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/template/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/template/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/template/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/template/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/template/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url(); ?>assets/template/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Arsha - v4.7.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">
            <img style="margin-right: 6px;" src="<?= base_url(); ?>assets/Logo Koltim.png" width="65px" height="80px">
            <h1 style="color: white; font-weight: bold;" class="logo me-auto">GEOPORTAL KOLAKA TIMUR</h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a style="font-weight: bold; font-size: 16px;" class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a style="font-weight: bold; font-size: 16px;" class="nav-link scrollto" href="#peta">Kategori Kartografis</a></li>
                    <li><a style="font-weight: bold; font-size: 16px;" class="nav-link scrollto" href="#berita">Berita</a></li>
                    <li><a style="font-weight: bold; font-size: 16px;" class="nav-link scrollto" href="#kontak">Kontak</a></li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero">
            <div class="banner">
                <br><br>
                <div class="banner_overlay">
                    <img src="<?= base_url('assets/KantorBupati.jpg'); ?>" width="100%" height="450px" alt="">
                </div>
                <div class="hero_paragraf">
                    <div class="container">
                        <!-- <p class="hero_paragraf_teks">
                            <b>SELAMAT DATANG</b> di JIGD Kabupaten Kolaka Timur
                        </p> -->
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Hero -->

    <!-- Isi disimpan disini -->
    <?php echo $contents; ?>
    <!-- End isi disimpan disini -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <!-- ======= Kontak Section ======= -->
        <section id="kontak" class="skills">
            <div class="container" data-aos="fade-up">
                <div class="row">

                    <div class="col-lg-5 col-md-6 footer-contact">
                        <h3 style="color: white; font-weight: bold;">TENTANG KAMI</h3>
                        <p style="font-weight: bold; margin-top: 15px; font-size: 16px; color: white;">
                            Geoportal Kolaka Timur</p>
                        <p style="font-size: 16px; color: white;">
                            Merupakan portal Jaringan Informasi Geospasial<br>
                            Daerah (JIGD) Kabupaten Kolaka Timur yang menjadi<br>
                            mitra penghubung simpul Jaringan Informasi<br>
                            Geospasial
                            Nasional (JIGN), dan Jaringan
                            Informasi Geospasial Daerah (JIGD) Provinsi Sulawesi Tenggara,
                            terhubung pada Tahun 2021.
                        </p>
                        <p style="font-size: 16px; color: white;">&copy;2021 Badan Informasi Geospasial All rights reserved.</p>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-contact">
                        <h3 style="color: white; font-weight: bold;">KONTAK KAMI</h3>
                        <p style="margin-top: 15px;  font-size: 16px; color: white;">
                            Kabupaten Kolaka Timur<br>
                            Pemerintah Kabupaten Kolaka Timur,<br>
                            Jl. Poros Kolaka-Kendari Km 51,<br>
                            Desa Lalingato, Kecamatan Tirawuta, Kabupaten Kolaka Timur, 93572,<br>
                            Sulawesi Tenggara, INDONESIA<br><br>
                            Email: diskominfo@kolakatimurkab.go.id<br><br>
                            Telp: 081-1111-2222
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3 style="color: white; font-weight: bold;">DIDUKUNG OLEH</h3>
                        <center><img src="<?= base_url(); ?>assets/Badan Informasi Geospasial.png" width="175px" height="128px">
                            <center>
                                <p style="text-align: left; margin-top: 15px; font-size: 16px; color: white;">
                                    Jalan Raya Jakarta - Bogor KM. 46 Cibinong 16911, INDONESIA<br><br>
                                    Telp: 021-8753155 atau 021-8752062 ext.3608/3611/3103<br><br>
                                    Fax: 021-87908988/87916647<br><br>
                                    Email: info@big.go.id<br><br>
                                    www.big.go.id
                                </p>
                    </div>

                </div>

            </div>
        </section><!-- End Kontak Section -->

    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url(); ?>assets/template/assets/vendor/aos/aos.js"></script>
    <script src="<?= base_url(); ?>assets/template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>assets/template/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url(); ?>assets/template/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url(); ?>assets/template/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url(); ?>assets/template/assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="<?= base_url(); ?>assets/template/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url(); ?>assets/template/assets/js/main.js"></script>

</body>

</html>