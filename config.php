<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kkngabut_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

/* check the connection */
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>