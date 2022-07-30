<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Detail Donasi - Masjid Abu Dzar Al-Ghifari Malang</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url('assets/user/img/lg-masjid.png'); ?>" rel="icon">
  <link href="<?php echo base_url('assets/user/img/lg-masjid.png'); ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('assets/user/vendor/aos/aos.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/user/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/user/vendor/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/user/vendor/glightbox/css/glightbox.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/user/vendor/swiper/swiper-bundle.min.css'); ?>" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css">
  <?php $this->load->view('layout/css'); ?>

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('assets/user/css/style.css'); ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: eStartup - v4.8.0
  * Template URL: https://bootstrapmade.com/estartup-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container-md d-flex align-items-center justify-content-between">

      <div id="logo">
        <!-- <h1><a href="index.html"><span>al-</span>Ghifari</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.html"><img src="<?php echo base_url('assets/user/img/logo-m.png'); ?>" width="150" height="81" class="d-inline-block align-text-top"/></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="<?php echo base_url('/'); ?>">Home</a></li>
          <li><a class="nav-link scrollto" href="#about-us">Profil</a></li>
          <!-- <li><a class="nav-link scrollto" href="#features">Features</a></li>
          <li><a class="nav-link scrollto" href="#screenshots">Screenshots</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li> -->
          <li class="dropdown"><a href="#"><span>Kegiatan</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              
              <!-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li> -->
              <li><a href="#">Pesantren Mahasiswa</a></li>
              <li><a href="#">Kajian</a></li>
              <li><a href="#">Gerakan Free Ifthar</a></li>
              <li><a href="#">Sosial</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="<?php echo base_url('/donasi/donasi'); ?>">Donasi</a></li>
          <li><a class="nav-link scrollto" href="<?php echo base_url('/feedback/register'); ?>">Feedback</a></li>
          <li><a class="nav-link scrollto" href="#contact">Hubungi Kami</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <hr>
    <!-- ======= Blog Section ======= -->
    <section id="blog" class="padd-section">
        <div class="container-fluid">
            <?php
                foreach($donasi as $row) {
            ?>
            <div class="col-md-12 text-center mt-inner">
            <h1 class="elip font-bold" style="margin-bottom: 30px"><?php echo $row->nama_donasi; ?></h1>
            
            <div class="col-md-6" style="padding: 50px">
            
            <div class="row">
            <div class="col-md-11 text-left">
            <img src="<?php echo base_url('assets/'.$row->img1); ?>" height="80%" width="110%"/>
            <img src="<?php echo base_url('assets/'.$row->img2); ?>" height="80%" width="110%"/>
            <img src="<?php echo base_url('assets/'.$row->img3); ?>" height="80%" width="110%"/>
            <img src="<?php echo base_url('assets/'.$row->img4); ?>" height="80%" width="110%"/>
            <img src="<?php echo base_url('assets/'.$row->img5); ?>" height="80%" width="110%"/>
            </div>
            </div>
            </div>
        
            <div class="thumbnail col-md-6">
            <!-- <h3 class="eclip text-left mt-inner" >Kategori : <?php echo $row->kategori_donasi; ?></h3> -->
            <h3 class="eclip text-left mt-inner" >Tercapai &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <b><?php echo 'Rp '.nominal($row->perolehan_donasi); ?></b></h3>
            <h3 class="eclip text-left mt-inner" >Target   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <?php echo 'Rp '.nominal($row->target_donasi); ?></h3>
            <h3 class="eclip text-left mt-inner" >Berakhir Tgl &nbsp: <?php echo tgl_indo($row->masa_donasi); ?></h3>
            <h3 class="eclip text-left mt-inner" >Sisa Hari &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <?php echo $row->masa_aktif; ?> Hari</h3>
            <a href="<?php echo base_url('/Donatur/register/'.$row->id_donasi); ?>" class="btn btn-success btn-lg btn-block" role="button">Donasi Sekarang</a>
            </div>
            <h4 class="eclip text-left mt-inner"><?php echo $row->deskripsi_donasi; ?></h4>
            <?php } ?>
        </div>
        </div>
    </div>
    </section><!-- End Blog Section -->
    <br>
    <br>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer class="footer">
    <div class="container">
      <div class="row">

        <div class="col-md-12 col-lg-4">
          <div class="footer-logo">

            <a class="navbar-brand" href="#">eStartup</a>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p>

          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>Abou Us</h4>

            <ul class="list-unstyled">
              <li><a href="#">About us</a></li>
              <li><a href="#">Features item</a></li>
              <li><a href="#">Live streaming</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>

          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>Abou Us</h4>

            <ul class="list-unstyled">
              <li><a href="#">About us</a></li>
              <li><a href="#">Features item</a></li>
              <li><a href="#">Live streaming</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>

          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>Support</h4>

            <ul class="list-unstyled">
              <li><a href="#">faq</a></li>
              <li><a href="#">Editor help</a></li>
              <li><a href="#">Contact us</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>

          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>Abou Us</h4>

            <ul class="list-unstyled">
              <li><a href="#">About us</a></li>
              <li><a href="#">Features item</a></li>
              <li><a href="#">Live streaming</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>

          </div>
        </div>

      </div>
    </div>

    <div class="copyrights">
      <div class="container">
        <p>&copy; Copyrights 2022. Masjid Abu Dzar Al-Ghifari | Malang.</p>
        <!-- <div class="credits"> -->
          <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eStartup
        -->
          <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div> -->
      </div>
    </div>

  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url('assets/user/vendor/aos/aos.js'); ?>"></script>
  <script src="<?php echo base_url('assets/user/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/user/vendor/glightbox/js/glightbox.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/user/vendor/swiper/swiper-bundle.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/user/vendor/php-email-form/validate.js'); ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url('assets/user/js/main.js'); ?>"></script>

  <?php $this->load->view('layout/js'); ?>

</body>

</html>