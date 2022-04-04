<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Climax</title>
	 <link rel="stylesheet" type="text/css" href="cart.css">
	   <script type="text/javascript" src="cart.js"></script>
	   <link rel="stylesheet" type="text/css" href="Header.css">
  <link rel="stylesheet" type="text/css" href="QuickView.css">
  <script type="text/javascript" src="QuickView.js"></script>
  <title>product description</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body onload="additemcart()">
	<!--HEADER-->
<?php include "header.php"; ?>


<?php 

$connect=mysqli_connect("localhost","root","","climaxshop");
if(isset($_SESSION['username'])){
      $user=$_SESSION['username'];
    }
    else{
      $user=$_SERVER["REMOTE_ADDR"];
    }


if (isset($_SESSION['cartcount'])) {
  $count=$_SESSION['cartcount'];
  if($count>0)
  {
    echo "
    <style type='text/css'>
      .checkout {
        display: inline-flex;
      }
    </style>";
  }
  else{
    echo "
    <style type='text/css'>
      .checkout {
        display: none;
      }
    </style>";
  }
  # code...
}


if(isset($_POST['delete'])){
  $did=$_POST['deleteItem'];
  $sql = "DELETE FROM cart WHERE ID = '$did' AND CartID='$user'";
   
   if (mysqli_query($connect, $sql)) {
      //echo "Record deleted successfully";
      $search_query="SELECT * FROM cart WHERE CartID='$user'";
      $search_result = mysqli_query($connect, $search_query)or die( mysqli_error($connect));
      $rowcount=mysqli_num_rows($search_result);
      $_SESSION['cartcount']=$rowcount;
      header("Refresh:0");

   } else {
     // echo "Error deleting record: " . mysqli_error($conn);
   }
}

if (isset($_POST['cid'])) {
  # code...
$id=$_POST["cid"];
if(isset($_POST["csize"])){
  $size= $_POST["csize"]  ;
}
else{
  $size="default";
}
$image=$_POST["cimage"];
$name=  $_POST["cname"]; 
$price=  $_POST["cprice"];
$quantity=$_POST["qty"];
$subtotal=$quantity*$price ; 
$search_query="SELECT * FROM Cart WHERE ID='$id' AND CartID='$user'";
$search_result = mysqli_query($connect, $search_query)or die( mysqli_error($connect));
if(mysqli_num_rows($search_result)==0){

 $sql = "INSERT INTO cart (CartID,ID,Image, Name,Price,Size,Quantity,SubTotal ) VALUES ('$user','$id','$image', '$name', '$price','$size','$quantity','$subtotal')";
if(mysqli_query($connect, $sql)){
  $search_query="SELECT * FROM cart WHERE CartID='$user'";
$search_result = mysqli_query($connect, $search_query)or die( mysqli_error($connect));
$rowcount=mysqli_num_rows($search_result);
$_SESSION['cartcount']=$rowcount;
header("Refresh:0");
    echo "Records added successfully.";
} else{

  echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
}
 
// Close connection
mysqli_close($connect);   
}
 else{
  $sql = "UPDATE cart SET Size='$size', Quantity='$quantity',SubTotal='$subtotal' WHERE ID='$id' AND CartID='$user'";
  mysqli_query($connect, $sql);
 }

}
?>

<table class="carttable">
	<tr class="r1">
<td>Image</td>
<td>ProductName</td>
<td>Price</td>
<td>Size</td>
<td>Quantity</td>
<td>SubTotal</td>
<td>Action</td>
	</tr>
	<?php
$connect=mysqli_connect("localhost","root","","climaxshop");
$search_query="SELECT * FROM cart WHERE CartID='$user'";
$subtotl='';
$carttotal='';
$search_result = mysqli_query($connect, $search_query)or die( mysqli_error($connect));
if(mysqli_num_rows($search_result)>0){
  while($row = mysqli_fetch_array($search_result,MYSQLI_BOTH))
 {
echo'<form method="post">
<tr><td><img src="./image/'.$row["Image"].'.jpg" width="80px" height="auto"></td>
     <td>'.$row["Name"].'</td>
      <td>$'.$row["Price"].'</td>
      <td>'.$row["Size"].'</td>
      <td>'.$row["Quantity"].'</td>
      <td>$'.$row["SubTotal"].'</td>
      <input type="hidden" name="deleteItem" value="'.$row["ID"].'">
      <td><BUTTON type="submit" name="delete">&times</BUTTON> 
      <BUTTON name="edit"><a href="ProductDescription.php? pid='.$row["ID"].'">&#9998</a></BUTTON></td>
      </tr>
      </form>';
$subtotl=(int)$subtotl+$row["SubTotal"];
 }
}
$carttotal=(int)$subtotl+250;
?></table>
<br><br><br>
<h3 class="subtotalheading">SUBTOTAL</h3> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
 <div class= "subtotal"> <?php echo "$".$subtotl;?></div>
 <br>
 <h3 class="subtotalheading">SHIPPING</h3> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
 <div class= "subtotal">$250</div>
 <br>
 <h3 class="subtotalheading">CART TOTAL</h3> &nbsp &nbsp &nbsp &nbsp
 <div class= "subtotal"><?php echo $carttotal ?></div>
 <br><br>
 <BUTTON class="cshipping">
  <a href="Home.php" class="contshop">Continue Shopping</a>
</BUTTON>
 
 <BUTTON class="checkout"> <a href="Orderinfo.php ? totalbill=<?php echo $carttotal?>" class="check">Proceed to Checkout</a></BUTTON>

</div>
</body>
</html>