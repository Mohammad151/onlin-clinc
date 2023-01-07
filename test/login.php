<?php
include_once "connection.php";

session_start();
// if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] >0)) {
//    // last request was more than 30 minutes ago
//    session_unset();     // unset $_SESSION variable for the run-time 
//    session_destroy();   // destroy session data in storage
// }
// $_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp


// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//    $email = mysqli_real_escape_string($conn, $_POST["email"]);
//    $pass = mysqli_real_escape_string($conn, $_POST["password"]);
//    $sql = "SELECT * FROM user WHERE Email = '$email' AND Pass = '$pass'";
//    $result = mysqli_query($conn, $sql);
//    $row =  mysqli_fetch_assoc($result);
//    $count = mysqli_num_rows($result);
//    if ($count == 1) {
//       $_SESSION["Name"] = $row["Name"];
//       $_SESSION["Email"] = $row["Email"];
//       $_SESSION["Phone"] = $row["phone"];
//       $_SESSION["NavToggle"] = 1;

//       echo "<script>window.location.href='index.php';</script>";
//    } else {
//       echo '<script type="text/javascript">alert("Invalid Information, Try again!");</script>';
//    }
// }






?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
   <title>Login</title>
   <link rel="stylesheet" href="./style.css" />
   <link rel="preconnect" href="https://fonts.gstatic.com" />
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
   <link rel="stylesheet" href="style.css">
   <style>
      body {
         overflow: hidden;
      }

      .logo img {
         width: 110%;
         position: relative;
         left: -35px;
      }

      
   </style>
</head>

<body>
   <div class="wrapper">
      <div class="welcome">
         <h1>Didn't have an account !</h1>
         <p class="description">
         </p>
         <a href="sign_up.php">
            <button class="switch" id="my-button">Sign Up</button>
         </a>
      </div>
      <?php

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $email = mysqli_real_escape_string($conn, $_POST["email"]);
         $pass = mysqli_real_escape_string($conn, $_POST["password"]);
         $sql = "SELECT * FROM user WHERE Email = '$email' AND Pass = '$pass'";
         $result = mysqli_query($conn, $sql);
         $row =  mysqli_fetch_assoc($result);
         $count = mysqli_num_rows($result);
         if ($count == 1) {
            $_SESSION["Name"] = $row["Name"];
            $_SESSION["Email"] = $row["Email"];
            $_SESSION["Phone"] = $row["phone"];
            $_SESSION["NavToggle"] = 1;

            echo "<script>window.location.href='index.php';</script>";
         } else {
            echo '<script type="text/javascript">alert("Invalid Information, Try again!");</script>';
         }


         $email = $_POST['email'];
         $password = $_POST['password'];
         $CFlag = "0";

         if (empty($email)) {
            $CFlag = "Please Enter Your Information ";
         } else {
            if (empty($password)) {
               $CFlag = "Please Enter Your Password ";
            }
         }
         if ($CFlag == "0") {
            header('Location: index.php');
            exit;
         } else {
            header('Location: login.php?note=' . $CFlag);
            exit;
         }
      }

      ?>

      <form method="POST" action="" class="form">

         <h1 class="logo"><img src="images/logo.gif"></h1>
         <h1 class="title">Login</h1>
         <p class="desc">

         </p>
         <div class="input-form">

            <?php
            if ($_SERVER['REQUEST_METHOD'] == "GET") {
               @$note = $_REQUEST['note'];
               echo $note;
            }
            ?>

            <div class="email input-cont">
               <input type="email" class="input" placeholder="contact@example.com" name="email" />
               <div class="icon">
                  <i class="fas fa-envelope"></i>
               </div>
            </div>

            <div class="password input-cont d-flex">
               <input  type="password" id="psw" class="input" placeholder="Password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" />
               <div class="icon">
                  <i class="fas fa-lock"></i>
               </div>

            </div>
            <!-- <div id="message" class="bg-white">
               <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
               <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
               <p id="number" class="invalid">A <b>number</b></p>
               <p id="length" class="invalid">Minimum <b>8 characters</b></p>
            </div> -->
            <button type="submit" class="sign-in" name="submit">SIGN IN</button>
         </div>
      </form>
      <div class="particle-wrapper">
         <div class="particle">
            <div class="circle"></div>
            <div class="rectangle"></div>
            <div class="triangle"></div>
            <div class="triangle two"></div>
            <div class="square"></div>
            <div class="circle-2"></div>
            <div class="triangle-3"></div>
            <div class="triangle-4"></div>
            <div class="square-2"></div>
            <div class="circle-3"></div>
            <div class="triangle-5"></div>
            <div class="square-3"></div>
            <div class="stethoscope"></div>
         </div>
      </div>
   </div>
</body>

</html>
<script>
   document.getElementById('my-button').addEventListener('click', () => {
      location.href = 'http://127.0.0.1:5500/sign_up.html';
   });
   // var myInput = document.getElementById("psw");
   // var letter = document.getElementById("letter");
   // var capital = document.getElementById("capital");
   // var number = document.getElementById("number");
   // var length = document.getElementById("length");

   // // When the user clicks on the password field, show the message box
   // myInput.onfocus = function() {
   //    document.getElementById("message").style.display = "block";
   // }

   // // When the user clicks outside of the password field, hide the message box
   // myInput.onblur = function() {
   //    document.getElementById("message").style.display = "none";
   // }

   // // When the user starts to type something inside the password field
   // myInput.onkeyup = function() {
   //    // Validate lowercase letters
   //    var lowerCaseLetters = /[a-z]/g;
   //    if (myInput.value.match(lowerCaseLetters)) {
   //       letter.classList.remove("invalid");
   //       letter.classList.add("valid");
   //    } else {
   //       letter.classList.remove("valid");
   //       letter.classList.add("invalid");
   //    }

   //    // Validate capital letters
   //    var upperCaseLetters = /[A-Z]/g;
   //    if (myInput.value.match(upperCaseLetters)) {
   //       capital.classList.remove("invalid");
   //       capital.classList.add("valid");
   //    } else {
   //       capital.classList.remove("valid");
   //       capital.classList.add("invalid");
   //    }

   //    // Validate numbers
   //    var numbers = /[0-9]/g;
   //    if (myInput.value.match(numbers)) {
   //       number.classList.remove("invalid");
   //       number.classList.add("valid");
   //    } else {
   //       number.classList.remove("valid");
   //       number.classList.add("invalid");
   //    }

   //    // Validate length
   //    if (myInput.value.length >= 8) {
   //       length.classList.remove("invalid");
   //       length.classList.add("valid");
   //    } else {
   //       length.classList.remove("valid");
   //       length.classList.add("invalid");
   //    }
   // }
</script>