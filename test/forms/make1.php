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

    .header {
      margin-top: 75px;
    }
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
          <li><a class="nav-link scrollto active" href="book_appoinment.html">Appointment</a></li>
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

        <h2 class="header">Search on Doctors</h2>
        <p>Book with the best doctors and clinics in Jordan now</p>
        <p>Choose your location and the specialty of the clinic you want</p>

      </div>
      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $_SESSION["DocLoc"] = $_POST["location"];
        $_SESSION["clinic"] = $_POST["clinic"];
        echo "<script>window.location.href='doctors.php';</script>";
      }
      ?>
      <form method="POST" action='' role="form" class="php-email-form">
        <div class="row">
          <div class="col-md-4 form-group mt-3">
            <select name="location" id="Location" class="form-select">
              <option value="">Location</option>
              <option value="Irbid">Irbid</option>
              <option value="Ajloun">Ajloun</option>
              <option value="Jerash">Jerash</option>
              <option value="Mafraq">Mafraq</option>
              <option value="Balqa">Balqa</option>
              <option value="Amman">Amman</option>
              <option value="Zarqa">Zarqa</option>
              <option value="Madaba">Madaba</option>
              <option value="Alkarak">Alkarak</option>
              <option value="Tafilah">Tafilah</option>
              <option value="Maan">Maan</option>
              <option value="Aqaba">Aqaba</option>
            </select>
            <div class="validate"></div>
          </div>
          <div class="col-md-4 form-group mt-3">
            <select name="clinic" id="clinic" class="form-select">
              <option value="">Search by speciality, treatment, case...</option>
              <option value="Ear Nose and Throat">Ear Nose and Throat</option>
              <option value="Gynecology and Infertility">Gynecology and Infertility</option>
              <option value="Orthopedic and Fracture Surgery">Orthopedic and Fracture Surgery</option>
              <option value="Dermatology and Venereology">Dermatology and Venereology</option>
              <option value="Internal Medicin">Internal Medicin</option>
              <option value="Ophthalmology">Ophthalmology</option>
              <option value="clinic 7">Urology</option>
              <option value="clinic 8">Psychiatry</option>
              <option value="clinic 9">Cosmetic Dermatology and Laser</option>
              <option value="clinic 10">IVF and Infertility</option>
              <option value="clinic 11">Pediatrics and New Born</option>
              <option value="clinic 12">Cardiology</option>
              <option value="clinic 13">Gastroenterology and Endoscopy</option>
              <option value="clinic 14">Neurology</option>
              <option value="clinic 15">Pulmonology</option>
              <option value="clinic 16">Dietitian and Nutrition</option>
              <option value="clinic 17">Andrology and Male Infertility</option>
              <option value="clinic 18">General Surgery</option>
              <option value="clinic 19">Liver Disease</option>
              <option value="clinic 20">Spine Surgery</option>
              <option value="clinic 21">Diabetes and Endocrinology</option>
              <option value="clinic 22">Nephrology</option>
              <option value="clinic 23">Obesity and Laparoscopic Surgery</option>
              <option value="clinic 24">Neurosurgery</option>
              <option value="clinic 25">Vascular Surgery</option>
              <option value="clinic 26">Rheumatology</option>
              <option value="clinic 27">Plastic and Reconstructive Surgery</option>
              <option value="clinic 28">Allergy and Immunology</option>
              <option value="clinic 29">General Practice</option>
              <option value="clinic 30">Family Medicine</option>
              <option value="clinic 31">Pediatric Surgery</option>
              <option value="clinic 32">Cardiac Surgery</option>
              <option value="clinic 33">Hematology</option>
              <option value="clinic 34">Pain Management</option>
              <option value="clinic 35">Physiotherapy</option>
              <option value="clinic 36">Oncology</option>
              <option value="clinic 36">Radiology</option>

            </select>
            <div class="validate"></div>
          </div>
          <!-- <div class="col-md-4 form-group mt-3">
              <input type="number" name="patient_age" class="form-control" id="Age" placeholder="patient's age" data-msg="Please enter at least 4 chars" min="1" max="110">
              <div class="validate"></div>
            </div> -->
        </div>


        <!-- <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
              <div class="validate"></div>
            </div> -->
        <!-- <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
            </div> -->
        <br>
        <br>
        <p><button type="submit" class="mx-auto d-block">Show results <i class="bi bi-search"></i></button></p>
      </form>
    </div>
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
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>