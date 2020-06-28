<?php 
//require "session_check.php";

//database connection
$con = new mysqli("localhost","root","","shop_inventory");

$id = $_GET['transaction_id'];

$query = "DELETE FROM transaction WHERE transaction_id='$id'";

if($con->query($query)){
	header("location: PrevTransaction.php");
}

else{
	echo "Error Occured";
}


 ?>