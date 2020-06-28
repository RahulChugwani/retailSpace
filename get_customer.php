<?php 

$id = session_id();
session_start();

$customername=$_POST['customername'];
$email=$_POST['email'];
$phoneno=$_POST['phoneno'];
$address=$_POST['address'];

//$password=md5($password);
// Database connection
$con = new mysqli("localhost","root","","shop_inventory");
// query
$query ="INSERT INTO `customer` (`customername`, `email`, `phoneno`, `address`) VALUES ('$customername','$email','$phoneno','$address')";
$con->query($query);

$cust_query = "SELECT * FROM customer WHERE customername = '$customername' ";
$result = $con->query($cust_query);
$data = $result->fetch_assoc();

$c_id = $data['id'];
$o_id = $_SESSION['owner_id'];

echo "<script>console.log('Debug Objects: " . $c_id . "  hello ". $o_id ."' );</script>";

$query_oc = "INSERT INTO `owner_cust` (`c_id`, `o_id`) VALUES ( '$c_id' , '$o_id' )";

// to execute error
if($con->query($query_oc)){
	echo "DATA INSERTED SUCCESSFULLY";
}

else{
	echo mysqli_error($con);//if any error occured

}



 ?>