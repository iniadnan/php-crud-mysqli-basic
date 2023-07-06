<?php
include '../connections.php';
session_start();

// CHECK APAKAH SUDAH ADA SESSION
if (!isset($_SESSION['username'])) {
    header("Location: ../../admin/index.php");
}

if (isset($_POST['submit'])) {

    $id = $_POST['id'];
    $vendor = $_POST['vendor'];
    $price = $_POST['price'];
    $from_destination = $_POST['from_destination'];
    $to_destination = $_POST['to_destination'];
    $date_flight = $_POST['date_flight'];
    $time_flight = $_POST['time_flight'];
    $time_arrived = $_POST['time_arrived'];
    $status = $_POST['status'];

    $sql = "UPDATE tickets SET vendor_id='$vendor', price='$price', from_destination='$from_destination', to_destination='$to_destination', date='$date_flight', time_flight='$time_flight', time_arrived='$time_arrived', status='$status' WHERE id='$id'";

    if (mysqli_query($CONNECTION, $sql)) {
        header("Location: ../../admin/ticket.php");
    } else {
        header("Location: ../../admin/edit-ticket.php?id='$id'");
    }
} else {
    header("Location: ../../admin/index.php");
}
?>