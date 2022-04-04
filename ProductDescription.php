<?php
session_start();
require_once('CreateDatabase.php');
$connect=mysqli_connect("localhost","root","","climaxshop");
$search_query;
if(isset($_GET["pid"])){
$nam = $_GET["pid"];
$search_query="SELECT * FROM Product WHERE ID='$nam'";
}
//$nam="DJ Fancy Drop Earring For Women 24K Gold Plated";
$catagory='';
$product='';
$quickContent='';
$detail='';
$spec='';
$psize='';

$search_result = mysqli_query($connect, $search_query)or die( mysqli_error($connect));
if(mysqli_num_rows($search_result)>0){
  while($row = mysqli_fetch_array($search_result,MYSQLI_BOTH))
 {
  $avaliable=$row["Quantity"];
$spec.=$row["Description"];
$color=$row["Color"];
$material=$row["Material"];
  $product .= '
  
        <div class="ProductImage">
        <img src="./image/'.$row["Picture"].'.jpg" width="100%" height="auto">
        <input type="hidden" name="cid" value="'.$row["ID"].'">
       <INPUT type="hidden" name="cimage" value="'.$row["Picture"].'">
       <INPUT type="hidden" name="cname" value="'.$row["Name"].'">
       <INPUT type="hidden" name="cprice" value="'.$row["Price"].'">
        </div>  
  ';
  $catagory.=$row["Category"];
if($catagory=="Clothing")
{
 $psize.= '<select name="csize" >
  <option>L</option>
  <option selected>M</option>
  <option>S</option>
  </select>';
}
if($catagory=="Shoes")
{
  $psize.= '<select name="csize">
  <option>34</option>
  <option>35</option>
  <option selected>36</option>
   <option>37</option>
    <option>38</option>
     <option>39</option>
  </select>';
}
$detail.='
<p class="pname">'.$row["Name"].'</p>
<p class="PPrice">$'.$row["Price"].'</p>';

;

 }
}
 else
 {
  $product="No item related to your search";
 }
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="QuickView.css">
  <script type="text/javascript" src="description.js"></script>
  <title>product description</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="description.css">
  <script type="text/javascript" src="QuickView.js"></script>
</head>
<body>

<!--HEADER-->
<?php include "header.php";?>
<br><br>
<div class ="productdetails" >
  <form action="cart.php" method="post" class="descform">
    <?php 
    echo $product;
    ?>
    <div class="detail">
        <?php echo $detail;
        if($catagory=="Clothing" || $catagory=="Shoes")
        {
        echo "Size".'&nbsp &nbsp &nbsp';
        echo $psize;
        }
        ?>
        <br><br>
        Quantity:<br>
        <div class="QuickViewQuantity">
        <button type="button" onclick="decrementQty()" class="QuickViewButton" id="QtyButton">-</button>
          <input name="qty" value="1" id="QtyInput" type="number" min="1" max="<?php echo $avaliable ?>">
          <button type="button" onclick="incrementQty()" class="QuickViewButton" id="QtyButton">+</button><br>
      </div><br>
        
        In Stock: &nbsp &nbsp &nbsp <?php echo $avaliable ?>
        <br>
        <p >Color: <?php echo $color;?></p>
        <p >Material: <?php echo $material;?></p>
        Shipping &nbsp $250
        <h3>specifications</h3>
        <p class="specification"><?php echo $spec;?></p><br>
        <INPUT type="submit" class="addtocart" value="Add to Cart">
    </div>
    <div class="service">
    <h3 id="Services">Services</h3>
    <ul type="circle">
    <li>Cash On Delivery Available</li>
    <li>No Warranty</li>
    <li>Delivered within 6-10 Working Days</li>
    </ul>
    </div>
  </form>
</div>
</body>
</html>