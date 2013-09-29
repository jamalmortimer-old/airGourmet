<?php
require 'connect.inc.php';

?>


<html
<head>
	<title>Air Gourmet</title>
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
	<link type="text/css" rel="stylesheet" href="css/style.css"/>
</head>

<body>
	<div class="container">
		<div class="col-md-6">
			<h2>Sign Up</h2>
			<input type="text" class="form-control" placeholder="Username">
			<input type="text" class="form-control" placeholder="Password">
			<input type="text" class="form-control" placeholder="Confirm Password">
			<button type="button" class="btn btn-primary">Register</button>
		</div>
		<div class="col-md-6">
			<h2>Sign In</h2>
			<input type="text" class="form-control" placeholder="Username">
			<input type="text" class="form-control" placeholder="Password">
			<button type="button" class="btn btn-primary">Submit</button>
		</div>
	</div>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>