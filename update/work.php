<?php
    $id = intval($_GET['id']);
    $name = $_GET['name'];
    $type = $_GET['type'];
    //database and login confirmation
    include "../include.php";
    include "../lock.php";
    //passing ID value
    $sql = "SELECT * FROM `work`";
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
    $sql = "UPDATE `work` SET `Name`='$name',`Type`='$type' WHERE `ID`='$id'";
    //updating data
    if ($conn->query($sql) === TRUE) {
        header("location: ../edit.php?id=work");
    } else {
        echo "Error updating record: " . $conn->error;
    }
    $conn->close();
?>