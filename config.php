<?php 

$servername = "localhost";
$user = "root";
$password = "";
$db = "barberdb";

$conn = mysqli_connect($servername, $user, $password, $db);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>
