<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Cotisse</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/page.css" rel="stylesheet">

</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
<div class="container">
    <div class="header-container d-flex align-items-center justify-content-between">
    <div class="logo">
        <h1 class="text-light"><a href="index.html"><span>J'aime</span></a></h1>
    </div>

    <nav id="navbar" class="navbar">
        <ul>
        <li><a class="nav-link scrollto active" href="#acceuil">Acceuil</a></li>
        <li><a class="nav-link scrollto" href="#voyage">Voyage</a></li>
        <li><a class="nav-link scrollto" href="#information">Informations</a></li>
        <li><a class="nav-link scrollto " href="#aide">Aide</a></li>
        <li class="dropdown"><a href="#"><span>Langue</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
            <li class="dropdown"><a href="#"><span>Francais</span></a></li>
            <li class="dropdown"><a href="#"><span>Anglais</span></a></li>
            <li class="dropdown"><a href="#"><span>Malagasy</span></a></li>
            </ul>
        </li>
        <li><a class="getstarted scrollto" href="#connecter">Se connecter</a></li>
        </ul>
    </nav>
    </div>
</div> 
</header>

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
    <h1>Bienvenu sur i-Zotra</h1>
    </div>
</section><!-- End Hero -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container">
    <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
        <div class="section-title">
            <h2>Itinéraire</h2>
        </div>
        </div>

        <form action="#" method="post" role="form" class="php-email-form mt-4">
            <div class="row">
            <div class="form-group">
                <label for="depart">Départ :</label>
                    <div class="depart">
                        <select name="depart" class="depart" required>
                            <option value="1">#</option>
                        </select>
                    </div>
            </div>
        
            <div class="form-group">
                <label for="arrivee">Arrivée :</label>
                    <div class="arrivee">
                        <select name="arrivee" class="arrivee" required>
                            <option value="1">#</option>
                        </select>
                    </div>
            </div>
        
            <div class="form-group">
                <label for="date">Date :</label>
                <input type="date" id="date" name="date" required>
                </div>
            </div>

            <div class="form-group">
                <label for="voyageurs">Voyageurs :</label>
                <input type="number" id="voyageurs" name="voyageurs" required>
                </div>
            </div>
            
            <div class="text-center"><button type="submit">Réserver</button></div>
        </form>
        </div>
    </div>
    </div>
</section>

</main>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<script src="assets/js/main.js"></script>

</body>

</html>