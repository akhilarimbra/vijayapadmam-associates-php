<div>
    <img src="logo.jpg" width="35%" align="right">
</div>
<?php 
  include "include.php";
  include "lock.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Income Report - VIJAYAPADMAM Associates</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>
<!--body starts here-->
<div class="container-fluid">
    <div class="row" style="padding-top:3em;">
        <div class="col-lg-12">        
            <h2 align="center"><u>Income Report</u></h2><br><br>
            <?php include "income/profit.php" ?>
        </div>
    </div>
</div>
<!--javascript-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>