<table class="table table-striped table-hover">
    <thead>
        <tr>            
            <th>ID</th>
            <th>Name</th>
            <th>Contact Number</th>
            <th>Address</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM `workshop` ORDER BY ID ASC";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // `ID`, `Name`, `Contact`, `Location`
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["ID"]."</td><td>".$row["Name"]."</td><td>".$row["Contact"]."</td><td>".$row["Location"]."</td></tr>";
            }
        } else {
            echo "<tr><td>-</td><td>-</td><td>-</td><td>-</td></tr>";
        }
        $conn->close();
        ?>
    </tbody>
</table>