<?php 
//require "session_check.php";

$id = $_POST['id'];
$customername = $_POST['customername'];
$email = $_POST['email'];
$phoneno = $_POST['phoneno'];
$address = $_POST['address'];

//Database Connection

$con =new mysqli("localhost","root","","shop_inventory");

//query

$query = "UPDATE customer SET customername='$customername',email='$email',phoneno='$phoneno',address='$address' WHERE id='$id'";

//to execute query
if($con->query($query)){
	header("location: CustomerDetails.php");
}

else{
	echo mysqli_error($con);  //if any error occured
}

 ?>