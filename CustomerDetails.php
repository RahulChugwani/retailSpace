 <?php 
require "session.php";

$con = new mysqli("localhost", "root", "", "shop_inventory");

$owner_id = $_SESSION['owner_id'];

$query = "SELECT * FROM customer WHERE id IN (SELECT c_id FROM owner_cust where o_id = '$owner_id' ) ";
//(SELECT c_id FROM owner_cust where o_id = '$_SESSION['owner_id']' )
$result = $con->query($query);

?>
<head>
	<title> Customer Details </title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<div class="header">
	  <div class="header-right">
		<a class="active" href="#"><h1>Retail Enterprise</h1></a>
	  </div>
</div>

<div class="container">
<br>
<h4> <u>Customer Details</u></h4>
<br>
  <table class="table table-bordered" border="1" cellspacing="5" cellpadding="5" rules="all">
  <thead>
  	<tr>
  		<th>Srno</th>
  		<th>Customername</th>
  		<th>Email</th>
  		<th>Phoneno</th>
  		<th>Address</th>
  		<th>Action</th>
  		<th>Delete</th>
  	</tr>
</thead>
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
  <p><a class="btn btn-primary btn-lg" href="index.php"><span class="glyphicon glyphicon-log-out"> Logout</span></a></p>
  </div>

 