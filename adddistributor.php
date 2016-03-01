<?php 
  include "include.php";
  include "lock.php";
?>
<?php
    $name = $_GET['name'];
    $id = $_GET['id'];
    $route = $_GET['route'];
    $location = $_GET['location'];
    $sql = "INSERT INTO `distributor`(`ID`, `Name`, `Company`, `Location`) VALUES ('$id','$name','$route','$location')";
    if ($conn->query($sql) === TRUE) {
        header("location: new.php?id=distributor");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>
<?php $conn->close(); ?>