<?php
session_start();
include_once("CreateDatabase.php");
include_once("CreateTable.php");
include_once("InsertData.php");
$connect=mysqli_connect("localhost","root","","climaxshop");
	if(!isset($_SESSION["username"])){
		$user=$_SERVER["REMOTE_ADDR"];
	    $search_query="SELECT * FROM cart WHERE CartID='$user'";
        $search_result = mysqli_query($connect, $search_query)or die( mysqli_error($connect));
        $rowcount=mysqli_num_rows($search_result);
        $_SESSION['cartcount']=$rowcount;
	}
	mysqli_close($connect);
?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="Header.css">
	<link rel="stylesheet" type="text/css" href="ImageSlide.css">
	
	<link rel="stylesheet" type="text/css" href="Section.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="ImageSlide.js"></script>
	<title></title>
</head>
<body onload="showSlides(1)">

	<!--HEADER-->
	<?php include "header.php";?>

<br>
<!--  Categories  -->
<?php include "Category.php"?>


<!--  SlideShow  -->
<br>
<div class="Slider">
		<div class="ImageSlide"><a href="Search.php?Cat=Clothing">
			<img src="./image/slide1.jpg" class="SliderImage" >
			<img src="./image/slide2.jpg" class="SliderImage" >
			<img src="./image/slide3.jpg" class="SliderImage" >
			<img src="./image/slide4.jpg" class="SliderImage" >
			<img src="./image/slide5.jpg" class="SliderImage" ></a>
		</div>
	</div>


<!--  Section1  -->

<div class="SectionContainer">
		<div class="SectionInner">
	<div class="SectionText" >
		Clothing
		<div class="Description">
			Fashion has always been a means of escape,<br> an aspiration full of constant search <br>for beauty inherent in us.
		</div>
		<BUTTON class="SecButton" onclick="window.location.href='Search.php?Cat=Clothing';">Shop Now</BUTTON>
	</div>
	<div class="SectionPicture"><img src="./image/DressSec.jpg" style=" width: 100%; height: auto;"></div>
	
</div>
</div>	
<br>

<div class="SectionContainer">
		<div class="SectionInner">
			<div class="SectionPicture"><img src="./image/JewelSec.jpg" style="width: 100%; height: auto;"></div>
	         <div class="SectionText" >
		     Jewellery
		     <div class="Description">
			Amplify your look with the  <br> hittest trend of jewellery.
		    </div>
		    <BUTTON class="SecButton" onclick="window.location.href='Search.php?Cat=Jewellery';">Shop Now</BUTTON>	
	    </div>	
	    
    </div>
</div>	
<br>
<!--  Section2  -->
<div class="VideoSection">
  <video autoplay muted loop class="video">
  <source src="./image/videospeedtrim.mp4" type="video/mp4">
</video>
<a href="Search.php?Cat=Cosmetics">
<div class="videotext">
   Try our new Mascara 
</div></a>
</div>
<br><br>
<!--  Section3  -->

<div class="GalleryText">
	Gallery
</div><br><br>
<div class="Gallery">

  <div class="GContainer">
  <img src="./image/Gallery1.jpg" class="Gimage" >
  </div>
<div class="GContainer">
  <img src="./image/Gallery2.jpg" class="Gimage" >
</div>
<div class="GContainer">
  <img src="./image/Gallery3.jpg" class="Gimage" >
</div>
<div class="GContainer">
  <img src="./image/Gallery4.jpg" class="Gimage" >
</div>
</div>
<br><br>
<div class="Section3Container">
	<div class="AboutHeading">
		About Climax
	</div><br><br>
<div class="AboutContent">
	<img src="./image/logo.png" class="Aboutimage" width="150px" height="auto">
	<div class="AboutText">
		We integrate modern styling trends and traditional craftsmanship with creative imagination to give people a brand that echoes a unique lifestyle and provides fabric of consistent quality and reliability.Climax pioneers new traditions in fashion with an innovative approach inspired by global fusion; a contemporary and fashion-focused context.<br><br> Yes, it happens every day at Climax that when a customer purchase a product – each time it is a memorable experience for the customer.  “Not just because it is a sale but it is a relationship”. And this relationship really matters to Climax. Climax makes sure everything favors this relationship; from the passion to deliver the quality and to the customer relations for doing this business responsibly.
	</div>
</div>
</div>
</body>
</html>