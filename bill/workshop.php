<div>
    <img src="logo.jpg" width="35%" align="right">
</div>
<table class="table table-striped table-hover">
    <thead>
        <th>Vehicle Number : <?php echo $_GET['vehicleid'];?></th>
        <th>Expense Type : <?php echo $_GET['workshopid'];?></th>
    </thead>
</table>
<table class="table table-striped table-hover">
    <thead>
        <tr>   
            <th>Date</th>
            <th>Maintance Charge</th>
        </tr>
    </thead>
    <tbody>
        <?php // `ID`, `Date`, `Maintance`, `Worker`, `Payment Status`
        $vehicle = $_GET['vehicleid'];
        $start = $_GET['startdate'];
        $end = $_GET['enddate'];
        $workshop = $_GET['workshopid'];
        $payment = $_GET['status'];
        //`ID`, `Date`, `Maintance`, `Worker`, `Payment Status`
        $sql = "SELECT * FROM `vehicleexpense` WHERE `ID` = '$vehicle' and `Worker` = '$workshop' and `Payment Status` = '$payment' and `Date` >= '$start' and `Date` <= '$end'";
        $result = $conn->query($sql);
        $total = 0;
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row['Date']."</td><td>".$row["Maintance"]."</td></tr>";
                $total += $row["Maintance"];
            }
        }
        $conn->close();
        ?>
        <tr>
            <td>-</td>
            <td>Total Maintance Cost = Rs.<?php echo $total; ?></td>
        </tr>
    </tbody>
</table>