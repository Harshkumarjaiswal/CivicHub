<?php

// Create connection
$conn = mysqli_connect('localhost', 'root', '', 'logindb');

if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}
?>