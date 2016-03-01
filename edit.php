<?php 
  include "include.php";
  include "lock.php";
?>
<?php
    switch($_GET['id']){
        case "emp":
                    $include = "edit/emp.php";
                    $title = 'Employee';
                    break;
        case "client":
                    $include = "edit/client.php";
                    $title = 'Client';
                    break;
        case "vehicle":
                    $include = "edit/vehicle.php";
                    $title = 'Vehicle';
                    break;
        case "workshop":
                    $include = "edit/workshop.php";
                    $title = 'Expense';
                    break;
        case "work":
                    $include = "edit/work.php";
                    $title = 'Route/Work';
                    break;
        case 'distributor':
                    $include = "edit/distributor.php";
                    $title = 'Distributor';
                    break;
        default :
                    echo "Invalid page\n Page not found";
                    die(" Could not start session.");
                    break;
    }
    ob_start();  // start buffer
    include($include);  // read in buffer
    $var=ob_get_contents();  // get buffer content
    ob_end_clean();  // delete buffer content
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit <?php echo $title;?> | Report Generator</title>
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
            <?php echo $var; ?>
        </div>
    </div>
</div>
<!--javascript-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>