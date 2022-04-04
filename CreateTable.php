<?php
$conn = mysqli_connect("localhost", "root", "","climaxshop");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE TABLE IF NOT EXISTS Product (
ID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Name VARCHAR(30) NOT NULL,
Picture VARCHAR(30) NOT NULL,
Price INT(5) NOT NULL,
Size VARCHAR(30) NOT NULL,
Quantity INT(3) NOT NULL,
Material VARCHAR(30) NOT NULL,
Category VARCHAR(30) NOT NULL,
Color VARCHAR(30) NOT NULL,
Description VARCHAR(300) NOT NULL
)";

mysqli_query($conn, $sql);


$sql = "CREATE TABLE IF NOT EXISTS Cart (
CartID VARCHAR(50) NOT NULL ,
ID INT(4) UNSIGNED NOT NULL ,
Name VARCHAR(30) NOT NULL,
Image VARCHAR(30) NOT NULL,
Price FLOAT(5) NOT NULL,
Size VARCHAR(8) NOT NULL,
Quantity INT(3) NOT NULL,
SubTotal FLOAT(5) NOT NULL,
CONSTRAINT pkCart PRIMARY KEY(CartID,ID,Size)
)";

mysqli_query($conn, $sql);


$sql = "CREATE TABLE IF NOT EXISTS User (
Name VARCHAR(50) NOT NULL,
Password VARCHAR(50) NOT NULL,
Email VARCHAR(100) NOT NULL PRIMARY KEY
)";

mysqli_query($conn, $sql);

$sql = "CREATE TABLE IF NOT EXISTS Userorders (
Order_ID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Name VARCHAR(50) NOT NULL,
Address VARCHAR(50) NOT NULL,
Email VARCHAR(100) NOT NULL,
TotalBill FLOAT NOT NULL
)";

mysqli_query($conn, $sql);

mysqli_close($conn);
?>