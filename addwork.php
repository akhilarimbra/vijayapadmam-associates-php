<?php 
  include "include.php";
  include "lock.php";
?>
<?php
    $name = $_GET['name'];
    $id = $_GET['nid'];
    $type = $_GET['type'];
    $sql = "INSERT INTO `work`(`ID`, `Name`,`Type`) VALUES ('$id','$name','$type')";
    if ($conn->query($sql) === TRUE) {
            header("location: new.php?id=work");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>
<?php $conn->close(); ?>