<?php
$SERVERNAME = "localhost";
$USERNAME = "root";
$PASSWORD = "";
$DBNAME = "php_crud_mysqli_basic";

// CREATE CONNECTION
$CONNECTION = new mysqli($SERVERNAME, $USERNAME, $PASSWORD, $DBNAME);

// CHECK CONNECTION
if ($CONNECTION->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>