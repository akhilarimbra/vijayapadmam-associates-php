<?php
	include "include.php";
	$user = $_GET['username'];
	$pass = $_GET['password'];
	$sql = "SELECT name,passcode FROM `admin` where name = '$user'";
	$result = $conn->query($sql);
	//checking result
	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        if($pass == $row["passcode"]){
	        	session_start();
	        	$_SESSION['status'] = 1;
	        	header("location: getbill.php");
	        }else{
				header("location: index.php");
	        }
	    }
	} else {
	    header("location: index.php");
	}
	$conn->close();
?>