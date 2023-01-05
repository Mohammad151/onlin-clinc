
<?php
include_once "connection.php";
session_start();

if (isset($_POST['ratingdone'])) {
    $id = $_POST['id'];
    $email = $_SESSION["Email"];
    $ratvalue = $_POST['rating_Value'];
    $sql = "INSERT INTO rating (Doc_id,user_Email,rating) VALUES ( '$id' , '$email', '$ratvalue' )";
    $result = mysqli_query($conn, $sql);
}

if (isset($_POST['done'])) {
    $sql = "UPDATE appointment set status = 1 where id = '" . $_POST['id'] . "'";
    $result =  mysqli_query($conn, $sql);
}

if (isset($_POST['cancel'])) {
    $sql = "DELETE FROM appointment WHERE id = '" . $_POST['id'] . "'";
    $result = mysqli_query($conn, $sql);
    $sql = "UPDATE doc_time SET isBooking = 0 WHERE times = '" . $_POST['times'] . "' AND id = '" . $_POST['id'] . "'";
    $result = mysqli_query($conn, $sql);


}
?>