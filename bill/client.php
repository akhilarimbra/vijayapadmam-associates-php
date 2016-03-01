<div>
    <img src="logo.jpg" width="35%" align="right">
</div>
<table class="table table-stripped table-hover">
<thead>
    <?php
        $id = $_GET['id'];
        $sql = "SELECT * FROM `client` WHERE `ID` = '$id'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            //output rows
            while($row = $result->fetch_assoc()){
                echo "<tr><td><h3>Client Name : <b>".$row["Name"]."</b></h3></td></tr><tr><td></td></tr>";   
            }
        }
    ?>
</thead>
<?php
        $sql = "SELECT * FROM `rate` where type = 'billkm'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            //`type`, `rate`
            while($row = $result->fetch_assoc()) {
            //type-billkm,km,ekm,office,eoffice:rate
                if($row['type'] === 'billkm'){
                    $billkm = $row['rate'];
                }    
            }
        }
?>
<table class="table table-stripped table-hover">
    <thead>
        <tr>   
            <th>Date</th>
            <th>Starting Kilometer</th>
            <th>Ending Kilometer</th>
            <th>Kilometer Run Per Day</th>
            <th>Charge Per Day</th>
        </tr>
    </thead>
    <tbody>
       <?php //`ID`, `Date`, `Start`, `End`
        $id = $_GET['id'];
        $start = $_GET['startdate'];
        $end = $_GET['enddate'];
        $sql = "SELECT * FROM `clientbill` where ID = '$id' and date >= '$start' and date <= '$end'";
        $result = $conn->query($sql);
        $km = 0;
        $total = 0;
        $ts = 0;
        $te = 0;
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $kmrun = $row['End'] - $row['Start'];
                $charge = $kmrun * $billkm ;
                $km += $kmrun;
                $total += $charge ;
                $ts += $row['Start'];
                $te += $row['End'];
                echo "<tr><td>".$row["Date"]."</td>";
                echo "<td>".$row['Start']."</td>";
                echo "<td>".$row['End']."</td>";
                echo "<td>".$kmrun."</td><td>".$charge."</td></tr>";
            }
        }
        $conn->close();
        ?>
        <tr>
            <td><b>---</b></td>
            <td><b><?php echo $ts;?></b></td>
            <td><b><?php echo $te;?></td>
            <td><b>Total Kilometer = <?php echo $km; ?> KM</b></td>
            <td><b>Total Charge = Rs.<?php echo $total; ?></b></td>
        </tr>
    </tbody>
</table>