<?php 

$connect=mysqli_connect("localhost","root","","climaxshop");
$subtotl='';
$carttotal='';
$search_result = mysqli_query($connect, $search_query)or die( mysqli_error($connect));
if(mysqli_num_rows($search_result)<1)
{
	echo "no item in cart";
}
else
{

'<table class="carttable">
	<tr class="r1">
<td>Image</td>
<td>ProductName</td>
<td>Price</td>
<td>Quantity</td>
<td>SubTotal</td>
	</tr>'
if(mysqli_num_rows($search_result)>0)
{
  while($row = mysqli_fetch_array($search_result,MYSQLI_BOTH))
 {
echo'<tr><td><img src="./image/'.$row["Image"].'.jpg" width="100" height="100"></td>
     <td>'.$row["Name"].'</td>
      <td>$'.$row["Price"].'</td>
      <td>'.$row["Quantity"].'</td>
      <td>$'.$row["SubTotal"].'</td></tr>';
$subtotl+=$row["SubTotal"];
 }
}
$carttotal=$subtotl+250;

</table>
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
 <a href="Home.php"><BUTTON class="cshipping">Continue Shopping</BUTTON></a>&nbsp &nbsp &nbsp
 <a href="Order.php"><BUTTON class="checkout">Proceed to Checkout</BUTTON></a>
</div>
}
?>