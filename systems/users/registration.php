<?php
include '../connections.php';
session_start();

if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $name = $_POST['name'];
    $telephone = $_POST['telephone'];
    $tanggal_lahir = $_POST['tanggal_lahir'];

    $sql1 = "SET FOREIGN_KEY_CHECKS=OFF";
    $sql2 = "INSERT INTO users (email, password, name, telephone, tanggal_lahir) VALUES ('$email', '$password', '$name', '$telephone','$tanggal_lahir')";
    $sql3 = "SET FOREIGN_KEY_CHECKS=ON";

    mysqli_query($CONNECTION, $sql1);

    if (mysqli_query($CONNECTION, $sql2)) {
        mysqli_query($CONNECTION, $sql3);
        $_SESSION['email'] = $email;
        $_SESSION['name'] = $name;
        header("Location: ../../index.php");
    } else {
        mysqli_query($CONNECTION, $sql3);
        header("Location: ../../login.php");
    }
} else {
    header("Location: ../../login.php");
}
?>