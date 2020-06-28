<?php 
//require "session_check.php";

$con = new mysqli("localhost","root","","shop_inventory");

$transaction_id = $_POST['transaction_id'];


$query = "SELECT * FROM transaction WHERE transaction_id='$transaction_id'";

$result = $con->query($query);
$data = $result->fetch_object();

 ?>

 <!DOCTYPE html>
<html>
<head>
	<title>Edit Form</title>
</head>
<body>
	<h3>Edit Form</h3>
	<form action="update_transaction.php" method="post">
		<input type="hidden" name="transaction_id" value="<?php echo $data->transaction_id?>">
		<p>
			<p>Update status of transaction - <?php echo $data->transaction_id ?></p>

			Status : 

       <!-- Paid :<input type="radio" name="status" value="paid" <?php echo ($status == 'paid') ? 'checked' : ''; ?> >
 unpaid : <input type="radio" name="status" value="unpaid" <?php echo ($status == 'unpaid') ? 'checked' : ''; ?> /> -->
	Paid:<input type="radio" checked="checked" name="status" value="Paid">
		Unpaid:<input type="radio" checked="checked" name="status" value="Unpaid">
			<!--<input type="text" name="status" placeholder="" value="<?php echo $data->itemname;?>">
		</p>
		<p>
			<input type="email" name="email" placeholder="Email" value="<?php echo $data->email;?>">
		</p>
		<p>
			<input type="password" name="password" placeholder="Password" value="<?php echo $data->password;?>">
		</p> 
		<p>
			<input type="text" name="itemprice" placeholder="itemprice" value="<?php echo $data->itemprice;?>">-->
		</p>
		<p>
		        
			<input type="submit" value="Update">
		</p>
	</form>
</body>
</html>