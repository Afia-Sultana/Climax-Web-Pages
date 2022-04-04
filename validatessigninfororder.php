<?php
session_start(); 

$email=''; $password='';

$email= test_input($_POST["uemail"]);
$password= test_input($_POST["password"]);
$connect=mysqli_connect("localhost","root","","climaxshop");
$search_query="SELECT * FROM user WHERE Email='$email' && Password='$password'";
$search_result = mysqli_query($connect, $search_query)or die( mysqli_error($connect));
if(mysqli_num_rows($search_result)>0)
{ 
	$row = mysqli_fetch_array($search_result,MYSQLI_BOTH);
	$uemail=$row["Email"];
	$_SESSION["username"]=$uemail;
	//echo $_SESSION["username"];

//$search_query="UPDATE cart SET CartID='$email' WHERE CartID NOT LIKE '%@%.com'";
//$search_result = mysqli_query($connect, $search_query)or die( mysqli_error($connect));



mysqli_close($connect); 
header('location:order.php');
 }
 else
 { 
 	mysqli_close($connect); 
header('location: signinfailfororder.php');
 }


function test_input($data)
{
$data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;      
}


?>