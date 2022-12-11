<?php
@include_once "connection.php";
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
    input.form-control,select.form-select{
      max-width: 415px;
    }
    .card{
        padding: 10px;
        border: none;
    }
    .form-group{
        background-color: transparent;
    }
    .appointment-btn.scrollto{
        padding: 10px !important;
        position: relative;
        top: 35%;
        width: 159px;
    }
    .header{
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
        if(isset($_SESSION["Name"])){
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
          <li><a class="nav-link scrollto active" href="make1.php">Appointment</a></li>
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
            <h2 class="header">List of Doctors</h2>
        
            

          </div>
          <form action="Appointment1.php" method="post" role="form" class="php-email-form">
            <div class="row">
            <div class="col-md-8" style="border:1px solid #3AB19B;display:inline-flex;">
            <div class="col-md-3 form-group">
               <img src="../images/user.png" style="width: 50%;">
            </div>
              <div class="col-md-4 form-group card">
                <p><i class="bi bi-person-circle" aria-hidden="true" style="color:#3AB19B;"></i> Ahmad Almasarwa</p>
                <p><i class="fa fa-stethoscope" aria-hidden="true" style="color:#3AB19B;"></i> Dermatology and Venereology</p>
                <p><i class="fa fa-map-marker" aria-hidden="true" style="color:#3AB19B;"></i>   Amman</p>
                <p><i class="fa-solid fa-clock" style="color:#3AB19B;"></i>   Waiting Time :  15 - 20 </p>
                <p><i class="fa-solid fa-eye" style="color:#3AB19B;"></i>     Views : 5030 </p>
                <p style="padding-left:5px ;"><i class="fa fa-dollar-sign" style="color:#3AB19B;"></i>     Fees : 20 JOD </p>
              </div>
              <div class="col-md-2 form-group card">
              </div>
              <div class="col-md-1 form-group">
              <?php
 if ( isset($_SESSION["Name"])){ ?>
       <a href="book_appoinment.php" target="_blank" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a>
      <!-- <a href="forms/book_appoinment.php" target="_blank" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a> -->
<?php }else{ ?>
  <a href="login.php" target="_blank" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a>
<?php  } ?>
            </div>
              </div>
            </div>
            <!-- <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
            </div> -->
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