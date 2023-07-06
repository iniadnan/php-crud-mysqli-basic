<?php
include '../connections.php';
session_start();

// CHECK APAKAH SUDAH ADA SESSION
if (!isset($_SESSION['email'])) {
    header("Location: ../../admin/index.php");
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
    $email = $_POST['email'];
    $flight_id = $_POST['flight_id'];
    $booking_id = $_POST['id'];
    $total = $_POST['total'];
    $status = "sukses";

    $sql = "INSERT INTO transactions (id, user_email, ticket_flight, booking_id, total, status) VALUES ('$id','$email','$flight_id', '$booking_id', '$total', '$status')";
    if (mysqli_query($CONNECTION, $sql)) {
        $sql2 = "UPDATE bookings SET status='sukses' WHERE id = '$booking_id'";
        mysqli_query($CONNECTION, $sql2);
        header("Location: ../../admin/transaction.php");
    } else {
        header("Location: ../../admin/booking.php");
    }
} else {
    header("Location: ../../admin/index.php");
}
?>