<?php
include_once "connection.php";
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST")
{ 
   $name = $_POST["name"];
   $email = $_POST["email"];
   $pass = $_POST["password"];
   $phone = $_POST["phone"];
   $Sql = "INSERT into user values ('$name','$email','$pass','$phone')";
   if(mysqli_query($conn, $Sql))
   {
      echo "<script>window.location.href='login.php';</script>";
   }
   else{
      echo '<script type="text/javascript">alert("Invalid Information, Try again!");</script>';
   }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>sign up</title>
   <link rel="stylesheet" href="./style.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
      integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
      crossorigin="anonymous" />
   <link rel="preconnect" href="https://fonts.gstatic.com" />
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
      rel="stylesheet" />
   <!-- <link rel="stylesheet" href="style.css"> -->
   <style>
      .logo img{
         width: 110%;
         position: relative;
         left: -35px;
      }
   </style>
</head>

<body>
   <div class="wrapper">
      <div class="welcome">
         <i class="fa fa-smile" id="myDIV"></i>
         <h2 class="description">
            Already have an account?
         </h2>
         <a href = "login.php">
         <button class="switch" id="my-button">Sign In</button>
   </a>
      </div>
      <form class="form" method="POST">
         <h1 class="logo"><img src="images/logo.gif"></h1>


         <h1 class="title">Create Account</h1>
         <p class="desc">
            Please enter your correct information
         </p>
         <div class="input-form">
            <div class="name input-cont">
               <input type="text" class="input" placeholder="Full name" name="name" />
               <div class="icon">
                  <i class="fas fa-user"></i>
               </div>
            </div>
            <div class="email input-cont">
               <input type="email" class="input" placeholder="contact@example.com" name="email"/>
               <div class="icon">
                  <i class="fas fa-envelope"></i>
               </div>
            </div>
            <div class="phone input-cont">
               <input type="phone" class="input" placeholder="Telephone" name="phone"/>
               <div class="icon">
                  <i class="fas fa-phone-square-alt"></i>
               </div>
            </div>
            <div class="password input-cont">
               <input type="password" class="input" placeholder="Password" name="password"/>
               <div class="icon">
                  <i class="fas fa-lock"></i>
               </div>
            </div>
            
         </div>

         <button id="button" class="sign-up">SIGN UP</button>
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
  location.href = 'http://127.0.0.1:5500/login.html';
});
</script>