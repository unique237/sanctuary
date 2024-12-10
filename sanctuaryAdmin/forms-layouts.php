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

      <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
          <li class="nav-item d-block d-lg-none">
            <a class="nav-link nav-icon search-bar-toggle" href="#">
              <i class="bi bi-search"></i>
            </a>
          </li>
          <!-- End Search Icon-->
        </ul>
      </nav>
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
              <a href="forms-elements.php">
                <i class="bi bi-circle"></i><span>Nouvelle Publication</span>
              </a>
            </li>
            <li>
              <a href="forms-layouts.php" class="active">
                <i class="bi bi-circle"></i><span>Nouvelle Eglise</span>
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
                <i class="bi bi-circle"></i><span>General Tables</span>
              </a>
            </li>
            <li>
              <a href="tables-data.php">
                <i class="bi bi-circle"></i><span>Data Tables</span>
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
        <h1>Nouvelle Eglise</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Acceuil</a></li>
            <li class="breadcrumb-item">Formulaires</li>
            <li class="breadcrumb-item active">Nouvelle Eglise</li>
          </ol>
        </nav>
      </div>
      <!-- End Page Title -->

      <!--New Church Code-->
      <section class="section">
        <div class="">
          <div class="">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Nouvelle Eglise</h5>

                <!-- Horizontal Form -->
                <form method="post" action="forms/new.eglise.php" enctype="multipart/form-data">
                  <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"
                      >Nom de l'Eglise</label
                    >
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputText" name="church_name" />
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Pays</label>
                    <div class="col-sm-10">
                      <select
                        class="form-select"
                        aria-label="Default select example"
                        name="country"
                      >
                    <option value="">Sélectionnez un pays</option>
                    <option value="cameroun">Cameroun</option>
                    <option value="afghanistan">Afghanistan</option>
                    <option value="afrique-du-sud">Afrique du Sud</option>
                    <option value="albanie">Albanie</option>
                    <option value="algerie">Algérie</option>
                    <option value="allemagne">Allemagne</option>
                    <option value="andorre">Andorre</option>
                    <option value="angola">Angola</option>
                    <option value="antigua-et-barbuda">Antigua-et-Barbuda</option>
                    <option value="arabie-saoudite">Arabie Saoudite</option>
                    <option value="argentine">Argentine</option>
                    <option value="armenie">Arménie</option>
                    <option value="australie">Australie</option>
                    <option value="autriche">Autriche</option>
                    <option value="azerbaidjan">Azerbaïdjan</option>
                    <option value="bahamas">Bahamas</option>
                    <option value="bahrein">Bahreïn</option>
                    <option value="bangladesh">Bangladesh</option>
                    <option value="barbade">Barbade</option>
                    <option value="belgique">Belgique</option>
                    <option value="belize">Belize</option>
                    <option value="benin">Bénin</option>
                    <option value="bhoutan">Bhoutan</option>
                    <option value="bielorussie">Biélorussie</option>
                    <option value="birmanie">Birmanie</option>
                    <option value="bolivie">Bolivie</option>
                    <option value="bosnie-herzegovine">Bosnie-Herzégovine</option>
                    <option value="botswana">Botswana</option>
                    <option value="bresil">Brésil</option>
                    <option value="brunei">Brunei</option>
                    <option value="bulgarie">Bulgarie</option>
                    <option value="burkina-faso">Burkina Faso</option>
                    <option value="burundi">Burundi</option>
                    <option value="cambodge">Cambodge</option>
                    <option value="canada">Canada</option>
                    <option value="cap-vert">Cap-Vert</option>
                    <option value="chili">Chili</option>
                    <option value="chine">Chine</option>
                    <option value="chypre">Chypre</option>
                    <option value="colombie">Colombie</option>
                    <option value="comores">Comores</option>
                    <option value="congo-brazzaville">Congo (Brazzaville)</option>
                    <option value="congo-kinshasa">Congo (Kinshasa)</option>
                    <option value="coree-du-nord">Corée du Nord</option>
                    <option value="coree-du-sud">Corée du Sud</option>
                    <option value="costa-rica">Costa Rica</option>
                    <option value="cote-divoire">Côte d'Ivoire</option>
                    <option value="croatie">Croatie</option>
                    <option value="cuba">Cuba</option>
                    <option value="danemark">Danemark</option>
                    <option value="djibouti">Djibouti</option>
                    <option value="dominique">Dominique</option>
                    <option value="egypte">Égypte</option>
                    <option value="emirats-arabes-unis">Émirats Arabes Unis</option>
                    <option value="equateur">Équateur</option>
                    <option value="erythree">Érythrée</option>
                    <option value="espagne">Espagne</option>
                    <option value="estonie">Estonie</option>
                    <option value="eswatini">Eswatini</option>
                    <option value="etats-unis">États-Unis</option>
                    <option value="ethiopie">Éthiopie</option>
                    <option value="fidji">Fidji</option>
                    <option value="finlande">Finlande</option>
                    <option value="france">France</option>
                    <option value="gabon">Gabon</option>
                    <option value="gambie">Gambie</option>
                    <option value="georgie">Géorgie</option>
                    <option value="ghana">Ghana</option>
                    <option value="grece">Grèce</option>
                    <option value="grenade">Grenade</option>
                    <option value="guatemala">Guatemala</option>
                    <option value="guinee">Guinée</option>
                    <option value="guinee-equatoriale">Guinée équatoriale</option>
                    <option value="guinee-bissau">Guinée-Bissau</option>
                    <option value="guyana">Guyana</option>
                    <option value="haiti">Haïti</option>
                    <option value="honduras">Honduras</option>
                    <option value="hongrie">Hongrie</option>
                    <option value="inde">Inde</option>
                    <option value="indonesie">Indonésie</option>
                    <option value="irak">Irak</option>
                    <option value="iran">Iran</option>
                    <option value="irlande">Irlande</option>
                    <option value="islande">Islande</option>
                    <option value="israel">Israël</option>
                    <option value="italie">Italie</option>
                    <option value="jamaique">Jamaïque</option>
                    <option value="japon">Japon</option>
                    <option value="jordanie">Jordanie</option>
                    <option value="kazakhstan">Kazakhstan</option>
                    <option value="kenya">Kenya</option>
                    <option value="kirghizistan">Kirghizistan</option>
                    <option value="kiribati">Kiribati</option>
                    <option value="kosovo">Kosovo</option>
                    <option value="koweit">Koweït</option>
                    <option value="laos">Laos</option>
                    <option value="lesotho">Lesotho</option>
                    <option value="lettonie">Lettonie</option>
                    <option value="liban">Liban</option>
                    <option value="liberia">Libéria</option>
                    <option value="libye">Libye</option>
                    <option value="liechtenstein">Liechtenstein</option>
                    <option value="lituanie">Lituanie</option>
                    <option value="luxembourg">Luxembourg</option>
                    <option value="madagascar">Madagascar</option>
                    <option value="malaisie">Malaisie</option>
                    <option value="malawi">Malawi</option>
                    <option value="maldives">Maldives</option>
                    <option value="mali">Mali</option>
                    <option value="malte">Malte</option>
                    <option value="maroc">Maroc</option>
                    <option value="maurice">Maurice</option>
                    <option value="mauritanie">Mauritanie</option>
                    <option value="mexique">Mexique</option>
                    <option value="micronesie">Micronésie</option>
                    <option value="moldavie">Moldavie</option>
                    <option value="monaco">Monaco</option>
                    <option value="mongolie">Mongolie</option>
                    <option value="montenegro">Monténégro</option>
                    <option value="mozambique">Mozambique</option>
                    <option value="namibie">Namibie</option>
                    <option value="nauru">Nauru</option>
                    <option value="nepal">Népal</option>
                    <option value="nicaragua">Nicaragua</option>
                    <option value="niger">Niger</option>
                    <option value="nigeria">Nigeria</option>
                    <option value="norvege">Norvège</option>
                    <option value="nouvelle-zelande">Nouvelle-Zélande</option>
                    <option value="oman">Oman</option>
                    <option value="ouganda">Ouganda</option>
                    <option value="ouzbekistan">Ouzbékistan</option>
                    <option value="pakistan">Pakistan</option>
                    <option value="palaos">Palaos</option>
                    <option value="palestine">Palestine</option>
                    <option value="panama">Panama</option>
                    <option value="papouasie-nouvelle-guinee">Papouasie-Nouvelle-Guinée</option>
                    <option value="paraguay">Paraguay</option>
                    <option value="pays-bas">Pays-Bas</option>
                    <option value="perou">Pérou</option>
                    <option value="philippines">Philippines</option>
                    <option value="pologne">Pologne</option>
                    <option value="portugal">Portugal</option>
                    <option value="qatar">Qatar</option>
                    <option value="roumanie">Roumanie</option>
                    <option value="royaume-uni">Royaume-Uni</option>
                    <option value="russie">Russie</option>
                    <option value="rwanda">Rwanda</option>
                    <option value="saint-kitts-et-nevis">Saint-Kitts-et-Nevis</option>
                    <option value="saint-marin">Saint-Marin</option>
                    <option value="saint-vincent-et-les-grenadines">Saint-Vincent-et-les-Grenadines</option>
                    <option value="sainte-lucie">Sainte-Lucie</option>
                    <option value="salomon">Salomon</option>
                    <option value="salvador">Salvador</option>
                    <option value="samoa">Samoa</option>
                    <option value="sao-tome-et-principe">Sao Tomé-et-Principe</option>
                    <option value="senegal">Sénégal</option>
                    <option value="serbie">Serbie</option>
                    <option value="seychelles">Seychelles</option>
                    <option value="singapour">Singapour</option>
                    <option value="slovaquie">Slovaquie</option>
                    <option value="slovenie">Slovénie</option>
                    <option value="somalie">Somalie</option>
                    <option value="soudan">Soudan</option>
                    <option value="soudan-du-sud">Soudan du Sud</option>
                    <option value="sri-lanka">Sri Lanka</option>
                    <option value="suede">Suède</option>
                    <option value="suisse">Suisse</option>
                    <option value="suriname">Suriname</option>
                    <option value="syrie">Syrie</option>
                    <option value="tadjikistan">Tadjikistan</option>
                    <option value="tanzanie">Tanzanie</option>
                    <option value="tchad">Tchad</option>
                    <option value="thailande">Thaïlande</option>
                    <option value="timor-oriental">Timor Oriental</option>
                    <option value="togo">Togo</option>
                    <option value="tonga">Tonga</option>
                    <option value="trinite-et-tobago">Trinité-et-Tobago</option>
                    <option value="tunisie">Tunisie</option>
                    <option value="turkmenistan">Turkménistan</option>
                    <option value="turquie">Turquie</option>
                    <option value="tuvalu">Tuvalu</option>
                    <option value="ukraine">Ukraine</option>
                    <option value="uruguay">Uruguay</option>
                    <option value="vanuatu">Vanuatu</option>
                    <option value="venezuela">Venezuela</option>
                    <option value="viet-nam">Viêt Nam</option>
                    <option value="yemen">Yémen</option>
                    <option value="zambie">Zambie</option>
                    <option value="zimbabwe">Zimbabwe</option>
                      </select>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"
                      >Localisation de l'Eglise</label
                    >
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputText" name="localization" />
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
                    <label for="inputPassword" class="col-sm-2 col-form-label">Courte Description</label>
                    <div class="col-sm-10">
                      <textarea
                        class="form-control"
                        style="height: 100px"
                        name="description"
                      ></textarea>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputDate" class="col-sm-2 col-form-label"
                      >Bureau</label
                    >
                    <div class="col-sm-10">
                      <textarea type="text" class="form-control" name="organization" ></textarea>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputDate" class="col-sm-2 col-form-label"
                      >Contacts</label
                    >
                    <div class="col-sm-10">
                      <textarea type="text" class="form-control" ></textarea>
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


      <!--New Weekly-->
      <section class="section">
        <div class="">
          <div class="">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Nouveau Programme Hebdomadaire</h5>

                <!-- Horizontal Form -->
                <form method="post" action="forms/new.weekly.php" enctype="multipart/form-data">
                  <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"
                      >Titre</label
                    >
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputText" name="title" />
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Catégorie</label>
                    <div class="col-sm-10">
                      <select
                        class="form-select"
                        aria-label="Default select example"
                        name="category"
                      >
                    <option value="" disabled selected>Sélectionnez une Catégorie</option>
                    <option value="Cultes Prophétique">Cultes Prophétique</option>
                    <option value="Nuits de Prodiges">Nuits de Prodiges</option>
                    <option value="Prières de Miséricordes">Prières de Miséricordes</option>
                    <option value="Programmes Spéciaux">Programmes Spéciaux</option>
                    
                    
                      </select>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"
                      >Lien Externe</label
                    >
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputText" name="link" placeholder="Facebook, Youtube etc..."/>
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

      <!--Hebdo-->


      <!-- New testimony-->
      <section class="section">
        <div class="">
          <div class="">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Nouveau Témoignage</h5>

                <!-- Horizontal Form -->
                <form method="post" action="forms/new.testimony.php" enctype="multipart/form-data">
                  <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"
                      >Titre, Nom ou Slogan</label
                    >
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputText" name="title" />
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label"
                      >Image de Couverture</label
                    >
                    <div class="col-sm-10">
                      <input class="form-control" type="file" id="formFile" name="image_link" />
                    </div>
                  </div>

                

                  <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"
                      >Lien de la Vidéo</label
                    >
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputText" name="youtube" placeholder="Facebook, Youtube etc..."/>
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
