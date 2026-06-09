<?php
$servername = "localhost";
$username = "root";
$password = ""; // sesuaikan password MySQL kamu
$dbname = "modul6";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
