<?php 
//require "session_check.php";

$con = new mysqli("localhost","root","","shop_inventory");

$id = $_GET['id'];


$query = "SELECT * FROM customer WHERE id='$id'";

$result = $con->query($query);
$data = $result->fetch_object();

 ?>

 <!DOCTYPE html>
<html>
<head>
	<title>Edit Form</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
	
</head>
<body>
<div class="header">
	  <div class="header-right">
		<a class="active" href="#"><h1>Shop Inventory Management</h1></a>
	  </div>
</div>
	<div class="container">
	<div class="loginContainer">
		<div class="card border-info text-center">
			<div class="card-header">
			  <h4><span class="glyphicon glyphicon-edit"></span> Edit Customer Details </h4>
			</div>
			<br>
			<div class="card-body">
		<form action="update.php" method="post">
			<input type="hidden" class="form-control mb-3"  name="id" value="<?php echo $data->id?>">
			<p>
				<input type="text" class="form-control mb-3"  name="customername" placeholder="Customer_name" value="<?php echo $data->customername;?>">
			</p>
			<p>
				<input type="email" class="form-control mb-3"  name="email" placeholder="Email" value="<?php echo $data->email;?>">
			</p>
			<p>
				<input type="phoneno" class="form-control mb-3"  name="phoneno" placeholder="PhoneNo" value="<?php echo $data->phoneno;?>">
			</p>
			<p>
				<input type="text" class="form-control mb-3"  name="address" placeholder="Address" value="<?php echo $data->address;?>">
			</p>
			<br>
			<p>
				<input type="submit" value="Update Customer">
			</p>
		</form>
		</div>
		</div>
		</div>
		</div>
</body>
</html>