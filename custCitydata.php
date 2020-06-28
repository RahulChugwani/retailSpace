<?php


header('Content-Type: application/json');

//database

//get connection
$con = new mysqli("localhost","root","","shop_inventory");

if(!$con){
  die("Connection failed: abcdefghij");
}

$query = "SELECT address, COUNT(*) as custCount from customer GROUP BY address" ;
//WHERE customer_id IN (SELECT c_id from owner_cust where o_id = '$owner_id')
$result = $con->query($query);

$data = array();
foreach( $result as $row){
	$data[] = $row;
}

$result->close();
$con->close();


print json_encode($data);

?>