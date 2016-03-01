<?php
	include "../include.php";
	include "../lock.php";
?>
<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM `distributor` WHERE `ID`= '$id'";
    if ($conn->query($sql) === TRUE) {
        header("location: ../delete.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        header("location: ../delete.php");
    }
?>
<?php $conn->close(); ?>