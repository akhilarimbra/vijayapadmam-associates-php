<?php 
  include "include.php";
  include "lock.php";
?>
<?php
    $name = $_GET['name'];
    $id = $_GET['nid'];
    $sql = "INSERT INTO `company`(`ID`, `Name`) VALUES ('$id','$name')";
    if ($conn->query($sql) === TRUE) {
            header("location: new.php?id=company");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>
<?php $conn->close(); ?>