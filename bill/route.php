<div>
    <img src="logo.jpg" width="35%" align="right">
</div>
<table class="table table-striped table-hover" align="left">
<thead align="left">
    <?php
        $id = $_GET['id'];
        $sql = "SELECT * FROM `work` WHERE `ID` = '$id' and type = 'route'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            //output rows
            while($row = $result->fetch_assoc()){
                echo "<tr><th align='center'>Route - ".$row['Name']." : Date - ".date("M j, Y", strtotime($_GET['startdate']))."</tr>";   
            }
        }
    ?>
</thead>
</table>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Company</th>
            <th>Distributor</th>
            <th>Location</th>            
            <th>Time Taken</th>
            <th>SIM</th>
            <th>RCV</th>
            <th>Promo/Other</th>
            <th>Kilometre</th>
        </tr>
    </thead>
    <tbody>
       <?php
        function getLocation($did, $cid){
            include 'include/config.php';
            $sql = "SELECT * FROM `distributor` WHERE `ID` = '$did' and `Company` = '$cid'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    return $row['Location'];
                }
            }
        }
        function getCompany($cid){
            include 'include/config.php';
            $sql = "SELECT * FROM `company` WHERE `ID` = '$cid'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    return $row['Name'];
                }
            }
        }
        function getDistributor($cid){
            include 'include/config.php';
            $sql = "SELECT * FROM `distributor` WHERE `ID` = '$cid'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    return $row['Name'];
                }
            }
        }
        $id = $_GET['id'];
        $start = $_GET['startdate'];
        $sql = "SELECT * FROM `route` where ID = '$id' and date >= '$start'";
        $result = $conn->query($sql);
        $tsim = 0;
        $trcv = 0;
        $tpromo = 0;
        $tkm = 0;
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                //`Distributor`, `SIM`, `RCV`, `Promo/Other`, `Date`, `KM`, `Time`
                echo "<tr class='success'>";               
                echo "<td>".getCompany($row['Company'])."</td>";
                echo "<td>".getDistributor($row['Distributor'])."</td>";
                echo "<td>".getLocation($row['Distributor'],$row['Company'])."</td>";
                echo "<td>".$row['Time']."</td>";
                echo "<td>".$row['SIM']."</td>";
                $tsim += $row['SIM'];
                echo "<td>".$row['RCV']."</td>";
                $trcv += $row['RCV'];
                echo "<td>".$row['Promo/Other'];
                $tpromo += $row['Promo/Other'];
                echo "<td>".$row['KM'];
                $tkm += $row['KM'];
                echo "<tr>";
            }
        }
        $conn->close();
        ?>
        <tr class="info">
            <td><b>Total</b></td>  
            <td><b>---</b></td>            
            <td><b>---</b></td>
            <td><b>---</b></td>
            <td><b><?php echo $tsim;?></b></td>
            <td><b><?php echo $trcv;?></b></td>
            <td><b><?php echo $tpromo;?></b></td>
            <td><b><?php echo $tkm;?></b></td>
        </tr>
    </tbody>
</table>