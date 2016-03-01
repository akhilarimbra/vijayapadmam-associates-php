<table class="table table-striped table-hover">
    <thead>
        <tr>            
            <th>ID</th>
            <th>Name</th>
            <th>Company</th>
            <th>Location</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM `distributor` ORDER BY ID ASC";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["ID"]."</td><td>".$row["Name"]."</td><td>".$row["Company"]."</td><td>".$row["Location"]."</td></tr>";
            }
        } else {
            echo "<tr><td>-</td><td>-</td><td>-</td><td>-</td></tr>";
        }
        $conn->close();
        ?>
    </tbody>
</table>