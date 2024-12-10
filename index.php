<?php
 require "forms/queries/display.actu.php";
 require "forms/queries/display.predication.php";
 require "forms/queries/display.media.php";
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


          <li><a href="jesusmicine.php">JESUSMICINE</a></li>
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

    <!-- SLIDE -->
    <section id="hero" class="hero section dark-background">

      <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item active">
          <img src="assets/img/hero-carousel/hero-carousel-1.jpg" alt="">
          <div class="carousel-container">
            <h2>Grand Festival de la JESUSMICINE</h2>
            <p>Le grand festival international de la JESUSMICINE est la grande retraite de puissance et
              d’impartition qui se tiendra au Sanctuaire pour toutes les nations du 18 au 22 Décembre 2024.</p>
            <a href="jesusmicine.php" class="btn-get-started">Voir plus...</a>
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="assets/img/hero-carousel/hero-carousel-2.jpg" alt="">
          <div class="carousel-container">
            <h2>JESUSMICINE</h2>
            <p>La médecine parfaite de Dieu au travers de son fils JESUS CHRIST.</p>
            <a href="jesusmicine.php" class="btn-get-started">Voir plus...</a>
          </div>
        </div><!-- End Carousel Item -->



        <div class="carousel-item">
          <img src="assets/img/hero-carousel/hero-carousel-2.jpg" alt="">
          <div class="carousel-container">
            <h2>Père KING G. JOSHUA</h2>
            <p>Prophète, visionnaire, Père Supérieur et Fondateur de la Méga Eglise Sanctuaire Pour Toutes les Nations
              (SFAN).</p>
            <a href="about.php" class="btn-get-started">Voir biographie.</a>
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="assets/img/hero-carousel/hero-carousel-3.jpg" alt="">
          <div class="carousel-container">
            <h2>Sanctuaire pour toute les nations (SFAN)</h2>
            <p>Méga Eglise, Terre Sainte, lieu de pèlerinage, Auditorium de plus de 12 000 (douze mille) places.</p>
            <a href="eglises.php" class="btn-get-started">Voir plus...</a>
          </div>
        </div><!-- End Carousel Item -->

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators"></ol>

      </div>

    </section><!-- /Hero Section -->







<section id="portfolio" class="portfolio section">
  <div class="container section-title" data-aos="fade-up">
    <h2>Actualités</h2>
    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
  </div>

  <div class="container">
    <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
      <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
        <?php 
        while ($row = $result_short_art->fetch(PDO::FETCH_ASSOC)): ?>
          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
            <div class="portfolio-content h-100">
              <a href="<?php echo htmlspecialchars($row['image_link']); ?>" data-gallery="portfolio-gallery-app" class="glightbox" alt="assets/img/portfolio/product-1.jpg">
                <img src="<?php echo htmlspecialchars($row['image_link']); ?>" class="">
              </a>
              <div class="portfolio-info">
              <h4>
                <a href="article.php?id=<?php echo htmlspecialchars($row['articleid']); ?>" title="More Details">
                  <?php echo htmlspecialchars($row['title']); ?>
                </a>
              </h4>

                <p><?php echo htmlspecialchars($row['short']); ?></p>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      </div><!-- End article Container -->
    </div>
  </div>
</section><!-- /article Section -->







    <!-- Predications et Prieres -->
<section id="portfolio" class="portfolio section">

  <div class="container section-title" data-aos="fade-up">
    <h2>Prédications et Prières</h2>
    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
  </div>

  <div class="container">

    <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

      <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

        <?php
        while ($row = $result321->fetch()) {
          echo '
          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
            <div class="portfolio-content h-100">
              <a href="' . htmlspecialchars($row['image_url']) . '" target="_blank" data-gallery="portfolio-gallery-app" class="glightbox">
                <img src="' . htmlspecialchars($row['image_url']) . '" class="img-fluid" alt="' . htmlspecialchars($row['title']) . '">
              </a>
              <div class="portfolio-info">
                <h4><a href="' . htmlspecialchars($row['fb_link']) . '" target="_blank" title="More Details">' . htmlspecialchars($row['title']) . '</a></h4>
                <p>' . htmlspecialchars($row['description']) . '</p>
                <p>Auteur : ' . htmlspecialchars($row['author']) . '</p>
                <p>Date : ' . date("d-m-Y", strtotime($row['publish_date'])) . '</p>
              </div>
            </div>
          </div>';
        }
        ?>

      </div><!-- End article Container -->

    </div>

  </div>

</section>

    <!--For the gallery -->
  <section id="portfolio" class="portfolio section">

  <div class="container section-title" data-aos="fade-up">
    <h2>Médiathèque</h2>
    <p>Parcourez Notre Médiathèque!</p>
  </div>

  <div class="container">

    <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

      <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

        <?php while ($row = $result123->fetch(PDO::FETCH_ASSOC)) { ?>
          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-<?php echo strtolower($row['category']); ?>">
            <div class="portfolio-content h-100">
              <a href="<?php echo htmlspecialchars($row['image_url']); ?>" data-gallery="portfolio-gallery-app" class="glightbox">
                <img src="<?php echo htmlspecialchars($row['image_url']); ?>" class="img-fluid" alt="">
              </a>
              <div class="portfolio-info">
                <h4><?php echo htmlspecialchars($row['title']); ?></h4>
                <p><?php echo htmlspecialchars($row['description']); ?></p>
                <p>Date: <?php echo date('d-m-Y', strtotime($row['publish_date'])); ?></p>
              </div>
            </div>
          </div>
        <?php } ?>

      </div><!-- End row -->

    </div><!-- End isotope-layout -->

  </div><!-- End container -->

  </section>








    <!-- Faq Section 
    <section id="faq" class="faq section light-background">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="content px-xl-5">
              <h3><span>Frequently Asked </span><strong>Questions</strong></h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p>
            </div>
          </div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

            <div class="faq-container">
              <div class="faq-item faq-active">
                <h3><span class="num">1.</span> <span>Non consectetur a erat nam at lectus urna duis?</span></h3>
                <div class="faq-content">
                  <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item">
                <h3><span class="num">2.</span> <span>Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</span></h3>
                <div class="faq-content">
                  <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item">
                <h3><span class="num">3.</span> <span>Dolor sit amet consectetur adipiscing elit pellentesque?</span></h3>
                <div class="faq-content">
                  <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item">
                <h3><span class="num">4.</span> <span>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</span></h3>
                <div class="faq-content">
                  <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item">
                <h3><span class="num">5.</span> <span>Tempus quam pellentesque nec nam aliquam sem et tortor consequat?</span></h3>
                <div class="faq-content">
                  <p>Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

            </div>

          </div>
        </div>

      </div>

    </section> -->

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