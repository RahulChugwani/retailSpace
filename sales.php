<!DOCTYPE html>
<html>
<head>
	<title> Sales Chart</title>
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
	<div style="text-align: center;">
		<div class="col-md-6" style="display: inline-block;">
			<div class="chart-container">
				<label class="col-form-label"><h3>Customers and their Transactions</h3></label>
	   		 	<canvas id="line-chartcanvas"></canvas>
	  		</div>
	  		<div class="chart-container">
	  			<label class="col-form-label"><h3>Customers per Area/City</h3></label>
	   		 	<canvas id="line-cityCust"></canvas>
	  		</div>
	  		<div class="chart-container">
	  			<label class="col-form-label"><h3>Sales and Transactions per month</h3></label>
	   		 	<canvas id="line-salesMonth"></canvas>
	  		</div>
  		</div>
	</div>
	

	

</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="Chart.min.js"></script>
    <script src="line-db-php.js"></script>
    <script src="custCityChart.js"></script>
    <script type="" src="salesMonthChart.js"></script>
</html>SSS