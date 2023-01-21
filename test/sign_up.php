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
     <!-- Favicons -->
  <link href="images/O N L I N E.jpg" rel="icon">

   <!-- <link rel="stylesheet" href="style.css"> -->
   <style>
      .logo img{
         width: 110%;
         position: relative;
         left: -35px;
      }

      
      /* The message box is shown when the user clicks on the password field */
   #message {
  display:none;
  /* background: #f1f1f1; */
  color: #000;
  position: relative;
  padding: 0px 20px;
  margin-top: 10px;
   }

   #message p {
      display: inline;
   text-align: left;
  padding: 0px 35px;
  font-size: 1rem;
   }  

/* Add a green text color and a checkmark when the requirements are right */
   .valid {
  color: green;
   }

   .valid:before {
  position: relative;
  left: -35px;
  content: "✓";
   }

/* Add a red text color and an "x" icon when the requirements are wrong */
   .invalid {
  color: red;
   }

   .invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
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
               <input type="text" class="input" placeholder="Full name" name="name" required/>
               <div class="icon">
                  <i class="fas fa-user"></i>
               </div>
            </div>
            <div class="email input-cont">
               <input type="email" class="input" placeholder="contact@example.com" name="email" require/>
               <div class="icon">
                  <i class="fas fa-envelope"></i>
               </div>
            </div>
            <div class="phone input-cont">
               <input type="phone" class="input" placeholder="Telephone" name="phone" required>
               <div class="icon">
                  <i class="fas fa-phone-square-alt"></i>
               </div>
            </div>
            <div class="password input-cont">
               <input type="password" class="input" id="psw" placeholder="Password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
               <div class="icon">
                  <i class="fas fa-lock"></i>
               </div>
            </div>
            
         </div>

         <div id="message" class="bg-white">
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
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
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>