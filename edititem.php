<?php 
//require "session_check.php";

$con = new mysqli("localhost","root","","shop_inventory");

$item_id = $_GET['item_id'];


$query = "SELECT * FROM item WHERE item_id='$item_id'";

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
			  <h4><span class="glyphicon glyphicon-edit"></span> Edit Item Details </h4>
			</div>
			<br>
			<div class="card-body">
				<form action="updateitem.php" method="post">
					<input type="hidden" class="form-control mb-3" name="item_id" value="<?php echo $data->item_id?>">
					<p>
						<input type="text" class="form-control mb-3" name="itemname" placeholder="itemname" value="<?php echo $data->itemname;?>">
					</p>
					
					<p>
						<input type="text" class="form-control mb-3" name="itemprice" placeholder="itemprice" value="<?php echo $data->itemprice;?>">
					</p>
					<br><br>
					<p>
						<input type="submit" value="Update Item">
					</p>
				</form>
</body>
</html>