<?php

include '../connections.php';

session_start();

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($CONNECTION, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['email'] = $row['email'];
        $_SESSION['name'] = $row['name'];
        header("Location: ../../index.php");
    } else {
        header("Location: ../../login.php");
    }
} else {
    header("Location: ../../index.php");
}

?>