<?php

session_start();
if (!isset($_SESSION['password'])) {
  header("location:login.php");
}


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="product.css">
</head>
<body>
<nav>
  <div class="logo">SKOL PRODUCT MANAGEMENT</div>
  <ul class="nav-links">
 <li><a href="home.php">Home</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="contact.php">Contact</a></li>
    <li><a href="products.php">Products</a></li> 
    <li><a href="#">Shop</a></li>
  </ul>
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</nav>
	<div class="products-container">
  <div class="product-card">
   <a href="productbuy.php"> <img src="product 1.png" alt="Product 1">
    <h3>Product 1</h3>
    <p>1000RWF</p></a>
  </div>
  <div class="product-card">
    <a href="productbuy.php">
    <img src="product 2.png" alt="Product 2">
    <h3>Product 2</h3>
    <p>1200RWF</p></a>
  </div>
  <div class="product-card">
    <a href="productbuy.php"><img src="product 3.png" alt="Product 3">
    <h3>Product 3</h3>
    <p>1000RWF</p></a>
  </div>
  
</div>
<footer>
  <div class="footer-container">
    <div class="footer-section">
      <h4>About Us</h4>
      <p>We take pride in using high quality ingredients and create unique flavorful beers.we got a teaser for every taste.Cheers!</p>
    </div>
    <div class="footer-section">
      <h4>Website Important Pages</h4>
      <ul>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Terms and Conditions</a></li>
        <li><a href="#">Refund Policy</a></li>
      </ul>
    </div>
   
    </div>
  </div>
  <div class="footer-bottom">
    <p>&copy; 2024 My Website. All rights reserved.</p>
  </div>
</footer>

</body>
</html>