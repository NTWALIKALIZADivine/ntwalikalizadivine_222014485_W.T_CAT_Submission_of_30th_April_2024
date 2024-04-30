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
  <link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
  <nav>
  <div class="logo">SKOL PRODUCT MANAGEMENT</div>
  <ul class="nav-links">
    <li><a href="home.php">Home</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="contact.php">Contact</a></li>
    <li><a href="products.php">Products</a></li>
  </ul>
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</nav>


 <div class="picture-container">
  <div class="picture">
    <img src="1.png" alt="Image 1">
     <div class="text">
  </div>
</div>
  <div class="picture">
    <img src="2.png" alt="Image 2">
     <div class="text">
  </div>
  </div>
  <div class="picture">
    <img src="3.png" alt="Image 3">
     <div class="text">
  </div>
  </div>
</div>
<footer>
  <div class="footer-container">
    <div class="footer-section">
      <h4>About Us</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id felis et ipsum bibendum ultrices.</p>
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