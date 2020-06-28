 <?php 
require "session.php";

$owner_id = $_SESSION['owner_id'];

$con = new mysqli("localhost", "root", "", "shop_inventory");

$trans_query = "SELECT * FROM transaction ORDER BY transaction_id DESC LIMIT 1 HAVING tranaction_id IN (SELECT t_id FROM owner_trans WHERE o_id = '$owner_id')" ;//"SELECT * FROM item WHERE customername = '$customername' ";
$transResult = $con->query($trans_query);
$trans_data = $transResult->fetch_assoc();

$trans_id = $trans_data['transaction_id'];

$query = "SELECT transaction_id, customer_id, item_id, item_count, transaction_amount, status, customername FROM transaction ,customer where transaction.customer_id == customer.id AND transaction.transaction_id = '$trans_id'";
$result = $con->query($query);

  ?>
  <table border="1" cellspacing="5" cellpadding="5" rules="all">
  	<tr>
  		<td>Srno</td>
  		<td>Customer_name</td>
      <td>Customer_id</td>
  	<!--	<td>Item_name</td> -->
      <td>item_id</td>
  		<td>Item_count</td>
  		<td>Transaction_amount</td>
     <!-- <td>Date</td> -->
      <td>Status</td>
  		<td>Action</td>
  		<td>Delete</td>
  	</tr>

<?php 
while ($data = $result->fetch_assoc()) {
	echo "<tr>";
		echo "<td>".$data['transaction_id']."</td>";
		echo "<td>".$data['customername']."</td>";
    echo "<td>".$data['customer_id']."</td>";
   // echo "<td>".$data['item_name']."</td>";
		echo "<td>".$data['item_id']."</td>";
		echo "<td>".$data['item_count']."</td>";
		echo "<td>".$data['transaction_amount']."</td>";
   // echo "<td>".$data['date']."</td>";
    echo "<td>".$data['status']."</td>";
		echo "<td><a href=edit_transaction.php?id=".$data['id'].">Edit</td>";
		echo "<td><a href=delete_transaction.php?id=".$data['id'].">Delete</td>";



	echo "</tr>";

}

 ?>
  </table>
<p><a href="logout.php">Logout</a></p>
 