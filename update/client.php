<?php
    //
    $id = intval($_GET['id']);
    $name = $_GET['name'];
    $contactno = $_GET['contactno'];
    $product = $_GET['product'];
    //database and login confirmation
    include "../include.php";
    include "../lock.php";
    //passing ID value
    $sql = "SELECT * FROM `client`";
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
    $sql = "UPDATE `client` SET `Name`='$name',`Contact Number`='$contactno',`Product`='$product' WHERE `ID`='$id'";
    //updating data
    if ($conn->query($sql) === TRUE) {
        header("location: ../edit.php?id=client");
    } else {
        echo "Error updating record: " . $conn->error;
    }
    $conn->close();
?>