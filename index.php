<?php 
	include "include.php";
	session_start();
	if(isset($_SESSION['status'])) {
		header("location: getbill.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Report Generator</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>
<!--body starts here-->
<div class="container-fluid" style="padding-top:3em;">
    <div class="row">
    	<div class="col-lg-6">
				<form class="form-horizontal" action="login.php">
				  <div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">Username : </label>
				    <div class="col-sm-5">
				      <input type="text" class="form-control" id="inputEmail3" placeholder="Enter your Username" name="username" required>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputPassword3" class="col-sm-2 control-label">Password : </label>
				    <div class="col-sm-5">
				      <input type="password" class="form-control" id="inputPassword3" placeholder="Enter your Password" name="password" required>
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-default">Sign in</button>
				    </div>
				  </div>
				</form>
    	</div>
    	<div class="col-lg-6">
    		<img class="img-responsive" src="logo.jpg" width="">
    	</div>
    </div>
    <div class="row">
    	<div class="col-lg-4"></div>
    	<div class="col-lg-4">
    		<h3>Developed by <a href="http://www.ptcorner.in" target="_blank">PT Corner</a>, Valanchery</h3>
    	</div>
    	<div class="col-lg-4"></div>
    </div>
</div>
<!--javascript-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>