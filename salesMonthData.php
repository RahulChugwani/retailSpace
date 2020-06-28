
<?php
/**
 * filename: data.php
 * description: this will return the score of the teams.
 */

//setting header to json
header('Content-Type: application/json');

//database

//get connection
$con = new mysqli("localhost","root","","shop_inventory");

if(!$con){
  die("Connection failed: " . $con->error);
}

//query to get data from the table
$query = " SELECT MONTH(trans_date) as month, COUNT(*) AS orders_made, SUM(transaction_amount) AS sales FROM transaction GROUP BY MONTH(trans_date)";

//BETWEEN ('$m1') AND ('$m2') 

//execute query
$result = $con->query($query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
  $data[] = $row;
}

//free memory associated with result
$result->close();

//for customer_city chart :

//close connection
$con->close();

//now print the data
print json_encode($data);





?>


