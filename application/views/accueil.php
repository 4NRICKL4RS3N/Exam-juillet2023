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

  <link href="<?php echo base_url() ?>assets/css/page.css" rel="stylesheet">

</head>

<body>

  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Regime</a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Mon portefeuille</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
            </ul>
          </li>
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

    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Pourquoi choisir Regime?</h3>
              <p>
                Notre site offre une solution complète et pratique pour les personnes cherchant à adopter un mode de vie sain et à atteindre leurs objectifs de perte ou de maintien de poids. 
                En choisissant notre plateforme, vous bénéficiez d'une expérience unique et personnalisée qui vous guide tout au long de votre parcours de régime.</p>
              <div class="text-center">
                <a href="#" class="more-btn">En apprendre plus <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">          
            <form action="<?php echo base_url('suggestion/suggerer') ?>" method="post">
            <div class="row">
              <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <h1>Mon objectif</h1>
                    <select name="type" id="objectif">
                      <option value="gain">Augmenter mon poids</option>
                      <option value="perte">Réduire mon poids</option>
                    </select>
                  </div>
                </div>
              </div>
          </div>
        </div>

      </div>
    </section>

    <section id="appointment" class="appointment section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Completez le formulaire</h2>
        </div>

          <div class="row">
            <div class="col-md-4 form-group">
              <input type="text" name="age" class="form-control" id="age" placeholder="Votre age" data-rule="minlen:4" data-msg="S'il vous plait entrez une age valide">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="number" class="form-control" name="poids" id="poids" placeholder="Votre poids actuel" data-rule="taille" data-msg="S'il vous plait entrez un poids valide">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="number" class="form-control" name="newPoids" id="poids" placeholder="Votre nouveau poids" data-rule="poids">
              <div class="validate"></div>
            </div>
            <label for="poids">
              <div class="col-md-4 form-group mt-3 mt-md-0"></div>
              <div class="validate"></div>
            </label>
          </div>
          <div class="text-center">
            <input type="submit" value="Valider" class="btn btn-primary">
          </div>
        </form>

      </div>
    </section>

    <section id="contact" class="contact" style="height: 200px;">
      
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