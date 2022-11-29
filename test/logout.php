<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["Name"]);
header("Location:index.php");
?>