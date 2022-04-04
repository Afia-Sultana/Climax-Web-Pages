<?php

$itemid=$_GET["cid"];
$connect=mysqli_connect("localhost","root","","test");
 $sql = "DELETE FROM cart WHERE ID=$itemid";
(mysqli_query($connect, $sql));
header('location: showcart.php');











?>