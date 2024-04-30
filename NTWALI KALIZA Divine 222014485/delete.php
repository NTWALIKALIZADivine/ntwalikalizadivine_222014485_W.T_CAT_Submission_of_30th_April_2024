<?php
$conn=new mysqli('localhost','root','','kadi');
$id=$_POST['id'];
$delete="DELETE FROM products WHERE id='$id'";
$ccc=mysqli_query($conn,$delete);
if ($ccc) {
	header('location:productsview.php');
}


?>