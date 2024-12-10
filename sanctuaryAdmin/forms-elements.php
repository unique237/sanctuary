<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Sanctuary</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect" />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet" />
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet" />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
      <div class="d-flex align-items-center justify-content-between">
        <a href="index.php" class="logo d-flex align-items-center">
          <img src="assets/img/logo.png" alt="" />
          <span class="d-none d-lg-block">Sanctuary</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
      </div>
      <!-- End Logo -->

      <div class="search-bar">
        <form
          class="search-form d-flex align-items-center"
          method="POST"
          action="#"
        >
          <input
            type="text"
            name="query"
            placeholder="Chercher"
            title="Enter search keyword"
          />
          <button type="submit" title="Search">
            <i class="bi bi-search"></i>
          </button>
        </form>
      </div>
      <!-- End Search Bar -->

      <nav class="header-nav ms-auto"></nav>
      <!-- End Icons Navigation -->
    </header>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
      <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
          <a class="nav-link collapsed" href="index.php">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <!-- End Dashboard Nav -->

        <li class="nav-item">
          <a
            class="nav-link"
            data-bs-target="#forms-nav"
            data-bs-toggle="collapse"
            href="#"
          >
            <i class="bi bi-journal-text"></i><span>Formulaires</span
            ><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul
            id="forms-nav"
            class="nav-content collapse show"
            data-bs-parent="#sidebar-nav"
          >
            <li>
              <a href="forms-elements.php" class="active">
                <i class="bi bi-circle"></i><span>Nouvelle Publication</span>
              </a>
            </li>
            <li>
              <a href="forms-layouts.php">
                <i class="bi bi-circle"></i><span>Nouvel Evenement</span>
              </a>
            </li>
          </ul>
        </li>
        <!-- End Forms Nav -->

        <li class="nav-item">
          <a
            class="nav-link collapsed"
            data-bs-target="#tables-nav"
            data-bs-toggle="collapse"
            href="#"
          >
            <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span
            ><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul
            id="tables-nav"
            class="nav-content collapse"
            data-bs-parent="#sidebar-nav"
          >
            <li>
              <a href="tables-general.php">
                <i class="bi bi-circle"></i><span>Nos Tables</span>
              </a>
            </li>
            <li>
              <a href="tables-data.php">
                <i class="bi bi-circle"></i><span>Messages</span>
              </a>
            </li>
          </ul>
        </li>
        <!-- End Tables Nav -->

        <li class="nav-heading">Pages</li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="pages-register.php">
            <i class="bi bi-card-list"></i>
            <span>Register</span>
          </a>
        </li>
        <!-- End Register Page Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed" href="pages-login.php">
            <i class="bi bi-box-arrow-in-right"></i>
            <span>Login</span>
          </a>
        </li>
        <!-- End Login Page Nav -->
      </ul>
    </aside>
    <!-- End Sidebar-->

    <main id="main" class="main">
      <div class="pagetitle">
        <h1>Nouvelle Publication</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Acceuil</a></li>
            <li class="breadcrumb-item">Formulaires</li>
            <li class="breadcrumb-item active">Nouvelle Publication</li>
          </ol>
        </nav>
      </div>
      <!-- End Page Title -->
      
      <section class="section">
        
        <div class=""><!--row-->
          <div class=""><!--col-lg-6-->
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Nouvel Article</h5>

                <!-- General Form Elements -->
                <form method="post" action="forms/new.article.php" enctype="multipart/form-data">
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label"
                      >Titre</label
                    >
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="title" />
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label"
                      >Courte Description</label
                    >
                    <div class="col-sm-10">
                      <textarea
                        class="form-control"
                        style="height: 100px"
                        name="short"
                      ></textarea>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Categorie</label>
                    <div class="col-sm-10">
                      <select
                        class="form-select"
                        aria-label="Default select example"
                        name="category"
                        required
                      >
                        <option value="" disabled selected>Choisir</option>
                        <option value="Actualités">Actualités</option>
                        <option value="Evénements">Evénements</option>
                        <option value="Croisades">Croisades</option>
                        <option value="Prophéties et leurs Réalisations">Prophéties et leurs Réalisations</option>
                        <option value="Conférences Apostoliques">Conférences Apostoliques</option>
                      </select>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label"
                      >Titre 1</label
                    >
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="title_one" />
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label"
                      >Paragraphe 1</label
                    >
                    <div class="col-sm-10">
                      <textarea
                        class="form-control"
                        style="height: 100px"
                        name="paragraph_one"
                      ></textarea>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label"
                      >Titre 2</label
                    >
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="title_two" />
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label"
                      >Paragraphe 2</label
                    >
                    <div class="col-sm-10">
                      <textarea
                        class="form-control"
                        style="height: 100px"
                        name="paragraph_two"
                      ></textarea>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label"
                      >Titre 3</label
                    >
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="title_three" />
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label"
                      >Paragraphe 3</label
                    >
                    <div class="col-sm-10">
                      <textarea
                        class="form-control"
                        style="height: 100px"
                        name="paragraph_three"
                      ></textarea>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label"
                      >Titre 4</label
                    >
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="title_four" />
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label"
                      >Paragraphe 4</label
                    >
                    <div class="col-sm-10">
                      <textarea
                        class="form-control"
                        style="height: 100px"
                        name="paragraph_four"
                      ></textarea>
                    </div>
                  </div>


                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Situation</label>
                    <div class="col-sm-10">
                      <select
                        class="form-select"
                        aria-label="Default select example"
                        name="situation"
                        required 
                      >
                        <option value="" disabled selected>Choisir</option>
                        <option value="Actif">Actif</option>
                        <option value="Inactif">Inactif</option>
                      </select>
                    </div>
                  </div>



                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label"
                      >Lieu</label
                    >
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="localization" />
                    </div>
                  </div>

                  <!--links-->


                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label"
                      >Lien 1</label
                    >
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="link_one" />
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label"
                      >Description du Lien 1</label
                    >
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="link_des_one" />
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label"
                      >Lien 2</label
                    >
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="link_two" />
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label"
                      >Description du Lien 2</label
                    >
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="link_des_two" />
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label"
                      >Lien 3</label
                    >
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="link_three" />
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label"
                      >Description du Lien 3</label
                    >
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="link_des_three" />
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label"
                      >Image</label
                    >
                    <div class="col-sm-10">
                      <input class="form-control" type="file" id="formFile" name="image_link" />
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputDate" class="col-sm-2 col-form-label"
                      >Date</label
                    >
                    <div class="col-sm-10">
                      <input type="date" class="form-control" name="publish_date"/>
                    </div>
                  </div>



                  <div class="row mb-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label"
                      >Paragraphe 1</label
                    >
                    <div class="col-sm-10">
                      <textarea
                        class="form-control"
                        style="height: 100px"
                      ></textarea>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label"
                      >Paragraphe 2</label
                    >
                    <div class="col-sm-10">
                      <textarea
                        class="form-control"
                        style="height: 100px"
                      ></textarea>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label"
                      >Paragraphe 3</label
                    >
                    <div class="col-sm-10">
                      <textarea
                        class="form-control"
                        style="height: 100px"
                      ></textarea>
                    </div>
                  </div>








                  <div class="row mb-3">

                    <div class="col-sm-10">
                      <center><button type="submit" class="btn btn-primary">
                        Publier
                      </button></center>
                    </div>
                  </div>
                </form>
                <!-- End General Form Elements -->
              </div>
            </div>
          </div>

          
        </div>
      </section>


            <!-- New Predication-->
      <section class="section">
        <div class="">
          <div class="">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Nouvelle Prédication/Prière</h5>

                <!-- Horizontal Form -->
                <form method="post" action="forms/new.predication.php" enctype="multipart/form-data">
                  <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"
                      >Titre</label
                    >
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputText" name="title" placeholder="Ex: Prédication du Jour : Titre" />
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label"
                      >Image de Couverture</label
                    >
                    <div class="col-sm-10">
                      <input class="form-control" type="file" id="formFile" name="image_url" />
                    </div>
                  </div>

                

                  <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"
                      >Lien Externe</label
                    >
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputText" name="fb_link" placeholder="Facebook, Youtube etc..."/>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"
                      >Auteur de la Nouvelle Prédication/Prière</label
                    >
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputText" name="author" placeholder="EX : Father ..."/>
                    </div>
                  </div>


                  <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"
                      >Date</label
                    >
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="inputText" name="publish_date" />
                    </div>
                  </div>



                  <div class="row mb-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Courte Description</label>
                    <div class="col-sm-10">
                      <textarea
                        class="form-control"
                        style="height: 100px"
                        name="description"
                      ></textarea>
                    </div>
                  </div>



                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">
                      Publier
                    </button>
                    <button type="reset" class="btn btn-secondary">
                      Reset
                    </button>
                  </div>
                </form>
                <!-- End Horizontal Form -->
              </div>
            </div>
          </div>

        </div>
      </section>



      <!-- New Gallerie ietm-->

      <section class="section">
        <div class="">
          <div class="">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Nouvelle Image pour la Médiathque</h5>

                <!-- Horizontal Form -->
                <form method="post" action="forms/new.media.php" enctype="multipart/form-data">
                  <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"
                      >Titre</label
                    >
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputText" name="title" placeholder="Pour le Context" />
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label"
                      >Image de Couverture</label
                    >
                    <div class="col-sm-10">
                      <input class="form-control" type="file" id="formFile" name="image_url" />
                    </div>
                  </div>


                  <!--Category-->

                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Catégorie</label>
                    <div class="col-sm-10">
                      <select
                        class="form-select"
                        aria-label="Default select example"
                        name="category"
                      >
                    <option value="" disabled selected>Sélectionnez une Catégorie</option>
                    <option value="Média">Média</option>
                    <option value="Production Musicale">Production Musicale</option>
                    <option value="Prières Miraculeuses du Père KING">Prières Miraculeuses du Père KING</option>
                    <option value="Prière avec Père King">Prière avec Père King</option>
                    
                    
                      </select>
                    </div>
                  </div>

                

                  <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"
                      >Lien Externe</label
                    >
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputText" name="fb_link" placeholder="Facebook, Youtube etc..."/>
                    </div>
                  </div>

                  


                  <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"
                      >Date</label
                    >
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="inputText" name="publish_date" />
                    </div>
                  </div>



                  <div class="row mb-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Courte Description</label>
                    <div class="col-sm-10">
                      <textarea
                        class="form-control"
                        style="height: 100px"
                        name="description"
                      ></textarea>
                    </div>
                  </div>



                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">
                      Publier
                    </button>
                    <button type="reset" class="btn btn-secondary">
                      Reset
                    </button>
                  </div>
                </form>
                <!-- End Horizontal Form -->
              </div>
            </div>
          </div>

        </div>
      </section>
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
      <div class="copyright">
        &copy; Copyright <strong><span>Sanctuary</span></strong
        >. All Rights Reserved
      </div>

    </footer>
    <!-- End Footer -->

    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
