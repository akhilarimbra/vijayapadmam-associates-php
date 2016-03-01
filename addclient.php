<?php 
  include "include.php";
  include "lock.php";
?>
<?php
    $name = $_GET['name'];
    $id = $_GET['id'];
    $contact = $_GET['contactno'];
    $product = $_GET['product'];
    $sql = "INSERT INTO `client`(`Name`, `ID`, `Contact Number`, `Product`) VALUES ('$name','$id','$contact','$product')";
    if ($conn->query($sql) === TRUE) {
        header("location: new.php?id=client");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>
<?php $conn->close(); ?>