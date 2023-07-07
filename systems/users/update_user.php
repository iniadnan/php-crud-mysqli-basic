<?php
include '../connections.php';
session_start();

// CHECK APAKAH SUDAH ADA SESSION
if (!isset($_SESSION['email'])) {
    header("Location: ../../login.php");
}

if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $old_password = $_POST['old_password'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $telephone = $_POST['telephone'];
    $tanggal_lahir = $_POST['tanggal_lahir'];

    $sql = "";

    if($old_password == $password) {
        $sql = "UPDATE users SET email='$email', name='$name', telephone='$telephone', tanggal_lahir='$tanggal_lahir' WHERE email='$email'";
    } else {
        $password = md5($password);
        $sql = "UPDATE users SET email='$email', password='$password', name='$name', telephone='$telephone', tanggal_lahir='$tanggal_lahir' WHERE email='$email'";
    }


    if (mysqli_query($CONNECTION, $sql)) {
        header("Location: ../../profile-update.php");
    } else {
        header("Location: ../../profile-update.php");
    }
} else {
    header("Location: ../../index.php");
}
?>