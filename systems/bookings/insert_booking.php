<?php
include '../connections.php';
session_start();

// CHECK APAKAH SUDAH ADA SESSION
if (!isset($_SESSION['email'])) {
    header("Location: ../../login.php");
}

if (isset($_POST['submit'])) {

    // RANDOM NUMBER
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
    $ticket_flight = $_POST['ticket_flight'];
    $user_email = $_POST['user_email'];
    $payment = $_POST['payment'];
    $status = "pending";

    $sql = "INSERT INTO bookings (id, ticket_flight, user_email, payment, status) VALUES ('$id','$ticket_flight','$user_email', '$payment', '$status')";
    if (mysqli_query($CONNECTION, $sql)) {
        header("Location: ../../status-pembayaran.php?flight_id=$id");
    } else {
        header("Location: ../../pembayaran.php?flight_id='$ticket_flight'");
    }
} else {
    header("Location: ../../login.php");
}
?>