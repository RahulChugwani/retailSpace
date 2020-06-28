 <?php 
require "session.php";

$con = new mysqli("localhost", "root", "", "shop_inventory");
$owner_id = $_SESSION['owner_id'];

//$query = "SELECT * FROM item";
$query = "SELECT * FROM item WHERE item_id IN (SELECT i_id FROM owner_item where o_id = '$owner_id' ) ";
$result = $con->query($query);

  ?>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<div class="header">
	  <div class="header-right">
		<a class="active" href="#"><h1>Retail Enterprise</h1></a>
	  </div>
</div>

<div class="container">
<br>
<h4> <u>Item Details</u></h4>
<br>

  <table class="table table-bordered" border="1" cellspacing="5" cellpadding="5" rules="all">
  	<tr>
  		<th>Srno</th>
  		<th>Itemname</th>
  		<th>Itemprice</th>
  		<th>Action</th>
  		<th>Delete</th>
  	</tr>

<?php 
while ($data = $result->fetch_assoc()) {
	echo "<tr>";
		echo "<td>".$data['item_id']."</td>";
		echo "<td>".$data['itemname']."</td>";
		//echo "<td>".$data['email']."</td>";
		//echo "<td>".$data['password']."</td>";
		echo "<td>".$data['itemprice']."</td>";
		echo "<td><a href=edititem.php?item_id=".$data['item_id'].">Edit</td>";
		echo "<td><a href=deleteitem.php?item_id=".$data['item_id'].">Delete</td>";



	echo "</tr>";

}

 ?>
  </table>
<p><a class="btn btn-primary btn-lg" href="index.php"><span class="glyphicon glyphicon-log-out"> Logout</span></a></p>
 