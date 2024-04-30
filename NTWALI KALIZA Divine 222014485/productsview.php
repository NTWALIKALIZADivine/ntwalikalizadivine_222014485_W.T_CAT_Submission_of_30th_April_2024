<?php
$conn=new mysqli('localhost','root','','kadi');
$select="SELECT * FROM products";
$cc=mysqli_query($conn,$select);
?>
<table border="1" cellspacing="0">
	<tr>
		<td colspan="5">PRODUCTS</td>
	</tr>

	<tr>
		<td>
			id
		</td>
				<td>
			productname
		</td>
				<td>
			boxes
		</td>
				<td>
			amout
		</td>
				<td>
			date added
		</td>
		<td>
		update
		</td>
		<td>
			delete
		</td>

	</tr>
	<tr>
		<?php
        while ($row=mysqli_fetch_assoc($cc)) {
       
		?>
    <td><?php echo $row['id'];?></td>
    <td><?php echo $row['product_name'];?></td>
    <td><?php echo $row['boxes'];?></td>
    <td><?php echo $row['amount'];?></td>
    <td><?php echo $row['date_added'];?></td>
    <td>
    <a href="update.php?edit=<?php echo $row['id'];?>"><button>UPDATE</button></a>
    </td>
    <form action="delete.php" method="POST">
    <td>
    	<input type="hidden" name="id" value="<?php echo $row['id'];  ?>">
    	<input type="submit" name="" value="delete">
    </td>

    </form>
	</tr>
<?php } ?>
</table>