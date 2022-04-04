<?php
$conn = mysqli_connect("localhost", "root", "");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE DATABASE IF NOT EXISTS climaxshop";
mysqli_query($conn, $sql);

mysqli_close($conn);
?>