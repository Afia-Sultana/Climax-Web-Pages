<?php
$totalbil=$_GET['totalbill'];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="orderinfo.css">
</head>
<body>
	<?php include "header.php"?>
<br><br><br><br><br>
<form name="orderform" class="orderform" method="post" action="order.php" alignment="center">
<input type="hidden" name="tb" value="<?php echo $totalbil?>">
	 <h1 class="head"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbspOrder Details</h1><br><br><br><br>
	<label name="oname" id="n" class="l1" >Name:</label><br>
	<input type="text" name="iname" id="n"><br><br>
	<label name="oaddress" id="n" class="l2">Address:</label><br>
	<input type="textarea"cols="20" rows="5" name="iaddress" id="n" class="ad"><br><br><br>
 &nbsp &nbsp &nbsp <input id="n" type="submit" class="co"value="Confirm Order">

</form>
<h1>
</h1>
</body>
</html>