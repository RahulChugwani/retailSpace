<?php 
//require "session_check.php";

//database connection
$con = new mysqli("localhost","root","","shop_inventory");

$id = $_GET['id'];

$query = "DELETE FROM customer WHERE id='$id'";

if($con->query($query)){
	header("location: CustomerDetails.php");
}

else{
	echo "Error Occured";
}


 ?>