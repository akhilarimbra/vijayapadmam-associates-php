<?php 
  include "include.php";
  include "lock.php";
?>
<?php //name id contactno pno lno badge account bank ifsc sonof address sex
    $name = $_GET['name'];
    $id = $_GET['id'];
    $contactno = $_GET['contactno'];
    $pno = $_GET['pno'];
    $lno = $_GET['lno'];
    $badge = $_GET['badge'];
    $account = $_GET['account'];
    $bank = $_GET['bank'];
    $ifsc = $_GET['ifsc'];
    $sonof = $_GET['sonof'];
    $address = $_GET['address'];
    $sex = $_GET['sex'];
    $branch = $_GET['branch'];
    $sql = "INSERT INTO `employee`
        (`Name`, `ID`, `Contact Number`, `Personnel Number`, `Licence`, `Badge`, `Account Number`, `Bank`, `IFSC`, `S/O`, `Address`, `Sex`,`Branch`) VALUES('$name','$id','$contactno','$pno','$lno','$badge','$account','$bank','$ifsc','$sonof','$address','$sex','$branch')";
    if ($conn->query($sql) === TRUE) {
        header("location: new.php?id=emp");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>
<?php $conn->close(); ?>