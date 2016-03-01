<?php 
  include "include.php";
  include "lock.php";
?>
<?php
    $id = $_GET['id'];
    $date = $_GET['date'];
    $start = $_GET['startkm'];
    $end = $_GET['endkm'];
    $sql = "INSERT INTO `clientbill`(`ID`, `Date`, `Start`, `End`) VALUES ('$id','$date','$start','$end')";
    if ($conn->query($sql) === TRUE) {
        $hello = 1;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $sql = "INSERT INTO `date`(`date`) VALUES ('$date')";
    if ($conn->query($sql) === TRUE) {
        header("location: report.php?id=client");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        header("location: report.php?id=client");
    }
?>
<?php $conn->close(); ?>