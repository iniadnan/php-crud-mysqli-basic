<?php
    include '../connections.php';
    session_start();
    // CHECK APAKAH SUDAH ADA SESSION
    if (isset($_SESSION['username'])) {
        header("Location: ../../admin/dashboard.php");
    }

    if (isset($_POST['submit'])) {

        // RANDOM STRING
        function generateRandomString($length = 10) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[random_int(0, $charactersLength - 1)];
            }
            return $randomString;
        }

        $id = generateRandomString(10);
        $name = $_POST['vendor_name'];
     
        $sql = "INSERT INTO vendors (id, name) VALUES ('$id', '$name')";
        if (mysqli_query($CONNECTION, $sql)) {
            header("Location: ../../admin/vendor.php");
        } else {
            header("Location: ../../admin/add-vendor.php");
        }
    }
?>