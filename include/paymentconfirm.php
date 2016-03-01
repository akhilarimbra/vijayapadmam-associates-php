<?php //vehicleid startdate enddate workshopid
include "config.php";
$vehicle = $_GET['vehicleid'];
$start = $_GET['startdate'];
$end = $_GET['enddate'];
$workshop = $_GET['workshopid'];
$sql = "UPDATE `vehicleexpense` SET `Payment Status`='Paid' WHERE Date >= '$start' and Date <= '$end' and Worker = '$workshop' and ID = '$vehicle'";
$result = $conn->query($sql);
if ($result === TRUE) {
    echo "Record updated successfully";
    header("location: workshopbill.php");
} else {
    echo "Error updating record: " . $conn->error;
    header("location: workshopbill.php");
}
$conn->close();
?>