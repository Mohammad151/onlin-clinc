<?php
@include_once "connection.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name'])) {
  $id = $_COOKIE['appid'];
  $name = $_POST['name'];
  $Relative_Relation = $_POST['Relative_Relation'];
  $phone = $_POST['phone'];
  $date = date("Y-m-d H:i:s", time());
  $patient_age = $_POST['patient_age'];
  $message = $_POST['message'];
  $sql = "INSERT INTO appointment(Fname,Realitive_Realation,phone,patient_age,message_sent,clinic,email,history) VALUES ('$name','$Relative_Relation','$phone','$patient_age','$message','$id','" . $_SESSION['Email'] . "','$date')";
  if (mysqli_query($conn, $sql)) {
    echo '<script type="text/javascript">alert("Your request has been successfully submitted");</script>';
  } else {
    echo '<script type="text/javascript">alert("Invalid Information, Try again!");</script>';
  }
}
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
        <h2 class="header">Make an Appointments</h2>

        <p>Book with the best doctors and clinics in Jordan now</p>

      </div>
      <form method="POST" role="form" class="php-email-form">
        <div class="row">
          <div class="col-md-4 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
            <div class="validate"></div>
          </div>
          <div class="col-md-4 form-group">
            <input type="text" name="Relative_Relation" class="form-control" id="Relative Relation" placeholder="Relative Relation" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
            <div class="validate"></div>
          </div>
          <!-- <div class="col-md-4 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="id" id="email" value="" >
            <div class="validate"></div>
          </div> -->
          <div class="col-md-4 form-group mt-3 mt-md-0">
            <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
            <div class="validate"></div>
          </div>
        </div>
        <!-- <div class="col-md-4 form-group ">
              <input type="number" name=" Your Age" class="form-control" id="Age" placeholder="patient's age" data-rule="minlen:4" data-msg="Please enter at least 4 chars" min="1" max="110">
              <div class="validate"></div>
            </div> -->
        <!-- <form action="/action_page.php">
              <label for="birthday">Birthday:</label>
              <input type="date" id="birthday" name="birthday">
              <input type="submit">
            </form> -->
        <div class="row">

          <!-- <div class="col-md-4 form-group mt-3">
            <input type="time" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            <div class="validate"></div>
          </div> -->

          <div class="col-md-4 form-group mt-3">
            <input type="number" name="patient_age" class="form-control" id="Age" placeholder="patient's age" data-msg="Please enter at least 4 chars" min="1" max="110" required>
            <div class="validate"></div>
          </div>

        </div>


        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
          <div class="validate"></div>
        </div>
        <!-- <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
            </div> -->
        <!-- <button type="submit" class="mx-auto d-block">Make an Appointment</button> -->
        <button type="submit" class="mx-auto d-block"><span class="d-none d-md-inline">Make an</span> Appointment</button>

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