<?php 
	error_reporting(0);
	$name=$_POST['item']; 
	$amt = $_POST['amt'];
	$qty = $_POST['qty'];
	$subtotal = $_POST['subtotal'];
	$total = $_POST['total'];
	$ttl;
	if (isset($_POST['gen_total_amt'])) 
	{
		$subtotal = $amt * $qty;
		$total = $subtotal*10/100;
		$ttl = $subtotal+$total;
	}
?>
	<center>
	<form method="post">
		Item Name :<input type="text" name="item" ><br><br>
		Amount :<input type="text" name="amt"><br><br>
		Quantity :<input type="text" name="qty"><br><br>
		<input type="submit" name="gen_total_amt" value="TOTAL">	
	</form>
	Sub Total :<input type="text" name="subtotal" value="<?php echo $subtotal; ?>">
	<h5 style="color:black;">10% GST applied</h5>
	Total :<input type="text" name="total" value="<?php echo $ttl; ?>"><br><br>
</center>


<?php
	echo "<center>";
	echo "<table border=1>";
	echo "<tr>";
	echo "<th>Name</th>";
	echo "<th>Price</th>";
	echo "<th>Quantity</th>";
	echo "<th>Sub Total</th>";
	echo "<th>Total</th>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>".$name;
	echo "<td>".$amt;
	echo "<td>".$qty;
	echo "<td>".$subtotal;
	echo "<td>".$ttl;
	echo "</tr>";
	echo "</table>";
	echo "</center>";
?>