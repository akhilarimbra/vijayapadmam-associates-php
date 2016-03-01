<?php 
  include "include.php";
  include "lock.php";
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
<div class="container-fluid">
    <?php include "include/nav.php" ?>
    <div class="row" style="padding-top:12em;padding-left:30em;padding-bottom:7em;">
    	<div class="col-lg-12">
			<form class="form-horizontal" role="form" target="_blank" action="profit.php">
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="email">Start Date :</label>
			    <div class="col-sm-3">
			      <input type="date" class="form-control" id="email" name="start" required>
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="pwd">End Date :</label>
			    <div class="col-sm-3"> 
			      <input type="date" class="form-control" id="pwd" name="end" required>
			    </div>
			  </div>
			  <div class="form-group"> 
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="date" class="btn btn-primary">Submit</button>
			    </div>
			  </div>
			</form>
    	</div>
    </div>
</div>
<!--javascript-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>