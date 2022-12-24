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
      top: 65%;
      width: 159px;
      text-align: center;
    }

    .header {
      margin-top: 75px;
    }

    .body {
      background: #222225;
      color: white;
      margin: 100px auto;
    }
    form .card i,form .card .bi::before,form .card .fa::before{
      margin: 10px;
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
          <li><a class="nav-link scrollto active">reservations</a></li>
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
        <h2 class="header">List of daily </h2>



      </div>
        
            <?php
            $sql = "SELECT * FROM appointment WHERE clinic = '" . $_SESSION['id'] . "' AND status = 0";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_Assoc($result)) {
                echo
                "<form action='' method='post' role='form' class='php-email-form'>
                <div class='row'>
                <div class='col-md-8' style='border:1px solid #3AB19B;display:inline-flex;'>
                <div class='col-md-6 form-group card'>
                  <h4><i class='bi bi-person-circle' aria-hidden='true' style='color:#3AB19B;'></i>" . $row['FName'] . ' ( ' . $row['Realitive_Realation'] . ' ) ' . " </h4>
                  <p><i class='fa fa-birthday-cake' aria-hidden='true'  style='color:#3AB19B;></i>" . $row['patient_age'] . " </p>
                  <p><i style='color:#3AB19B;' class='bi bi-clock-fill' aria-hidden='true' style='color:#3AB19B;'></i>" . $row['time_hour'] . "</p>
                  <p><i class='bi bi-telephone-fill' style='color:#3AB19B;'></i> <a href=tel:>" . $row['phone'] . "</a></p>
                  <p><i class='bi bi-chat-dots-fill' style='color:#3AB19B;'></i>" . $row['message_sent'] . "</p>
                  </div>
                  
                  <div class='col-md-1 form-group'>
                    <a target='_blank' class='appointment-btn scrollto done' data-app_id = '" . $row['id'] . "'><span class='d-none d-md-inline'>  </span> Done</a>
                  </div>
                </div>
              </div>
              <div class='mb-3'>
                <div class='loading'>Loading</div>
                <div class='error-message'></div>
                <div class='sent-message'>Your appointment request has been sent successfully. Thank you!</div>
              </div>
            </form>
                  ";
              }
            }
            ?>

          </div>
  </section><!-- End Appointment Section -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script language="JavaScript" type="text/javascript">
    document.querySelectorAll(".done").forEach((element) => {
      element.addEventListener("click", () => {
        const id = element.dataset.app_id;
        console.log(id);
        $.ajax({
          url: "appointment1.php",
          type: "post",
          data: {
            done: 1,
            id,
          },
          success() {
            window.location.href = "appdoc.php";
          },
        });
      });
    });
  </script>
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