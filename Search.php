<?php
session_start();
$connect=mysqli_connect("localhost","root","","climaxshop");
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
$content='';
$quickContent='';

if(isset($_POST['showPopUp'])){
$n=$_POST['showPopUp'];
$search_query="SELECT * FROM Product WHERE ID='$n'";
$search_result = mysqli_query($connect, $search_query)or die( mysqli_error($connect));
if(mysqli_num_rows($search_result)>0){
  while($row = mysqli_fetch_array($search_result,MYSQLI_BOTH))
 {
  $quickContent .= '
  <img src="./image/'.$row["Picture"].'.jpg" width="auto" height="90%">
        <div class="QuickViewContent">
      <span>'.$row["Name"].'</span><br>
      <span class="Pprice">Price: $'.$row["Price"].'</span><br>
      <span class="Pdesc">Description:<br>'.$row["Description"].'</span><br>
      <span >Category: '.$row["Category"].'</span><br>
      <span >Size: '.$row["Size"].'</span><br>
      <span >Color: <span id="Color1">'.$row["Color"].'</span></span>
      <div class="color" id="newColor" style=" background-color:'.$row["Color"].'"> </div><br>
      <span>Material: '.$row["Material"].'</span><br>
      <span class="Availability">Available: '.$row["Quantity"].'</span>
     </div>
  ';
 } 
 echo '<style type="text/css">
        #QuickView {
            display: flex;
        }
        </style>';
}
}
if(isset($_GET["Cat"])){
$Cat = $_GET["Cat"];
$search_query="SELECT * FROM Product WHERE Category='$Cat'";
}
if(isset($_GET["name"])){
$nam=$_GET["name"];
$search_query="SELECT * FROM Product WHERE Name LIKE '%$nam%'";
}

$search_result = mysqli_query($connect, $search_query)or die( mysqli_error($connect));
if(mysqli_num_rows($search_result)>0){
  while($row = mysqli_fetch_array($search_result,MYSQLI_BOTH))
 {
  $content .= '<form method="post">
  <div class="ProductCard">

  <div class="ProductImage">
  <img src="./image/'.$row["Picture"].'.jpg" width="270" height="400">  
  <a href="ProductDescription.php?pid= '.$row["ID"].'" >
  <div class="ProductCardButtons">     
    <button type="submit" name="showPopUp" class="QuickViewIcon" value='.$row["ID"].'>
    <i class="fa fa-info fa-2x" aria-hidden="true" ></i></button>
  </div>
  </a>
  </div>
  <div class="Product">
    <p class="ProductName">'.$row["Name"].'</p>
  <p class="ProductPrice">$'.$row["Price"].'</p>
  </div>
  </div>
  </form>
  ';
 } 
}
 else{
  $content.= 'No item related to your search';
 }
mysqli_close($connect);
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="Header.css">
  <link rel="stylesheet" type="text/css" href="QuickView.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="ProductCard.css">
  <script type="text/javascript" src="QuickView.js"></script>
  <title>SearchProduct</title>
</head>
<body>

<!--HEADER-->
<?php include "header.php";?>
<br>
<?php include "Category.php"; ?>

<!--     Product Cards       -->
<div class="ProductSection">
  <?php echo $content;  ?>
  <!--     QuickView       -->
  <div class="QuickView" id="QuickView">
  <div class="QuickViewContainer" id="QuickViewContainer">
    <span class="close" onclick="closePopUp()" >&times;</span>
      <?php echo $quickContent; ?>
    </div>  
  </div>
</div>

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>


</body>
</html>