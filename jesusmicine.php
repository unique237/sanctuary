<?php
 require "forms/queries/display.testimony.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>SFAN</title>
  <meta name="description" content="">
  <meta name="keywords" content="">


  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">


  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">


</head>

<body class="index-page">
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.php" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">SFAN</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>


          <li><a href="jesusmicine.php" class="active">JESUSMICINE</a></li>
          <li><a href="hebdo.php">PROGRAMMES HEBDOMADAIRES</a></li>
          <li><a href="actualites.php">EVÉNEMENTS ET ACTUALITÉS</i></a></li>
          <li><a href="gallerie.php">MÉDIATHÈQUE</a></li>
          <li><a href="eglises.php">EGLISES SFAN</a></li>
          <li><a href="about.php">A PROPOS</a></li>
          <li><a href="contact.php">CONTACT</a></li>

        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">


    <br><br>

    <!-- Jesusmicine -->
    <section id="features" class="features section light-background">


      <div class="container section-title" data-aos="fade-up">
        <h2> JESUSMICINE</h2>
        <p>
          Ici nous aurons une explication détaillée de la JESUSMICINE et c’est vers cette section
          que renvoie le bouton sur la slide JESUSMICINE.
        </p>
      </div>

      <div class="container">

        <div class="row gy-4 justify-content-between features-item">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/img/features-1.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-5 d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>C'est quoi la JESUSMICINE </h3>
              <p>
                Ici nous aurons une explication détaillée de la JESUSMICINE et c’est vers cette section
                que renvoie le bouton sur la slide JESUSMICINE. Description plus détaillée
              </p>

            </div>
          </div>

        </div>

        <div class="row gy-4 justify-content-between features-item">

          <div class="col-lg-5 d-flex align-items-center order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">

            <div class="content">
              <h3>Festivale JESUSMICINE </h3>
              <p>
                Ici nous aurons une présentation détaillée du festivale JESUSMICINE ainsi que des images du précédents
                festivale.
              </p>
              <ul>
                <li> Element 1.</li>
                <li> Element 2.</li>
                <li> Element 2.</li>
              </ul>
              <p></p>
              <a href="gallerie.php" class="btn more-btn">Voir plus d'images...</a>
            </div>

          </div>

          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="200">
            <img src="assets/img/features-2.jpg" class="img-fluid" alt="">
          </div>

        </div>

        <!--Videos de testimonies-->

      </div>

    </section>

    <!--Videos de testimonies-->

  <section id="portfolio" class="portfolio section">

  <div class="container section-title" data-aos="fade-up">
    <h2>Témoignages Vidéo</h2>
    <p>Ici nous retrouverons des témoignages sur les bienfaits de la JESUSMICINE sous forme de
      courtes vidéos avec des résumé en dessous de ces vidéos.
    </p>
  </div>

  <div class="container">

    <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

      <!-- Articles (Testimonies) -->
      <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
        <?php
        while ($testimony = $result123->fetch(PDO::FETCH_ASSOC)) {
        ?>
          <div class="col-lg-4 col-md-6 portfolio-item isotope-item">
            <div class="portfolio-content h-100">
              <!-- Video Thumbnail / Image -->
              <a href="<?= htmlspecialchars($testimony['image_ink']) ?>" data-gallery="portfolio-gallery-app" class="glightbox">
                <img src="<?= htmlspecialchars($testimony['image_ink']) ?>" class="img-fluid" alt="Testimony Video">
              </a>
              <div class="portfolio-info">
                <h4><a href="#" title="More Details"><?= htmlspecialchars($testimony['title']) ?></a></h4>
                <p><?= htmlspecialchars($testimony['description']) ?></p>
                <p><strong>Vidéo Youtube:</strong> <a href="https://www.youtube.com/watch?v=<?= htmlspecialchars($testimony['youtube']) ?>" target="_blank">Voir la vidéo</a></p>
              </div>
            </div>
          </div>
        <?php
        }
        ?>
      </div>

    </div>

  </div>

  </section>


  </main>

  <footer id="footer" class="footer dark-background">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-6">
            <h4>Souscrire à notre service de mail</h4>
            <p>En souscrivant, vous receverez des prières et prédications Instantanement!</p>
            <form action="forms/newsletter.php" method="post" class="php-email-form">
              <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Souscrire">
              </div>
              <div class="loading">Chargement...</div>
              <div class="error-message"></div>
              <div class="sent-message">Votre subscription a reussi. Merci!</div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.php" class="d-flex align-items-center">
            <span class="sitename">SFAN</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Cité des Miracles, Nkomo l, Nkoabang.</p>
            <p class="mt-3"><strong><i class="bi bi-telephone"></i> : Europe, Amérique, Asie</strong></p>
            <P>(+237) 690 299 282</P>
            <p class="mt-3"><strong><i class="bi bi-whatsapp"></i> : Europe, Amérique, Asie</strong></p>
            <P>(+237) 656 911 817</P>
            <p class="mt-3"><strong><i class="bi bi-telephone"></i> <i class="bi bi-whatsapp"></i> : France</strong></p>
            <P>(+237) 699 063 541</P>
            <p><strong>Email:</strong> <span>info@gamil.com</span></p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Liens Utlites</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">SFAN</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">JESUSMICIN</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">PROGRAMMATIONS</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">EVÉNEMENTS</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">MÉDIATHÈQUE</a></li>
          </ul>
          <br>
          <h4>Père KING G. JOSHUA</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Biographie</a></li>
          </ul>

        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Autres Liens</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">A PROPOS</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">EGLISES SFAN</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">CONTACT</a></li>
          </ul>
          <br>
        </div>

        <div class="col-lg-4 col-md-12">
          <h4>Nous suivre sur les reseau sociaux</h4>
          <p>Nos liens.</p>
          <div class="social-links d-flex">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
            <p class="mt-3"><strong><i class="bi bi-telephone"></i><i class="bi bi-whatsapp"></i> : Cameroun : (+237) 698 941 583</strong></p>
            <p class="mt-3"><strong><i class="bi bi-telephone"></i><i class="bi bi-whatsapp"></i> : Afrique : (+237) 698 734 170</strong></p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> 2024 <strong class="px-1 sitename">SFAN</strong> <span>Tout
          droits reserver</span></p>

    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>