<?php 
  include "include.php";
  include "lock.php";
?>
<?php
    $company = intval($_GET['company']);
    $id = $_GET['id'];
    $date = $_GET['date'];
    $sim = $_GET['sim'];
    $route = $_GET['route'];
    $rcv = $_GET['rcv'];
    $promo = $_GET['promo'];
    $km = $_GET['km'];
    $time = $_GET['time'];
    $sql = "SELECT * FROM `company`";
    $result = $conn->query($sql);
    $temp = $route;
    if ($result->num_rows > 0) {
        $count = 0;
        while($row = $result->fetch_assoc()) {
            $count++;
            if($count === $company){
                $temp = $row["ID"];
            }
        }
    }
    $sql = "INSERT INTO `route`(`ID`, `Company`,`Distributor`, `SIM`, `RCV`, `Promo/Other`, `Date`, `KM`, `Time`) 
        VALUES ('$route','$temp','$id','$sim','$rcv','$promo','$date','$km','$time')";
    if ($conn->query($sql) === TRUE) {
        $hello = 1;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    header("location: report.php?id=route&company=$temp&date=$date&route=$route");
?>
<?php $conn->close(); ?>