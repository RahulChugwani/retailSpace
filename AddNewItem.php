<!DOCTYPE html>
<html>
<head>
	<title> ADD_NEW_ITEM </title>
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
			  <h4><span class="glyphicon glyphicon-plus-sign"></span> ADD NEW ITEM </h4>
			</div>
			<br>
			<div class="card-body">
	<form action="get_item.php" method="post">
		<p><input type="text" class="form-control mb-3" name="itemname" placeholder="Item name"></p>
		<p><input type="text" class="form-control mb-3" name="itemprice" placeholder="Price"></p>
		<br>
		<p><input type="submit" value="Add Item"></p>
	</form>

	</div>
</body>
</html>