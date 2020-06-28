<?php

require "session.php";
$find_city=$_POST['find_city'];

$con = new mysqli("localhost","root","","shop_inventory");

$owner_id = $_SESSION['owner_id'];

$query = "SELECT * FROM customer where address = '$find_city' AND id IN (SELECT c_id FROM owner_cust where o_id = '$owner_id' )";
$result = $con->query($query);
//$data = $result->fetch_object();

?>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>

</head>
<div class="header">
	  <div class="header-right">
		<a class="active" href="#"><h1>Shop Inventory Management</h1></a>
	  </div>
</div>
<div class="container">
<br>
<h4> <u>Customer Details</u></h4>
<br>
<table class="table table-bordered" border="1" cellspacing="5" cellpadding="5" rules="all">
  	<tr>
  		<th>Srno</th>
  		<th>Customername</th>
  		<th>Email</th>
  		<th>Phoneno</th>
  		<th>Address</th>
  		<th>Action</th>
  		<th>Delete</th>
  	</tr>

<?php 
while ($data = $result->fetch_assoc()) {
	echo "<tr>";
		echo "<td>".$data['id']."</td>";
		echo "<td>".$data['customername']."</td>";
		echo "<td>".$data['email']."</td>";
		echo "<td>".$data['phoneno']."</td>";
		echo "<td>".$data['address']."</td>";
		echo "<td><a href=editcustomer.php?id=".$data['id'].">Edit</td>";
		echo "<td><a href=deletecustomer.php?id=".$data['id'].">Delete</td>";

	echo "</tr>";
}

 ?>
  </table>
  </div>