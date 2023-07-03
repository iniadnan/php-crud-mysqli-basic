<?php
include '../connections.php';
session_start();

// CHECK APAKAH SUDAH ADA SESSION
if (!isset($_SESSION['username'])) {
    header("Location: ../../admin/index.php");
}

if (isset($_POST['submit'])) {

    $id = $_POST['id'];
    $name = $_POST['vendor_name'];

    $sql = "UPDATE vendors SET name='$name' WHERE id='$id'";
    if (mysqli_query($CONNECTION, $sql)) {
        header("Location: ../../admin/vendor.php");
    } else {
        header("Location: ../../admin/edit-vendor.php");
    }
}
?>