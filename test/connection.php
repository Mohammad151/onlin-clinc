<?php
$servername = $_SERVER['SERVER_NAME'];
$username = "username";
$password = "password";
$conn = new mysqli($servername, "root", "", "online-clinc");
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
