<!DOCTYPE html>
<html>
<head>
	<title>signin</title>
	<link rel="stylesheet" type="text/css" href="signin.css">
	<script type="text/javascript" src="signup.js"></script>
</head>
<body>
<?php include "header.php";?>


<br><br>
<div class="user">
<form  class="signupform" name="signupform" action="validatessignupfororder.php"  method="POST" onsubmit=" return validateform()" > >
	<div class="title1"><h1 >Sign Up</h1></div>
		<div class="border"> <div class="group1"><label id="t1" for="name"> Full Name</label></div>
		<div class="group1"><input type="text" id="name" name="name"></div><br>
	    <div class="group1"><label id="l2" for="email"> Email </label></div>
     <div class="group1"><input type="email" id="email" name="uemail"></div>
    <br>
   
    <div class="group1"><label id="l3" for="password"> Password </label></div>
       <div class="group1"><input type="password" id="password" name="password"></div><br>

       <div class="group1"> <label id="l4" for="repassword">Retype Password </label></div><br>
       <div class="group1"><input type="password" id="repassword" name="repassword"></div><br><br></div>
    <input id="btn1" type="submit" value="Sign up">
	</form></div>
</body>
</html>