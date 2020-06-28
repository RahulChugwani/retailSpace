 <?php 
//require "session_check.php";

$con = new mysqli("localhost", "root", "", "shop_inventory");

$query = "SELECT * FROM transaction order by trans_date ";
$result = $con->query($query);

  ?>
  <head>
  <link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
	
  </head>
 <div class="header">
	  <div class="header-right">
		<a class="active" href="#"><h1>Retail Enterprise</h1></a>
	  </div>
</div>
<div class="container">
<br>
<h4> <u> Transaction Datewise Details</u></h4>
<br>
  <table class="table table-bordered"  border="1" cellspacing="5" cellpadding="5" rules="all">
	<tr>
  		<th>Srno</th>
  		<th>Customer_id</th>
  		<th>Item_id</th>
      <th>Item_count</th>
      <th>Transaction_amount</th>
      <th>Date</th>
      <th>Status</th>
  		<th>Action</th>
  		<th>Delete</th>
  	</tr>
<?php 
while ($data = $result->fetch_assoc()) {
	echo "<tr>";
		echo "<td>".$data['transaction_id']."</td>";
		echo "<td>".$data['customer_id']."</td>";
		echo "<td>".$data['item_id']."</td>";
		echo "<td>".$data['item_count']."</td>";
		echo "<td>".$data['transaction_amount']."</td>";
    echo "<td>".$data['trans_date']."</td>";
    echo "<td>".$data['status']."</td>";

		echo "<td><a href=edit_transaction.php?item_id=".$data['transaction_id'].">Edit</td>";
		echo "<td><a href=delete_transaction.php?item_id=".$data['transaction_id'].">Delete</td>";


  echo  $data['status'] ;
	echo "</tr>";

}


 ?>
  </table>
<p><a href="logout.php">Logout</a></p>
 