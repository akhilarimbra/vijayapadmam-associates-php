<?php 
  include "include.php";
  include "lock.php";
?>
<?php 
    $id = $_GET['id'];
    $vehicle = $_GET['vehicle'];
    $work = $_GET['work'];
    $date = $_GET['date'];
    $advance = $_GET['advance'];
    $allowance = $_GET['tallowance'] + $_GET['callowance'] + $_GET['lallowance'];
    $startkm = $_GET['startkm'];
    $endkm = $_GET['endkm'];
    $officehr = $_GET['officehr'];
    $day = $_GET['day'];
    $night = $_GET['night'];
    $stime = $_GET['stime'];
    $etime = $_GET['etime'];
    $basic = $_GET['basic'];
    $nwork = $_GET['nwork'];
    $stay = $_GET['stay'];
    //Insert into table employee from the sql database
    $sql = "INSERT INTO `emppayment`
        (`ID`, `Vehicle`, `Date`, `Basic`, `Advance`, `Allowance`, `StartKM`, `EndKM`, 
        `Work`, `Starting Time`, `Ending Time`, `Day`, `Night`, `Stay`,`Office Work`,`Number of Work`)
        VALUES (
            '$id',
            '$vehicle',
            '$date',
            '$basic',
            '$advance',
            '$allowance',
            '$startkm',
            '$endkm',
            '$work',
            '$stime',
            '$etime',
            '$day',
            '$night',
            '$stay',
            '$officehr',
            $nwork
    )";
    if ($conn->query($sql) === TRUE) {
        $hello = 1;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $sql = "INSERT INTO `date`(`date`) VALUES ('$date')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("location: report.php?id=emp");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        header("location: report.php?id=emp");
    }
?>
<?php $conn->close(); ?>