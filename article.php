<?php
 require "forms/queries/actu.details.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>SFAN</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">


</head>

<body class="portfolio-details-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.php" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">SFAN</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>


          <li><a href="jesusmicine.php">JESUSMICINE</a></li>
          <li><a href="hebdo.php">PROGRAMMES HEBDOMADAIRES</a></li>
          <li><a href="actualites.php" class="active">EVÉNEMENTS ET ACTUALITÉS</i></a></li>
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

    
  <div class="page-title dark-background">
    <div class="container position-relative">
      <h1><?php echo htmlspecialchars($article['title']); ?></h1>
      <p><?php echo htmlspecialchars($article['short']); ?></p>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="index.php">SFAN</a></li>
          <li class="current"><?php echo htmlspecialchars($article['title']); ?></li>
        </ol>
      </nav>
    </div>
  </div>
<!-- End Page Title -->

    <!-- Portfolio Details Section -->
    <section id="portfolio-details" class="portfolio-details section">

      <div class="container" data-aos="fade-up">

        <div class="portfolio-details-slider swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "navigation": {
                "nextEl": ".swiper-button-next",
                "prevEl": ".swiper-button-prev"
              },
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide">
              <img src="<?php echo htmlspecialchars($article['image_link']); ?>" alt="<?php echo htmlspecialchars($article['title']); ?>">
            </div>
          </div>

          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
          <div class="swiper-pagination"></div>
        </div>

        <div class="row justify-content-between gy-4 mt-4">

          <div class="col-lg-8" data-aos="fade-up">
          <div class="portfolio-description">
              <h2><?php echo htmlspecialchars($article['title_one']); ?></h2>
              <p><?php echo nl2br(htmlspecialchars($article['paragraph_one'])); ?></p>

              <?php if (!empty($article['title_two'])): ?>
                <h3><?php echo htmlspecialchars($article['title_two']); ?></h3>
                <p><?php echo nl2br(htmlspecialchars($article['paragraph_two'])); ?></p>
              <?php endif; ?>

              <?php if (!empty($article['title_three'])): ?>
                <h3><?php echo htmlspecialchars($article['title_three']); ?></h3>
                <p><?php echo nl2br(htmlspecialchars($article['paragraph_three'])); ?></p>
              <?php endif; ?>

              <?php if (!empty($article['title_four'])): ?>
                <h3><?php echo htmlspecialchars($article['title_four']); ?></h3>
                <p><?php echo nl2br(htmlspecialchars($article['paragraph_four'])); ?></p>
              <?php endif; ?>
          </div>

          </div>

          <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
          <div class="portfolio-info">
            <h3>Details de l'article</h3>
            <ul>
              <li><strong>Categorie :</strong> <?php echo htmlspecialchars($article['category']); ?></li>
              <li><strong>Lieux :</strong> <?php echo htmlspecialchars($article['localization']); ?></li>
              <li><strong>Date :</strong> <?php echo htmlspecialchars(date("d M, Y", strtotime($article['post_date']))); ?></li>
            </ul>
          </div>


          <h3>Liens Externes</h3>
          <p>Description : <a href="<?php echo htmlspecialchars($article['link_one']); ?>" target="_blank"><?php echo htmlspecialchars($article['link_des_one']); ?></a></p>
          <p>Description : <a href="<?php echo htmlspecialchars($article['link_two']); ?>" target="_blank"><?php echo htmlspecialchars($article['link_des_two']); ?></a></p>
          <p>Description : <a href="<?php echo htmlspecialchars($article['link_three']); ?>" target="_blank"><?php echo htmlspecialchars($article['link_des_three']); ?></a></p>

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
            <h4>Regoindre notre service de messagerie instantane</h4>
            <p>En souscrivant, vous receverez des prieres et predications Instantanement!</p>
            <form action="forms/newsletter.php" method="post" class="php-email-form">
              <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Souscrire"></div>
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
            <span class="sitename">Sanctuary Church</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Yaounde</p>
            <p>BP: 535022</p>
            <p class="mt-3"><strong>Telephone:</strong> <span>+237 555 444 333</span></p>
            <p><strong>Email:</strong> <span>info@gamil.com</span></p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Autre Liens</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Acceuil</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="about.php">Qui sommes nous</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="actualites.php">Actualites</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="contact.php">Contact</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Ce que nous vous donnons</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="predication.php">La Parole de Dieu</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="evenement.php">Evenements</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="predication.php">Predication</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="about.php">Devouement a Dieu</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12">
          <h4>Nous suivre sur les reseau socieux</h4>
          <p>Nos liens utiles</p>
          <div class="social-links d-flex">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> 2024 <strong class="px-1 sitename">The Sanctuary for all Nations</strong> <span>Tout droits  reserver</span></p>
      
    </div>

  </footer>



  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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