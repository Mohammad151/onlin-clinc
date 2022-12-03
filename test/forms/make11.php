
<?php
$servername = "localhost";
$username="root";
$password="";
$dbname = "online-clinc";

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("Location Fialed : " .$conn->connect_error);
}else{

$location = $_POST['location'];
$clinic = $_POST['clinic'];


$stmt = $conn->prepare("INSERT INTO make1(Place,clinic) VALUE (?,?)");
$stmt->bind_param("ss",$location,$clinic,);
$stmt->execute();
echo "Succes";
}
?>