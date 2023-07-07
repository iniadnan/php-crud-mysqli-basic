<?php
include '../connections.php';
session_start();

// CHECK APAKAH SUDAH ADA SESSION
if (!isset($_SESSION['username'])) {
    header("Location: ../../admin/index.php");
}

if (isset($_POST['submit'])) {

    // RANDOM STRING
    function generateRandomNumber($length = 5)
    {
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    $id = generateRandomNumber(5);
    $name = $_POST['vendor_name'];

    $sql = "INSERT INTO vendors (id, name) VALUES ('$id', '$name')";
    if (mysqli_query($CONNECTION, $sql)) {
        header("Location: ../../admin/vendor.php");
    } else {
        header("Location: ../../admin/add-vendor.php");
    }
}
?>