<?php 

require "session.php";
$itemname=$_POST['itemname'];
//$email=$_POST['email'];
//$phoneno=$_POST['phoneno'];
$itemprice=$_POST['itemprice'];

//$password=md5($password);
// Database connection
$con = new mysqli("localhost","root","","shop_inventory");
// query
$query ="INSERT INTO `item` (`itemname`, `itemprice`) VALUES ('$itemname','$itemprice')";
$con->query($query);

$item_query = "SELECT item_id FROM item ORDER BY item_id DESC LIMIT 1" ;//"SELECT * FROM item WHERE customername = '$customername' ";
$result = $con->query($item_query);
$data = $result->fetch_assoc();

$i_id = $data['item_id'];
$o_id = $_SESSION['owner_id'];

$i_query ="INSERT INTO `owner_item` (`o_id`, `i_id`) VALUES ('$o_id','$i_id')";
$con->query($i_query);


// to execute error
if($con->query($i_query)){
	echo "DATA INSERTED SUCCESSFULLY";
}

else{
	echo mysqli_error($con);//if any error occured

}



 ?>