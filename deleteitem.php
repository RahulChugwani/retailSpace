<?php 
//require "session_check.php";

//database connection
$con = new mysqli("localhost","root","","shop_inventory");

$id = $_GET['item_id'];

$query = "DELETE FROM item WHERE item_id='$id'";

if($con->query($query)){
	header("location: ItemDetails.php");
}

else{
	echo "Error Occured";
}


 ?>