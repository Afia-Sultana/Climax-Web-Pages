<?php session_start();

	if (isset($_SESSION["username"])) 
{
	unset($_SESSION["username"]);
	$connect=mysqli_connect("localhost","root","","climaxshop");
    $sql = "DELETE FROM cart WHERE CartID NOT LIKE '%@%.com'";
   
   if (mysqli_query($connect, $sql)) {
      //echo "Record deleted successfully";
      $search_query="SELECT * FROM cart WHERE CartID=''";
      $search_result = mysqli_query($connect, $search_query)or die( mysqli_error($connect));
      $rowcount=mysqli_num_rows($search_result);
      $_SESSION['cartcount']=$rowcount;
      header("Refresh:0");

   } else {
     // echo "Error deleting record: " . mysqli_error($conn);
   }
  echo '<script Type="javascript">alert("JavaScript Alert Box by PHP")</script>';
	header('location: Home.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="signin.css">
	<script type="text/javascript" src="signin.js"></script>
</head>
<body>
	<?php include "header.php"?>
	<br><br>
  <div class="user">
	<form class="form" name="signinform"  action="validatesignin.php"  method="POST" onsubmit=" return validateform()">
		<h1 class="title">Sign In</h1>
    <div class="border">
		<div  class="group"><label id="l2" for="email"> Email </label></div><br>
    <div  class="group"><input type="email" id="email" name="uemail"></div><br>
    <div class="group"><label id="l3" for="password"> Password </label></div><br>
       <div class="group"><input type="password" id="password" name="password"></div><br>
       <br> <div class="group"><input id="btn1" type="submit" value="Sign In"></div></div>
	</form>
 <div class="row"> <p>Don't Have Account Yet?</p> <a href="signup.php"><button id="btn" class="btn" >Sign up</button></a></div></div>
</body>
</html>