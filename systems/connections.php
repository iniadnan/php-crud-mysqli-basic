<?php
$SERVERNAME = "localhost";
$USERNAME = "root";
$PASSWORD = "";
$DBNAME = "db_uas";

// CREATE CONNECTION
$CONNECTION = new mysqli($SERVERNAME, $USERNAME, $PASSWORD, $DBNAME);

// CHECK CONNECTION
if ($CONNECTION->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>