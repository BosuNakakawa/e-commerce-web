<?php
session_start();

include 'backend/connect.php';
$_SESSION["login"] = false;

if (isset($_POST["email"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM user WHERE `password` = $password";
    $result = mysqli_query($conn, $sql);
    $_SESSION["login"] = true;


    if ($_SESSION["login"] == true) {
        header('location: backend/index.php');
    }
}
?>