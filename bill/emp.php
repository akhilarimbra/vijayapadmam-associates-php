<div>
    <img src="logo.jpg" width="35%" align="right">
</div>
<table class="table table-stripped table-hover">
<thead>
    <?php
        $id = $_GET['id'];
        $sql = "SELECT * FROM `employee` WHERE `ID` = '$id'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            //output rows
            while($row = $result->fetch_assoc()){
            //`Name`, `ID`, `Contact Number`, `Personnel Number`, `Licence`, `Badge`, 
            //`Account Number`, `Bank`, `Branch`, `IFSC`, `S/O`, `Address`
                echo "<tr><td></td><td></td><td></td><td></td><td></td><td></td><tr>";
                echo "<tr>";
                echo "<td>Name</td><td><b>".$row['Name']."<b></td>";
                echo "<td>Contact Number</td><td><b>".$row['Contact Number']." , ".$row['Personnel Number']."<b></td>";
                echo "<td>S/O</td><td><b>".$row['S/O']."<b></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Licence</td><td><b>".$row['Licence']."</b></td>";
                echo "<td>Badge</td><td><b>".$row['Badge']."</b></td>";
                echo "<td>Account</td><td><b>".$row['Account Number']."</b></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Bank</td><td><b>".$row['Bank']."</b></td>";
                echo "<td>Branch</td><td><b>".$row['Branch']."</b></td>";
                echo "<td>IFSC</td><td><b>".$row['IFSC']."</b></td>";
                echo "</tr>";
                echo "<tr><td></td><td></td><td></td><td></td><td></td><td></td><tr>";
            }
        }
    ?>
</thead>
</table>
<table class="table table-hover">
    <thead>
        <tr>   
            <th>Date</th>
            <th>Vehicle</th>
            <th>Work</th>
            <th>Start Time</th>
            <th>End Time</th>
            <th>K.M</th>
            <th>Day</th>
            <th>Night</th>
            <th>Duty</th>
            <th>Office</th>
            <th>No. of Work</th>
            <th>Basic</th>
            <th>Stay</th>
            <th>Allowance</th>
            <th>Salary</th>
            <th>Advance</th>
            <th>Balance</th>
        </tr>
    </thead>
    <tbody>
       <?php
        //`ID`, `Vehicle`, `Date`, `Basic`, `Advance`, `Allowance`, `StartKM`, `EndKM`,
        //`Work`, `Starting Time`, `Ending Time`, `Day`, `Night`, `Stay`
        //variables to store $_GET[''] information
        $id = $_GET['id'];
        $start = $_GET['startdate'];
        $end = $_GET['enddate'];
        //variables to store amount
        $total = 0;
        $totalkm = 0;
        $totalday = 0;
        $totalnight = 0;
        $totalduty = 0;
        $totalwork = 0;
        $totalbasic = 0;
        $totalwork = 0;
        $totaloffice = 0;
        $totalstay = 0;
        $totalallowance = 0;
        $totalsalary = 0;
        $totaladvance = 0;
        $totalbalance = 0;
        //sql query to store amount to corresponding variables
        $sql = "SELECT * FROM `rate`";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            //`type`, `rate`
            while($row = $result->fetch_assoc()) {
            // billkm,km,basic,day,night,officehour,stay,duty
                $check = $row["type"];
                switch($check){
                    case 'km' :
                                $km = $row['rate'];
                                break;
                    case 'basic':
                                $basic = $row['rate'];
                                break;
                    case 'day' :
                                $day = $row['rate'];
                                break;
                    case 'night' :
                                $night = $row['rate'];
                                break;
                    case 'officehour':
                                $officehour = $row['rate'];
                                break;
                    case 'stay':
                                $stay = $row['rate'];
                                break;
                    case 'duty':
                                $duty = $row['rate'];
                                break;
                    case 'nwork':
                                $nwork = $row['rate'];
                                break;
                }
            }
        } else {
            echo "0 results";
        }
        //sql query to print required table
        $sql = "SELECT * FROM `emppayment` where ID = '$id' and date >= '$start' and date <= '$end' order by date asc";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                //start and end with a tr day and assign td tags for each element
                echo "<tr>";
                $temptotal = 0;
                echo "<td>".$row['Date']."</td>";
                echo "<td>".$row['Vehicle']."</td>";
                echo "<td>".$row['Work']."</td>";
                echo "<td>".$row['Starting Time']."</td>";
                echo "<td>".$row['Ending Time']."</td>";
                $temp = $row['EndKM'] - $row['StartKM'];
                $totalkm += $temp;
                echo "<td>".$temp."</td>";
                $temptotal += $temp * $km;
                echo "<td>".$row['Day']."</td>";
                echo "<td>".$row['Night']."</td>";
                $totalday += $row['Day'];
                $totalnight += $row['Night'];
                $temp = ($row['Day'])/$day;
                $temp += ($row['Night'])/$night;
                echo "<td>".$temp."</td>";
                $totalduty += $temp;
                $temptotal += ($temp * $duty);
                echo "<td>".$row['Office Work']."</td>";
                $totaloffice += $row['Office Work'];
                $temptotal += $row['Office Work'] * $officehour;
                $x = $row['Number of Work'];
                $temptotal += $x * $nwork;
                echo "<td>".$x."</td>";
                $totalwork += $x;
                $totalbasic += $row['Basic'];
                echo "<td>".$row['Basic']."</td>";
                $temptotal += $row['Basic'] * $basic;
                echo "<td>".$row['Stay']."</td>";
                echo "<td>".$row['Allowance']."</td>";
                $temptotal += $row['Stay'] * $stay;
                $temptotal += $row['Allowance'];
                $totalallowance += $row['Allowance'];
                $totalsalary += $temptotal;
                $totalstay += $row['Stay'];
                echo "<td>".$temptotal."</td>";
                echo "<td>".$row['Advance']."</td>";
                $totaladvance += $row['Advance'];
                $temptotal = $temptotal - $row['Advance'];
                $total += $temptotal;
                echo "<td>".$temptotal."</td>";             
                echo "</tr>";
            }
        } else {
            echo "<tr>   
                    <th>---</th>
                    <th>---</th>
                    <th>---</th>
                    <th>---</th>
                    <th>---</th>
                    <th>---</th>
                    <th>---</th>
                    <th>---</th>
                    <th>---</th>
                    <th>---</th>
                    <th>---</th>
                    <th>---</th>
                    <th>---</th>
                    <th>---</th>
                </tr>";
        }
        $conn->close();
        ?>
        <thead>
            <tr>
                <th>Total</th>
                <th>---</th>
                <th>---</th>
                <th>---</th>
                <th>---</th>
                <th><?php echo $totalkm; ?></th>
                <th><?php echo $totalday; ?></th>
                <th><?php echo $totalnight; ?></th>
                <th><?php echo $totalduty; ?></th>
                <th><?php echo $totaloffice; ?></th>
                <th><?php echo $totalwork; ?></th>
                <th><?php echo $totalbasic; ?></th>
                <th><?php echo $totalstay; ?></th>
                <th><?php echo $totalallowance; ?></th>
                <th><?php echo $totalsalary; ?></th>
                <th><?php echo $totaladvance; ?></th>
                <th><?php echo $total; ?></th>
            </tr>
        </thead>
    </tbody>
</table>