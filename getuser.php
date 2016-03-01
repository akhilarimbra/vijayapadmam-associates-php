<?php
	include "include.php";
	include "lock.php";
	$q = intval($_GET['q']);
	$sql = "SELECT `ID`, `Name` FROM `company`";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	    $count = 0;
	    while($row = $result->fetch_assoc()) {
	        $count++;
	    	if($count === $q){
	    		$temp = $row["ID"];
	    	}
	    }
	}
	$sql = "SELECT * FROM `distributor` WHERE `Company` = '$temp'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
	    	echo "<option>".$row["ID"]."</option>";
	    }
	}
?>