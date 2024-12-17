<?php
require_once 'forms/conn.php'; // Ensure this file includes the $pdo connection

// Check if church_id is passed and valid
if (isset($_GET['church_id']) && is_numeric($_GET['church_id'])) {
    $church_id = intval($_GET['church_id']); // Cast to integer for additional safety

    try {
        // Fetch the church data from the database
        $sql = "SELECT * FROM church WHERE church_id = :church_id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':church_id', $church_id, PDO::PARAM_INT);
        $stmt->execute();

        // Check if a church was found
        if ($stmt->rowCount() > 0) {
            $church = $stmt->fetch(PDO::FETCH_ASSOC);
            
        } else {
            echo "<p style='color: red;'>Church not found.</p>";
            exit;
        }
    } catch (PDOException $e) {
        // Handle database errors
        echo "<p style='color: red;'>Database error: " . htmlspecialchars($e->getMessage()) . "</p>";
        exit;
    }
} else {
    // If church_id is invalid or missing
    echo "<p style='color: red;'>Invalid Church ID.</p>";
    exit;
}

// The rest of your code for updating or displaying the church goes here
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
            <!-- New Predication-->
      



      <!-- New Gallerie ietm-->

      <section class="section">
        <div class="">
          <div class="">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Modifier Eglise</h5>

                <!-- Horizontal Form -->
                <form method="post" action="forms/new.eglise.php" enctype="multipart/form-data">
                <input type="hidden" name="church_id" value="<?php echo htmlspecialchars($church['church_id']); ?>" />
                  <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"
                      >Nom de l'Eglise</label
                    >
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="church_name" value="<?php echo htmlspecialchars($church['church_name']); ?>" />
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"
                      >Pays</label
                    >
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="country" value="<?php echo htmlspecialchars($church['country']); ?>" />
                    </div>
                  </div>

                  

                  <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"
                      >Localisation de l'Eglise</label
                    >
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="localization" value="<?php echo htmlspecialchars($church['localization']); ?>" />
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label"
                      >Image</label
                    >
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="image_ink" value="<?php echo htmlspecialchars($church['image_ink']); ?>" />
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Courte Description</label>
                    <div class="col-sm-10">
                      <textarea
                        class="form-control"
                        style="height: 100px"
                        name="description"
                        value="<?php echo htmlspecialchars($church['description']); ?>"
                      ></textarea>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputDate" class="col-sm-2 col-form-label"
                      >Bureau</label
                    >
                    <div class="col-sm-10">
                      <textarea type="text" class="form-control" name="organization" value="<?php echo htmlspecialchars($church['organization']); ?>" ></textarea>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputDate" class="col-sm-2 col-form-label"
                      >Contacts</label
                    >
                    <div class="col-sm-10">
                      <textarea type="text" class="form-control" name="contact" value="<?php echo htmlspecialchars($church['contact']); ?>" ></textarea>
                    </div>
                  </div>



                  <div class="text-center">
                    <button type="submit" class="btn btn-primary" value='update'>
                      Modifier
                    </button>
                    <button type="reset" class="btn btn-secondary" value='delete'>
                      Supprimer
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
