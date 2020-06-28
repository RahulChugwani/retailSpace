<?php 
//require "session_check.php";

$transaction_id = $_POST['transaction_id'];
//$itemname = $_POST['itemname'];
//$email = $_POST['email'];
//$password = $_POST['password'];
$status= $_POST['status'];
?>

<?php
echo $status ;
//Database Connection

$con = new mysqli("localhost","root","","shop_inventory");

//query

$query = "UPDATE transaction SET status='$status' WHERE transaction_id='$transaction_id'";

//to execute query
if($con->query($query)){
	header("location: PrevTransaction.php");
}

else{
	echo mysqli_error($con);  //if any error occured
}

 ?>