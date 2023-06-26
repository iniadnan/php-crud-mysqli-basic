<?php 
 
include '../connections.php';
 
session_start();

// CHECK APAKAH SUDAH ADA SESSION
if (isset($_SESSION['username'])) {
    header("Location: ../../admin/dashboard.php");
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
 
    $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $result = mysqli_query($CONNECTION, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        $_SESSION['name'] = $row['name'];
        header("Location: ../../admin/dashboard.php");
    } else {
        header("Location: ../../admin/index.php");
    }
}
 
?>