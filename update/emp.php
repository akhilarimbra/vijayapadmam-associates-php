<?php
    //id name contactno pno lno badge account bank branch ifsc sonof address sex
    $id = intval($_GET['id']);
    $name = $_GET['name'];
    $contactno = $_GET['contactno'];
    $pno = $_GET['pno'];
    $lno = $_GET['lno'];
    $badge = $_GET['badge'];
    $account = $_GET['account'];
    $bank = $_GET['bank'];
    $branch = $_GET['branch'];
    $ifsc = $_GET['ifsc'];
    $sonof = $_GET['sonof'];
    $address = $_GET['address'];
    $sex = $_GET['sex'];
    //database and login confirmation
    include "../include.php";
    include "../lock.php";
    //passing ID value
    $sql = "SELECT * FROM `employee`";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $count = 0;
        while($row = $result->fetch_assoc()) {
            $count++;
            if($count === $id){
                $id = $row["ID"];
            }
        }
    }
    //sql query
    $sql = "UPDATE `employee` SET `Name`='$name',`Contact Number`='$contactno',`Personnel Number`='$pno',
        `Licence`='$lno',`Badge`='$badge',`Account Number`='$account',`Bank`='$bank',
        `Branch`='$branch',`IFSC`='$ifsc',`S/O`='$sonof',`Address`='$address',`Sex`='$sex' WHERE `ID`='$id'";
    //updating data
    if ($conn->query($sql) === TRUE) {
        header("location: ../edit.php?id=emp");
    } else {
        echo "Error updating record: " . $conn->error;
    }
    $conn->close();
?>