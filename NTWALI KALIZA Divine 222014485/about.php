<?php

session_start();
if (!isset($_SESSION['password'])) {
  header("location:login.php");
}?>

<!DOCTYPE html>
<html>
<head>
	<title>about</title>
	<link rel="stylesheet" type="text/css" href="about.css">
</head>
<body>
	<nav>
  <div class="logo">SKOL PRODUCT MANAGEMENT</div>
  <ul class="nav-links">
    <li><a href="home.php">Home</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="contact.php">Contact</a></li>
    <li><a href="products.php">Products</a></li>  </ul>
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</nav>
		<section id="about">
			<div class="Container">
				<h2>About Our Company</h2>
				<p>We're known for our wide variety of craft beers and we take pride in using high quality ingredients and create unique and flavorful beers.</p>
				<p>Whether you're a beer enthusiast or just looking to try something new, skol has a teaser for every taste.Cheers!</p>
				<div class="data">
					<a href="#" class="hire">Hire Us</a>
				</div>
		</div>

		</section>
	</main>
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