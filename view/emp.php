<table class="table table-striped table-hover">
    <thead>
        <tr>            
            <th>ID</th>
            <th>Employee Name</th>
            <th>Contact Number</th>
            <th>Personnel Number</th>
            <th>Licence</th>
            <th>Badge</th>
            <th>Account</th>
            <th>Bank</th>
            <th>Branch</th>
            <th>IFSC</th>
            <th>S/O</th>
            <th>Address</th>
            <th>Sex</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM `employee` ORDER BY ID ASC";
        $result = $conn->query($sql);
        //`Name`, `ID`, `Contact Number`, `Personnel Number`, `Licence`, `Badge`, `Account Number`, `Bank`, `IFSC`, `S/O`, `Address`, `Sex` FROM `employee`
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row['ID']."</td>";
                echo "<td>".$row['Name']."</td>";
                echo "<td>".$row['Contact Number']."</td>";
                echo "<td>".$row['Personnel Number']."</td>";
                echo "<td>".$row['Licence']."</td>";
                echo "<td>".$row['Badge']."</td>";
                echo "<td>".$row['Account Number']."</td>";
                echo "<td>".$row['Bank']."</td>";
                echo "<td>".$row['Branch']."</td>";
                echo "<td>".$row['IFSC']."</td>";
                echo "<td>".$row['S/O']."</td>";
                echo "<td>".$row['Address']."</td>";
                echo "<td>".$row['Sex']."</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td></tr>";
        }
        $conn->close();
        ?>
    </tbody>
</table>