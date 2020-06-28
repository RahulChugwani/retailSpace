<!DOCTYPE html>
<html>
<head>
	<title> CUSTOMER </title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
	
</head>
<body>
	<div class="header">
		  <div class="header-right">
			<a class="active" href="#"><h1>Retail Enterprise</h1></a>
		  </div>
	</div>
	<br><br>
	<div class="container">
		<h3>Customer </h3>
		<br>
		<div class="row container" style="text-align:center">
		<div class="col-md-2">
			<button class="btn btn-default"><a href="AddNewCustomer.php">Add New Customer</a></button>
		</div>
		<div class="col-md-2">
		<button class="btn btn-default"><a href="CustomerDetails.php">Customer Details</a></button>
		</div>
		<div class="col-md-2">
		<button class="btn btn-default"><a href="CustomerbyCity.php">Customers by city</a></button>
		</div>
		<div class="col-md-1"></div>
	</div>
	<!--
	<p>
		<a href="AddNewCustomer.php">AddNewCustomer</a>
       <a href="CustomerDetails.php">CustomerDetails</a>
       <a href="CustomerbyCity.php">Customers of diff city</a>
	</p>
	-->
	<!--<form action="getdata.php" method="post">
		<p><input type="text" name="username" placeholder="Username"></p>
		<p><input type="email" name="email" placeholder="Email"></p>
		<p><input type="password" name="password" placeholder="Password"></p>
		<p><input type="text" name="address" placeholder="Address"></p>
		<p><input type="submit" value="Register"></p>
	</form>
	-->
	</div>
</body>
</html>