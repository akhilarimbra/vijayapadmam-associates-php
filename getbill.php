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
    <div class="row" style="padding-top:6em;padding-bottom:8em;">
        <div class="col-lg-12">
            <?php include "include/bill.php"; ?>
        </div>
    </div>
</div>
<!--javascript-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>