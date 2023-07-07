<?php
include '../connections.php';
session_start();

// CHECK APAKAH SUDAH ADA SESSION
if (!isset($_SESSION['email'])) {
    header("Location: ../../login.php");
}

if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $name = $_POST['name'];
    $telephone = $_POST['telephone'];
    $tanggal_lahir = $_POST['tanggal_lahir'];

    $sql = "UPDATE users SET email='$email', password='$password', name='$name', telephone='$telephone', tanggal_lahir='$tanggal_lahir' WHERE email='$email'";

    if (mysqli_query($CONNECTION, $sql)) {
        header("Location: ../../profile-update.php");
    } else {
        header("Location: ../../profile-update.php");
    }
} else {
    header("Location: ../../index.php");
}
?>