<table class="table table-striped table-hover">
    <thead>
        <tr>            
            <th>ID</th>
            <th>Client Name</th>
            <th>Contact Number</th>
            <th>Product Name</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM `client` ORDER BY ID ASC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["ID"]."</td><td>".$row["Name"]."</td><td>".$row["Contact Number"]."</td><td>".$row["Product"]."</td></tr>";
            }
        } else {
            echo "<tr><td>-</td><td>-</td><td>-</td><td>-</td></tr>";
        }
        $conn->close();
        ?>
    </tbody>
</table>