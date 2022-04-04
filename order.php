<?php session_start();?>
<?php
if(isset($_SESSION["username"]))
{
	//include "header.php";
 //program

	$email=$_SESSION["username"];
   $onamee=$_POST["iname"];
   $oaddresse=$_POST["iaddress"];
   $totlbil=$_POST["tb"];
	$connect=mysqli_connect("localhost","root","","climaxshop");
     $sql = "INSERT INTO userorders (Name,Address,Email,TotalBill ) VALUES ('$onamee','$email','$oaddresse','$totlbil')";
      mysqli_query($connect, $sql)or die( mysqli_error($connect));

      

$sql = "SELECT ID FROM cart WHERE  CartID='$email'";

$search_result = mysqli_query($connect, $sql)or die( mysqli_error($connect));

if(mysqli_num_rows($search_result)>0)
{
  while($row = mysqli_fetch_array($search_result,MYSQLI_BOTH))
 {
    $idd=$row['ID'];
$quantity=$row['Quantity'];
$searchp= "SELECT Quantity FROM product WHERE  ID='$idd'";
$sr = mysqli_query($connect, $searchp);
while($row = mysqli_fetch_array($sr,MYSQLI_BOTH))
 {
    $q=$row['Quantity']-$quantity;
$up="UPDATE product set Quantity='$q' WHERE ID='$idd'";
mysqli_query($connect, $up);
}
}
}


    $sql = "DELETE FROM cart WHERE  CartID='$email'";


   
   if (mysqli_query($connect, $sql)) {
      //echo "Record deleted successfully";
      $search_query="SELECT * FROM cart WHERE CartID='$user'";
      $search_result = mysqli_query($connect, $search_query)or die( mysqli_error($connect));
      $rowcount=mysqli_num_rows($search_result);
      $_SESSION['cartcount']=$rowcount;
      header("Refresh:0");

}
	header('location: orderplaced.php');
}
else
{

	header('location: signinfororder.php');
}


?>