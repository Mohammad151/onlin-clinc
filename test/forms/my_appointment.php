<?php
include_once "connection.php";
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Online Clinic</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../images/O N L I N E.jpg" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">


  <!-- <link href="assets/css/style.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="../assets/css/style.css">

  <!-- =======================================================
  * Template Name: Online Clinic.
  ======================================================== -->

  <style>
    input.form-control,
    select.form-select {
      max-width: 415px;

    }

    .card {
      padding: 10px;
      border: none;
    }

    .form-group {
      background-color: transparent;
    }

    .appointment-btn.scrollto {
      padding: 10px !important;
      position: relative;
      top: 85%;
      width: 159px;
    }

    .header {
      margin-top: 75px;
    }

    .body {
      background: #222225;
      color: white;
      margin: 100px auto;
    }

    .rating {
      display: flex;
      flex-direction: row-reverse;
      justify-content: center;
    }

    .rating>input {
      display: none;
    }

    .rating>label {
      position: relative;
      width: 1cm;
      font-size: 2.5vw;
      color: #FFD700;
      cursor: pointer;
      right: 1cm;
      bottom: 5px;

    }

    .ratingdone {
      opacity: 1;
    }


    .rating>label::before {
      content: "\2605";
      position: absolute;
      opacity: 0;
    }

    /* .rating>label:hover:before,
    .rating>label:hover~label:before {
      opacity: 1 !important;
    } */

    .rating>input:checked~label:before {
      opacity: 1;
    }

    /* .rating:hover>input:checked~label:before {
      opacity: 0.4;
    } */
  </style>
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="fa-solid fa-user"></i>
        <?php
        if (isset($_SESSION["Name"])) {
          echo $_SESSION["Name"];
        } ?>
        <!-- <i class="bi bi-envelope"></i> <a href="mailto:contact@example.com">contact@example.com</a>
        <i class="bi bi-phone"></i> +1 5589 55488 55 -->
      </div>
      <div class="d-none d-lg-flex social-links align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://web.facebook.com/zaid.almasarwa.1" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="../index.php"><img src="../images/logo.gif"></a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="../index.php">Home</a></li>
          <li><a class="nav-link scrollto active">My Appointments</a></li>
          <!-- <li><a class="nav-link scrollto" href="login.html">Login</a></li>
          <li><a class="nav-link scrollto" href="sign_up.html">Sign Up</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Appointment Section ======= -->
  <section id="appointment" class="appointment section-bg">
    <div class="container">
      <div class="section-title">
        <h2 class="header">My Appointments</h2>
        <div class="alert alert-success alert-dismissible fade show d-flex justify-content-center align-items-center" id="success" role="alert">
          <?php
          if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            @$note = $_REQUEST['note'];
            echo $note;
          }
          ?>
          <button type="button" id="closeFun" class="btn close float-end" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </div>
      <?php
      // $SQL = "SELECT * FROM doctor WHERE specialty = '$sp' AND location_Doc = '$loc'";

      $sql = "SELECT * FROM appointment Where email = '" . $_SESSION["Email"] . "'";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_Assoc($result)) {
          echo "

        <div class='row'>
            <div class='col-md-5' style='border:1px solid #3AB19B;display:inline-flex;'>
            <div class='col-md-8 form-group card'>
              <h3 class='text-decoration-underline'>Patient Info</h3>
              <h4><i class='bi bi-person-circle' aria-hidden='true' style='color:#3AB19B;'></i>" . $row['FName'] . "</h4>
              <p>Relative : " . $row['Realitive_Realation'] . "</p>
              <p><i class='fa fa-birthday-cake' style='color:#3AB19B;'></i>" . $row['patient_age'] . "</p>
              <p><i class='fa-solid fa-clock' style='color:#3AB19B;'></i>" . $row['time_hour'] . "</p>
              <p><i class='bi bi-telephone-fill' style='color:#3AB19B;'></i><a href='tel:'>" . $row['phone'] . "</a></p>
              <div class='d-flex mx-auto'>
              <button type='button' class='btn btn-danger mx-2 cancel' data-app_id = '" . $row['id'] . "' data-times = '" . $row['time_hour'] . "'>Cancel</button>
              </div>
              </div>
              </div>
              ";

          $SQL = "SELECT * FROM doctor WHERE id in (SELECT clinic FROM appointment WHERE email = '" . $_SESSION['Email'] . "')";

          $Result = mysqli_query($conn, $SQL);
          if (mysqli_num_rows($Result) > 0) {
            while ($row = mysqli_fetch_Assoc($Result)) {
              $sql1 = "SELECT SUM(rating)/Count(*) as rat FROM rating WHERE Doc_id =" . $row['id'] . "";
              $Result1 = mysqli_query($conn, $sql1);
              $row1 = mysqli_fetch_Assoc($Result1);
              echo "
          <div class='col-md-5' style='border:1px solid #3AB19B;display:inline-flex;'>
          <div class='col-md-8 form-group card'>
          <h3 class='text-decoration-underline'>DR. Info</h3>
              <h4><i class='bi bi-person-circle' aria-hidden='true' style='color:#3AB19B;'></i> " . $row['Name'] . " </h4>
            <div class='rating'>";
              $rat = intval($row1['rat']);
              if ($rat == 5) {
                echo "
              <input type='radio' name='rating' value='5' id='5' checked ><label Class='ratingdone rat' for='5' data-rating_Value = 5 data-doc_id = " . $row['id'] . ">☆</label>";
              } else echo "<input type='radio' name='rating' value='5' id='5'><label for='5' class='rat' data-rating_Value = 5 data-doc_id = " . $row['id'] . ">☆</label>";
              if ($rat == 4) {
                echo "
              <input type='radio' name='rating' value='4' id='4' checked><label Class='ratingdone rat' for='4' data-rating_Value = 4 data-doc_id = " . $row['id'] . ">☆</label>";
              } else echo "<input type='radio' name='rating' value='4' id='4'><label for='4' class='rat' data-rating_Value = 4 data-doc_id = " . $row['id'] . ">☆</label>";
              if ($rat == 3) {
                echo "
              <input type='radio' name='rating' value='3' id='3' checked><label Class='ratingdone rat' for='3' data-rating_Value = 3 data-doc_id = " . $row['id'] . ">☆</label>";
              } else echo "<input type='radio' name='rating' value='3' id='3'><label for='3' class='rat' data-rating_Value = 3 data-doc_id = " . $row['id'] . ">☆</label>";
              if ($rat == 2) {
                echo "
              <input type='radio' name='rating' value='2' id='2' checked><label Class='ratingdone rat'for='2' data-rating_Value = 2data-doc_id = " . $row['id'] . ">☆</label>";
              } else echo "<input type='radio' name='rating' value='2' id='2'><label for='2' data-rating_Value = 3 class='rat' data-rating_Value = 2data-doc_id = " . $row['id'] . ">☆</label>";
              if ($rat == 1) {
                echo "
              <input type='radio' name='rating' value='1' id='1' checked><label Class='ratingdone rat' data-rating_Value = 1 for='1' data-doc_id = " . $row['id'] . ">☆</label>";
              } else echo "<input type='radio' name='rating' value='1' id='1'><label for='1' class='rat' data-rating_Value = 1 data-doc_id = " . $row['id'] . ">☆</label>";
              echo "</div>
              <p><i class='fa fa-stethoscope' aria-hidden='true' style='color:#3AB19B;'></i> " . $row['specialty'] . "</p>
              <p><i class='fa fa-map-marker' aria-hidden='true' style='color:#3AB19B;'></i> " . $row['location_Doc'] . "</p>
              </div>
            
              </div>
              </div>  


            ";
            }
          }
        }
      } else echo "<div>No Doctors </div>";

      ?>
      <script language="JavaScript" type="text/javascript">
        document.querySelectorAll(".cancel").forEach((element) => {
          element.addEventListener("click", () => {
            const id = element.dataset.app_id;
            const times = element.dataset.times;
            location.reload();

            $.ajax({
              url: "appointment1.php",
              type: "post",
              data: {
                cancel: 1,
                times,
                id,
              },
              success() {
                alert("Appointment Canceled");
                element.style.display = "none";
              },
            });
          });
        });

        document.querySelectorAll(".rat").forEach((element) => {
          element.addEventListener("click", () => {
            const rating_Value = element.getAttribute("data-rating_Value");
            const id = element.dataset.doc_id;
            console.log(rating_Value);
            console.log(id);
            $.ajax({
              url: "appointment1.php",
              type: "POST",
              date: {
                ratingdone: 1,
                rating_Value,
                id,
              },
              success(response) {
                //console.log(response);
                alert("Rating Done");
              },
            });
          });
        });
      </script>
  </section><!-- End Appointment Section -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Online Clinic</span></strong>. All Rights Reserved
        </div>

      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script type="module" src="../assets/js/main.js" defer></script>
  <!-- JS BOOTSTRAP -->
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>