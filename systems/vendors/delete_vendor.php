<?php
include '../connections.php';
session_start();

// CHECK APAKAH SUDAH ADA SESSION
if (!isset($_SESSION['username'])) {
    header("Location: ../../admin/index.php");
}

if (isset($_POST['submit'])) {

    $id = $_POST['id'];

    $sql1 = "SET FOREIGN_KEY_CHECKS=OFF";
    $sql2 = "DELETE FROM vendors WHERE id='$id'";
    $sql3 = "SET FOREIGN_KEY_CHECKS=ON";

    mysqli_query($CONNECTION, $sql1);

    if (mysqli_query($CONNECTION, $sql2)) {
        mysqli_query($CONNECTION, $sql3);
        header("Location: ../../admin/vendor.php");
    } else {
        mysqli_query($CONNECTION, $sql3);
        header("Location: ../../admin/add-vendor.php");
    }
}
?>