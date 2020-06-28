<?php 
require "session.php";

$customer_id=$_POST['customer_id'];
$item_name=$_POST['item_name'];
$item_count=$_POST['item_count'];
$trans_date=$_POST['trans_date'];
$status = $_POST['status'];

$date = date('Y-m-d H:i:s');


$con = new mysqli("localhost","root","","shop_inventory");
$owner_id = $_SESSION['owner_id'];


//$password=md5($password);
// Database connection


$query="SELECT * FROM item where itemname = '$item_name' HAVING item_id IN ( SELECT i_id FROM owner_item where o_id = '$owner_id')";
$result = $con->query($query);
$data = $result->fetch_assoc();


if (isset($item_name) && isset($item_count)){
    $transaction_amount = $item_count * $data['itemprice'] ;
	}

$item_id = $data['item_id'];
// query
$Tquery ="INSERT INTO `transaction` (`customer_id`, `item_id` ,`item_count` , `trans_date` ,`status` ,`transaction_amount`) VALUES ('$customer_id','$item_id' , '$item_count' , '$trans_date' ,'$status', '$transaction_amount')";
$con->query($Tquery);

$trans_query = "SELECT * FROM transaction ORDER BY transaction_id DESC LIMIT 1" ; //"SELECT * FROM item WHERE customername = '$customername' ";
$trans_result = $con->query($trans_query);
$trans_data = $trans_result->fetch_assoc();

$t_id = $trans_data['transaction_id'];
$o_id = $_SESSION['owner_id'];

$t_query ="INSERT INTO `owner_trans` (`o_id`, `t_id`) VALUES ('$o_id','$t_id')";
//$con->query($t_query);

// to execute error
if($con->query($t_query)){
	echo "DATA INSERTED SUCCESSFULLY";
}

else{
	echo "error occured";
	echo mysqli_error($con);//if any error occured

}




 ?>
 <p> <a href = "print_transaction.php">PrintTransaction</a></p>