<?php 
  include "include.php";
  include "lock.php";
?>
<?php
    $id = $_GET['id'];
    $date = $_GET['date'];
    $expense = $_GET['expense'];
    $employer = $_GET['workshop'];
    $status = $_GET['status'];
    $sql = "INSERT INTO `vehicleexpense`(`ID`, `Date`, `Maintance`, `Worker`,`Payment Status`) VALUES ('$id','$date','$expense','$employer','$status')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $sql = "INSERT INTO `date`(`date`) VALUES ('$date')";
    if ($conn->query($sql) === TRUE) {
        $hello = 1;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    header("location: report.php?id=vehicle");
?>
<?php $conn->close(); ?>