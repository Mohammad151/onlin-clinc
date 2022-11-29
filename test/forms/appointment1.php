
<?php
$servername = "localhost";
$username="root";
$password="";
$dbname = "online-clinc";

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("Location Fialed : " .$conn->connect_error);
}else{
$name = $_POST['name'];
$Relative_Relation = $_POST['Relative_Relation'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$patient_age = $_POST['patient_age'];
$location = $_POST['location'];
$clinic = $_POST['clinic'];
$message = $_POST['message'];

$stmt = $conn->prepare("INSERT INTO appointment(Fname,Realitive_Realation,phone,history,Place,clinic,patient_age,message_sent) VALUE (?,?,?,?,?,?,?,?)");
$stmt->bind_param("ssisssis",$name,$Relative_Relation,$phone,$data,$patient_age,$location,$clinic,$message);
$stmt->execute();
echo "Succes";
}
?>