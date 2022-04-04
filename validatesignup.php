<?php

$name=''; $email=''; $password='';
echo $email;
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

$name= test_input($_POST["name"]);
$email= test_input($_POST["uemail"]);
$password= test_input($_POST["password"]);
}
$connect=mysqli_connect("localhost","root","","climaxshop");
$search_query="SELECT * FROM user";
$search_result = mysqli_query($connect, $search_query)or die( mysqli_error($connect));
if(mysqli_num_rows($search_result)>0)
{
  while($row = mysqli_fetch_array($search_result,MYSQLI_BOTH))

 {
 	$demail=$row["Email"];
 	echo $demail;
 	if($email==$demail)
 	{ 

 	$emailerror= "email already exist";
 	echo 	$emailerror;
 	header('location: emailalreadyexist.php');
 }
 
}

}

mysqli_close($connect); 

$connect=mysqli_connect("localhost","root","","climaxshop");
$sql = "INSERT INTO user (Name,Password,Email) VALUES ('$name','$password','$email')";
mysqli_query($connect, $sql) or die( mysqli_error($connect));
header('location: signin.php');




function test_input($data)
{
$data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;      
}

	?>
