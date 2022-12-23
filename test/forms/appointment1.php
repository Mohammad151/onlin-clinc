
<?php
include_once "connection.php";
session_start();

if (isset($_POST['done'])) {
    $sql = "UPDATE appointment set status = 1 where id = '" . $_POST['id'] . "'";
    $result =  mysqli_query($conn, $sql);
}
?>