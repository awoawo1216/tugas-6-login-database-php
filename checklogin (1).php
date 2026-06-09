<?php
include 'db.php';

$username = $_POST["username"];
$password = md5($_POST["password"]); // enkripsi password menggunakan MD5

$sql = "SELECT username, password FROM users WHERE username='$username' AND password='$password' LIMIT 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    session_start();
    $_SESSION["admin"] = $username;
    header("Location: http://localhost/modul6/index.php");
} else {
    header("Location: http://localhost/modul6/login.php?error=1");
}
?>
