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
    <div class="row" style="padding-top:6em;">
        <?php include "include/updateinfo.php" ?>
    </div>
    <div class="row" style="padding-bottom:8em;">
      <div class="col-lg-4"></div>
      <div class="col-lg-4">
        <h3><u>Shortcode Information</u></h3>
        <br>
        <h4>billkm - Billing Kilometre</h4>
        <h4>basic - Basic Charge Per Day</h4>
        <h4>nwork - Charge per work for employee</h4>
        <h4>km - Charge per kilometre</h4>
        <h4>officehour - Charge per hour on office for employee</h4>
        <h4>day - Amount to be divided with per hour of day</h4>
        <h4>night - Amount to be divided with per hour of night</h4>
        <h4>duty - Charge per duty by an Employee</h4>
      </div>
      <div class="col-lg-4"></div>
    </div>
</div>
<!--javascript-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>