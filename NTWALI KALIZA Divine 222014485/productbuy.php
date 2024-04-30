<?php
$conn=new mysqli('localhost','root','','kadi');
if (isset($_POST['btn'])) {
$productname=$_POST['product_name'];
$boxes=$_POST['boxes'];
$amount=$_POST['amount'];
$date=$_POST['date'];
$buy="INSERT INTO products VALUES ('','$productname','$boxes','$amount','$date')";
$check=mysqli_query($conn,$buy);

if ($check) {
	echo "product successfull bought ";
}
else
{
	echo "failed";
}


}

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>update</title>
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


	<form method="POST" action="">
		<table border="1" cellspacing="0">
        <tr>
        	<td colspan="2" class="head">update and change</td>
        		
        	</tr>
        <tr>
        <div class="form-group"><td><label for="product">product_name</label></td>
        <td><input type="text" class=form-control name="product_name" placeholder="enter product name"></td>
    </div></tr>
            <tr>
        <div class="form-group"><td><label for="boxes">boxes</label></td>
        <td><input type="text" class=form-control name="boxes" placeholder="enter product boxes"></td>
    </div></tr>
            <tr>
        <div class="form-group"><td><label for="product">amount</label></td>
        <td><input type="text" class=form-control name="amount" placeholder="enter amount"></td>
    </div></tr>
    <div class="form-group"><td><label for="date">date</label></td>
        <td><input type="date" class=form-control name="date" placeholder="enter date"></td>
    </div></tr>

    <td colspan="2"><button type="submit" name="btn">BUY</button></td>
			
		</table>
		
	</form>
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
<style type="text/css">
	
	nav {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: #333;
  padding: 10px;
}

.logo {
  color: #fff;
  font-size: 24px;
  font-weight: bold;
}

.nav-links {
  display: flex;
  list-style: none;
}

.nav-links li {
  margin-right: 20px;
}

.nav-links a {
  color: #fff;
  text-decoration: none;

}
.nav-links a:hover{

  width: 50px;
  background-color: grey;
  color: black;
}
footer {
  background-color: #333;
  color: #fff;
  padding: 20px 0;
}

.footer-container {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  max-width: 1200px;
  margin: 0 auto;
}

.footer-section {
  flex: 1 0 200px;
  margin: 10px;
}

.footer-section h4 {
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 10px;
}

.footer-section ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.footer-section li {
  margin-bottom: 5px;
}

.footer-section a {
  color: #fff;
  text-decoration: none;
}

.footer-bottom {
  background-color: #222;
  text-align: center;
  padding: 10px 0;
}

.footer-bottom p {
  margin: 0;
}
table{

width: 40%;
font-family: sans-serif;
text-transform: capitalize;
padding: 40px;
border: none;
box-shadow: 4px 10px 20px black;
margin-left: 350px;

}
input{
padding: 15px;
width: 90px;

}
button
{
	padding: 15px;
	background-color: #007bff6b;
	border: none;
	width: 80px;
	cursor: pointer;
}
.head
{
	text-align: center;
	font-family: sans-serif;
	font-size: x-large;
	text-transform: uppercase;
}
</style>

</body>
</html>