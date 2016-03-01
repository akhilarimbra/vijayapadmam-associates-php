<table class="table table-striped table-hover">
	<thead>
		<th>Start Date : <?php echo $_GET['start'];?></th>
		<th>End Date : <?php echo $_GET['end'];?></th>
	</thead>
</table>
<table class="table table-striped table-hover">
    <thead>
        <tr>   
            <th>Date</th>
            <th>Kilometre Run</th>
            <th>Duty</th>
            <th>Work</th>
            <th>Basic</th>
            <th>Stay</th>
            <th>Office</th>
            <th>Advance</th>
            <th>Allowance</th>
            <th>Billing Kilometre</th>
            <th>Expense</th>
            <th>Income</th>
        </tr>
    </thead>
    <tbody>
<?php
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
	                        $kmr = $row['rate'];
	                        break;
	            case 'basic':
	                        $basicr = $row['rate'];
	                        break;
	            case 'day' :
	                        $dayr = $row['rate'];
	                        break;
	            case 'night' :
	                        $nightr = $row['rate'];
	                        break;
	            case 'officehour':
	                        $officehour = $row['rate'];
	                        break;
	            case 'stay':
	                        $stayr = $row['rate'];
	                        break;
	            case 'duty':
	                        $dutyr = $row['rate'];
	                        break;
	            case 'nwork':
	                        $nwork = $row['rate'];
	                        break;
	            case 'billkm':
	            			$billkm = $row['rate'];
	            			break;
	        }
	    }
	}
	//$_GET[''] info
	$start = $_GET['start'];
	$end = $_GET['end'];
	//variables to store amount
	$totalkm = 0;
	$totalday = 0;
	$totalnight = 0;
	$totalduty = 0;
	$totalwork = 0;
	$totalbasic = 0;
	$totalsalary = 0;
	$totalstay = 0;
	$totaladvance = 0;
	$totalbalance = 0;
	$totalallowance = 0;
	$totalofficehr = 0;
	$totalbkm = 0;
	$totalexpense = 0;
	$totalincome = 0;
	$sql = "SELECT * FROM `date` WHERE `date` >= '$start' and `date` <= '$end' order by `date` asc";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    	//output of each row
        while($row = $result->fetch_assoc()) {
        	//loop starts
        	echo "<tr>";
        	//date current
        	echo "<td>".$row['date']."</td>";
        	$date = $row['date'];
        	//employee data
			$sql = "SELECT * FROM `emppayment` WHERE `Date` = '$date'";
			$result1 = $conn->query($sql);
	        //variables to store amount
	        $km = 0;
	        $day = 0;
	        $night = 0;
	        $duty = 0;
	        $work = 0;
	        $officehr = 0;
	        $basic = 0;
	        $salary = 0;
	        $stay = 0;
	        $advance = 0;
	        $balance = 0;
	        $allowance = 0;			
			if ($result1->num_rows > 0) {
			    //`ID`, `Vehicle`, `Date`, `Basic`, `Advance`, `Allowance`, `StartKM`, `EndKM`, `Work`, 
			    //`Starting Time`, `Ending Time`, `Day`, `Night`, `Stay`, `Number of Work`, `Office Work`
			    while($row = $result1->fetch_assoc()) {
			    	$basic += $row['Basic'];
			    	$advance += $row['Advance'];
			    	$allowance += $row['Allowance'];
			    	$temp = $row['EndKM'] - $row['StartKM'];
			    	$km += $temp;
			    	$work += $row['Number of Work'];
			    	$temp = $row['Day']/$dayr;
			    	$temp += $row['Night']/$nightr;
			    	$duty += $temp;
			    	$stay += $row['Stay'];
			    	$officehr += $row['Office Work'];
			    }
			}
			echo "<td>".$km."</td>";
			$totalkm += $km;
			$km = $km * $kmr;
			echo "<td>".$duty."</td>";
			$totalduty += $duty;
			$duty = $duty * $dutyr;
			echo "<td>".$work."</td>";
			$totalwork += $work;
			$work = $work * $nwork;
			echo "<td>".$basic."</td>";
			$totalbasic += $basic;
			$basic = $basic * $basicr;
			echo "<td>".$stay."</td>";
			$totalstay += $stay;
			$stay = $stay * $stayr;
			echo "<td>".$officehr."</td>";
			$totalofficehr += $officehr;
			$officehr = $officehr * $officehour;
			echo "<td>".$advance."</td>";
			$totaladvance += $advance;
			echo "<td>".$allowance."</td>";
			$totalallowance += $allowance;
			$temp = $km + $duty + $work + $basic + $stay + $officehr + $allowance;
			$temp = $temp - $advance; 
        	//client data
        	$bkm = 0;
        	$sql = "SELECT * FROM `clientbill` where `Date` = '$date'";
        	$result2 = $conn->query($sql);
	        if ($result2->num_rows > 0) {
	            // output data of each row
	            while($row = $result2->fetch_assoc()) {
	                $bkm += $row['End'] - $row['Start'];
	            }
	        }
	        echo "<td>".$bkm."</td>";
	        $totalbkm += $bkm;
	        $bkm = $bkm * $billkm;
	        $temp = $bkm - $temp;
	        //expense data
	        $sql = "SELECT * FROM `vehicleexpense` where `Date` = '$date'"; //`Maintance`
	        $result3 = $conn->query($sql);
	        $expense = 0;
	        if ($result3->num_rows > 0) {
	            // output data of each row
	            while($row = $result3->fetch_assoc()) {
	                $expense += $row['Maintance'];
	            }
	        }
	        echo "<td>".$expense."</td>";
	        $totalexpense += $expense;
	        $temp = $temp - $expense;
	        echo "<td>".$temp."</td>";
	        $totalincome += $temp;
        	//calculation
        	//pass the data to total variables
        	echo "</tr>";
        }
    }
?>
        <thead>
            <tr>
                <th>Total</th>
                <th><?php echo $totalkm;?></th>
                <th><?php echo $totalduty;?></th>
                <th><?php echo $totalwork;?></th>
                <th><?php echo $totalbasic;?></th>
                <th><?php echo $totalstay;?></th>
                <th><?php echo $totalofficehr;?></th>
                <th><?php echo $totaladvance;?></th>
                <th><?php echo $totalallowance;?></th>
                <th><?php echo $totalbkm;?></th>
                <th><?php echo $totalexpense;?></th>
                <th><?php echo $totalincome;?></th>
            </tr>
        </thead>
    </tbody>
</table>