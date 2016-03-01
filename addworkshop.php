<?php 
  include "include.php";
  include "lock.php";
?>
<?php
    $name = $_GET['name'];
    $id = $_GET['id'];
    $contact = $_GET['contact'];
    $location = $_GET['location'];
    $sql = "INSERT INTO `workshop`(`ID`, `Name`, `Contact`, `Location`) VALUES ('$id','$name','$contact','$location')";
    if ($conn->query($sql) === TRUE) {
        header("location: new.php?id=workshop");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>
<?php $conn->close(); ?>