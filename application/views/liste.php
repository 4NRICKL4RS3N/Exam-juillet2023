<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Document</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="<?php echo base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="<?php echo base_url() ?>assets/css/liste.css" rel="stylesheet">

</head>

<body>

  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Regime</a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Liste code</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

      <a href="#" class="appointment-btn scrollto">Se déconnecter</a>

    </div>
  </header>

  <section id="hero" class="d-flex align-items-center">
    <div class="container">
    </div>
  </section>

  <main id="main">

    <section id="doctors" class="doctors">
        <div class="container">
  
          <div class="section-title">
            <h2>Vos régimes</h2>
          </div>
  
        <div class="row">
  
          <?php $i = 1 ?>
          <?php foreach($liste[0] as $plat) { ?>
            <div class="col-lg-6">
              <div class="member d-flex align-items-start">
                <div class="pic"><img src="assets/img/1.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Jour <?php echo $i ?></h4>
                  <p><?php echo $plat['plat'] ?></p>
                </div>
              </div>
            </div>
            <?php $i++ ?>
            <?php } ?>
          </div>
  
        </div>
    </section>

    <section id="departments" class="departments">
        <div class="container">
  
          <div class="section-title">
            <h2>Votre programme sport</h2>
            <p>Que vous cherchiez à perdre du poids, à maintenir un poids santé ou simplement à adopter une alimentation plus équilibrée, 
            vous trouverez des options adaptées à vos préférences et à vos objectifs.</p>
          </div>

          <div class="row">
  
          <?php $i = 1 ?>
          <?php foreach($liste[1] as $sport) { ?>
            <div class="col-lg-6">
              <div class="member d-flex align-items-start">
                <div class="pic"><img src="assets/img/1.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Jour <?php echo $i ?></h4>
                  <p><?php echo $sport['nom'] ?></p>
                </div>
              </div>
            </div>
            <?php $i++ ?>
            <?php } ?>
          </div>
        </div>
    </section>

  </main>

  <footer id="footer">
      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Regime</span></strong>. All Rights Reserved
        </div>
      </div>
    </div>
  </footer>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="<?php echo base_url() ?>assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/php-email-form/validate.js"></script>

  <script src="<?php echo base_url() ?>assets/js/main.js"></script>

</body>

</html>