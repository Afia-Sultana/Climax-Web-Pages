<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="Header.css">
  <title>Climax</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
</head>
<body>
<script type="text/javascript" src="Header.js"></script>
<!--HEADER-->
<div class="Header">

  <div class="Logo" onclick="location.reload()">
    <!--Brand Logo-->
    <img src="./image/logo.png" alt="Climax Logo" width="70" height="70">
      <a href="Home.php">CLIMAX</a>
  </div>
    
  <div class="RightHeader">
    <div class="Search-box">

      <!--Search-->    
      <input type="text" name="SearchProduct" placeholder="Search Product" class="Search-text" id="txt" oninput="enable()">
          <a href="Search.php" 
          onclick="window.location=this.href+'?name='+document.getElementById('txt').value;return false;" 
          class="Search-button" id="btn"><i class="fa fa-search" aria-hidden="true"></i></a>
    </div>
    
  <!--Cart-->
  <a href="cart.php" class="Cart"><i class="fa fa-shopping-cart " aria-hidden="true">
    <?php 
    if (isset($_SESSION['cartcount'])) {
       $count=$_SESSION['cartcount'];
       echo "<span>[$count] </span>";
     }
     else {
        echo "<span>[0]</span>";
       }  ?>
  </i></a>

  <!--Log in to website-->
  <a href="signin.php" class="signin">
  <?php 
    if (isset($_SESSION['username'])) {
       //$account=$_SESSION['username'];
       echo "<span> <i class='fa fa-sign-out' aria-hidden='true'></i> </span>";
     }
     else {
        echo "<span><i class='fa fa-sign-in' aria-hidden='true'></i></span>";
       }  ?>
         
       </a>
  </div>
</div>

</body></html>