<?php 
//require "session_check.php";

$item_id = $_POST['item_id'];
$itemname = $_POST['itemname'];
//$email = $_POST['email'];
//$password = $_POST['password'];
$itemprice = $_POST['itemprice'];

//Database Connection

$con =new mysqli("localhost","root","","shop_inventory");

//query

$query = "UPDATE item SET itemname='$itemname',itemprice='$itemprice' WHERE item_id='$item_id'";

//to execute query
if($con->query($query)){
	header("location: ItemDetails.php");
}

else{
	echo mysqli_error($con);  //if any error occured
}

 ?>