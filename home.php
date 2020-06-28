<!-- <?php 
// database connection
$con = new mysqli("localhost","root","","shop_management");
echo "<pre>";
print_r($con);
?> -->
<?php
	require "session.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title> Shop Inventory Management</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
	<div class="header">
	  <div class="header-right">
		<a class="active" href="#"><h1>Retail Enterprise</h1></a>
	  </div>
	</div>
	<br><br>
	<div class="row container" style="text-align:center">
		<div class="col-md-2"></div>
		<div class="col-md-3">
			<button class="btn btn-default"><a href=" customer.php">Customer Registration & info</a></button>
		</div>
		<div class="col-md-3">
		<button class="btn btn-default"><a href="item.php"> Item Info & update</a></button>
		</div>
		<div class="col-md-3">
		<button class="btn btn-default"><a href="transaction.php"> Transaction Info & addition</a></button>
		</div>
		<div class="col-md-3">
		<button class="btn btn-default"><a href="sales.php"> Sales Info</a></button>
		</div>
		<div class="col-md-1"></div>
	</div>
	
	<!--<h2 align="center"> Shop Inventory Management</h2>
	<p align="center"><a href=" customer.php">Customer registration and info</a>
					  <a href="item.php"> item info and update</a>
					 <a href="transaction.php"> transaction info and addition</a></p>
					 
					 -->
</body>
</html>