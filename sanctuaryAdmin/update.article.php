<?php
    require ('forms/updates.php');
?>

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
 

    <main id="main" class="main">
      <div class="pagetitle">
        <h1>Modifier La Publication</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Acceuil</a></li>
            <li class="breadcrumb-item">Formulaires</li>
            <li class="breadcrumb-item active">Modifier Publication</li>
          </ol>
        </nav>
      </div>
      <!-- End Page Title -->
      
      <section class="section">
        
        <div class=""><!--row-->
          <div class=""><!--col-lg-6-->
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Modifier Article</h5>

                <!-- General Form Elements -->
                <form method="post" action="forms/update.content.php" enctype="multipart/form-data">
                    <input type="hidden" name="articleId" value="<?php echo htmlspecialchars($article['articleid']); ?>" />

                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Titre</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="title" value="<?php echo htmlspecialchars($article['title']); ?>" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Courte Description</label>
                        <div class="col-sm-10">
                        <textarea class="form-control" style="height: 100px" name="short"><?php echo htmlspecialchars($article['short']); ?></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Categorie</label>
                        <div class="col-sm-10">
                        <select class="form-select" name="category" required>
                            <option value="" disabled>Choisir</option>
                            <option value="Actualités" <?php echo $article['category'] === 'Actualités' ? 'selected' : ''; ?>>Actualités</option>
                            <option value="Evénements" <?php echo $article['category'] === 'Evénements' ? 'selected' : ''; ?>>Evénements</option>
                            <option value="Croisades" <?php echo $article['category'] === 'Croisades' ? 'selected' : ''; ?>>Croisades</option>
                            <option value="Prophéties et leurs Réalisations" <?php echo $article['category'] === 'Prophéties et leurs Réalisations' ? 'selected' : ''; ?>>Prophéties et leurs Réalisations</option>
                            <option value="Conférences Apostoliques" <?php echo $article['category'] === 'Conférences Apostoliques' ? 'selected' : ''; ?>>Conférences Apostoliques</option>
                        </select>
                        </div>
                    </div>

                    <!-- Repeat for other fields with corresponding values -->
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Titre 1</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="title_one" value="<?php echo htmlspecialchars($article['title_one']); ?>" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Paragraphe 1</label>
                        <div class="col-sm-10">
                        <textarea class="form-control" style="height: 100px" name="paragraph_one"><?php echo htmlspecialchars($article['paragraph_one']); ?></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Titre 2</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="title_two" value="<?php echo htmlspecialchars($article['title_two']); ?>" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Paragraphe 2</label>
                        <div class="col-sm-10">
                        <textarea class="form-control" style="height: 100px" name="paragraph_two"><?php echo htmlspecialchars($article['paragraph_two']); ?></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Titre 3</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="title_three" value="<?php echo htmlspecialchars($article['title_three']); ?>" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Paragraphe 3</label>
                        <div class="col-sm-10">
                        <textarea class="form-control" style="height: 100px" name="paragraph_three"><?php echo htmlspecialchars($article['paragraph_three']); ?></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Titre 4</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="title_four" value="<?php echo htmlspecialchars($article['title_four']); ?>" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Paragraphe 1</label>
                        <div class="col-sm-10">
                        <textarea class="form-control" style="height: 100px" name="paragraph_four"><?php echo htmlspecialchars($article['paragraph_four']); ?></textarea>
                        </div>
                    </div>

                    <!-- Continue for all other fields, following the same pattern -->
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Situation</label>
                        <div class="col-sm-10">
                        <select class="form-select" name="situation" required>
                            <option value="" disabled>Choisir</option>
                            <option value="Actif" <?php echo $article['situation'] === 'Actif' ? 'selected' : ''; ?>>Actif</option>
                            <option value="Inactif" <?php echo $article['situation'] === 'Inactif' ? 'selected' : ''; ?>>Inactif</option>
                        </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Lieu</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="localization" value="<?php echo htmlspecialchars($article['localization']); ?>" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Lien 1</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="link_one" value="<?php echo htmlspecialchars($article['link_one']); ?>" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Description du Lien 1</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="link_des_one" value="<?php echo htmlspecialchars($article['link_des_one']); ?>" />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Lien 2</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="link_two" value="<?php echo htmlspecialchars($article['link_two']); ?>" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Description du Lien 2</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="link_des_two" value="<?php echo htmlspecialchars($article['link_des_two']); ?>" />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Lien 3</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="link_three" value="<?php echo htmlspecialchars($article['link_three']); ?>" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Description du Lien 1</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="link_des_three" value="<?php echo htmlspecialchars($article['link_des_three']); ?>" />
                        </div>
                    </div>
                    <!-- Add similar blocks for other links and descriptions -->
                    

                    <div class="row mb-3">
                        <label for="inputNumber" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="image_link" value="<?php echo htmlspecialchars($article['image_link']); ?>" placeholder="<?php echo htmlspecialchars($article['image_link']); ?>"/>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="publish_date" value="<?php echo htmlspecialchars($article['publish_date']); ?>" />
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary" value="update">Mettre à jour</button>
                        <button type="submit" class="btn btn-secondary" value="delete">Supprimer</button>
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
