 <?php 
//require "session_check.php";

$con = new mysqli("localhost", "root", "", "shop_inventory");

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
	<div class="loginContainer">
		<div class="card border-info text-center">
			<div class="card-header">
			  <h4><span class="glyphicon glyphicon-search"></span> Find Customer by city </h4>
			</div>
			<br>
			<div class="card-body">

			  <form action="get_findcity.php" method="post">
				<p><input type="text" class="form-control mb-3"  name="find_city" placeholder="Search by city"></p>
				<br>
				<p><input type="submit" value="Get customer by city"></p>
			  </form>
			</div>
			</div>
			<br><br><br>
			
			<p><a class="btn btn-primary brn-sm" href="index.php"><span class="glyphicon glyphicon-log-out"> </span> Logout</a></p>
			</div>
			</div>

<?php 
//while ($data = $result->fetch_assoc()) {
	//echo "<tr>";
		//echo "<td>".$data['id']."</td>";
		//echo "<td>".$data['customername']."</td>";
		//echo "<td>".$data['email']."</td>";
		//echo "<td>".$data['phoneno']."</td>";
		//echo "<td>".$data['address']."</td>";
		//echo "<td><a href=editcustomer.php?id=".$data['id'].">Edit</td>";
		//echo "<td><a href=deletecustomer.php?id=".$data['id'].">Delete</td>";



	//echo "</tr>";


 ?>  

 