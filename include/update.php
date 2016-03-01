<?php
include "config.php";
$type = $_GET['type'];
$rate = $_GET['rate'];
$sql = "UPDATE `rate` SET `rate`='$rate' WHERE `type`='$type'";
$result = $conn->query($sql);
if ($result === TRUE) {
    echo "Record updated successfully";
    header("location: ../updateinfo.php");
} else {
    echo "Error updating record: " . $conn->error;
    header("location: ../updateinfo.php");
}
$conn->close();
?>