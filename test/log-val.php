<?php
include_once("connection.php");
// // if($conn->connect_error){
// //     die("Connection Failed : " .$conn->connect_error);
// // }else{
//     // if(isset($_POST['submit'])){
//         $email = $_POST['email'];
//         $password = $_POST['password'];
    
//         $sql = "SELECT * FROM user WHERE Email='$email' AND Pass='$password' limit 1 ";
//         $result = $conn->query($sql);
//             if($result-> num_rows > 0){
//                 while($row = $result->fetch_assoc()){
//             header('Location: index.php');
//             exit;
//         }
//     }else{
//         header('Location: login.php?result=Some Data Incorrect');
//         exit;
//     }
//     }
//}

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $email = mysqli_real_escape_string($conn, $_POST["email"]);
//     $pass = mysqli_real_escape_string($conn, $_POST["password"]);
//     $sql = "SELECT * FROM user WHERE Email = '$email' AND Pass = '$pass'";
//     $result = mysqli_query($conn, $sql);
//     $row =  mysqli_fetch_assoc($result);
//     $count = mysqli_num_rows($result);
//     if ($count == 1) {
//        $_SESSION["Name"] = $row["Name"];
//        $_SESSION["Email"] = $row["Email"];
//        $_SESSION["Phone"] = $row["phone"];
//        $_SESSION["NavToggle"] = 1;
 
//        echo "<script>window.location.href='index.php';</script>";
//     } else {
//        echo '<script type="text/javascript">alert("Invalid Information, Try again!");</script>';
//     }
//  } 

// $email = $_GET['email'];
// $password = $_GET['password'];
// $CFlag = "0";

// if(empty($email)){
//     $CFlag = "Please Enter Your Information ";
// }else{
//     if(empty($password)){
//         $CFlag = "Please Enter Your Password ";
//     }
// }
// if($CFlag == "0"){
//     header('Location: index.php');
//     exit;
// }else{
//     header('Location: login.php?note='.$CFlag);
//     exit;
// }

// ?>