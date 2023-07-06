<?php
include '../connections.php';
session_start();

// CHECK APAKAH SUDAH ADA SESSION
if (!isset($_SESSION['username'])) {
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

    $flight_id = generateRandomNumber(5);
    $vendor = $_POST['vendor'];
    $price = $_POST['price'];
    $from_destination = $_POST['from_destination'];
    $to_destination = $_POST['to_destination'];
    $date_flight = $_POST['date_flight'];
    $time_flight = $_POST['time_flight'];
    $time_arrived = $_POST['time_arrived'];
    $status = $_POST['status'];

    $sql = "INSERT INTO tickets (flight_id, price, from_destination, to_destination, date_flight, time_flight, time_arrived, vendor_id, status) VALUES ('$flight_id', '$price', '$from_destination', '$to_destination','$date_flight','$time_flight','$time_arrived','$vendor','$status')";
    if (mysqli_query($CONNECTION, $sql)) {
        header("Location: ../../admin/ticket.php");
    } else {
        header("Location: ../../admin/add-ticket.php");
    }
} else {
    header("Location: ../../admin/index.php");
}
?>