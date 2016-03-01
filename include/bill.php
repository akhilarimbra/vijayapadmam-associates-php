<form class="form-horizontal">
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Select Category</label>
        <label for="inputname" class="col-sm-4 control-label">Select ID</label>
        <label for="inputname" class="col-sm-2 control-label">Select Start Date</label>
        <label for="inputname" class="col-sm-2 control-label">Select End Date</label>
    </div>  
</form>
<form class="form-horizontal" action="billemp.php" target="_blank">
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Employee</label>
        <div class="col-sm-4">
            <select class="form-control" name="id" required>
                <?php //looping employee ID List
                $sql = "SELECT * FROM `employee`";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<option>".$row["ID"]."</option>";
                    }
                } else {
                    echo "<option>---</option>";
                }
                ?>
            </select>
        </div>
        <div class="col-sm-2">
            <input type="date" class="form-control" name="startdate" placeholder="Enter date" required>
        </div>
        <div class="col-sm-2">
            <input type="date" class="form-control" name="enddate" placeholder="Enter date" required>
        </div>
        <div class="col-sm-2">
            <button type="submit" class="btn btn-warning">Submit</button>
        </div>
    </div>  
</form>
<form class="form-horizontal" action="billclient.php" target="_blank">
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Client</label>
        <div class="col-sm-4">
            <select class="form-control" name="id" required>
                <?php //looping employee ID List
                $sql = "SELECT * FROM `client`";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<option>".$row["ID"]."</option>";
                    }
                } else {
                    echo "<option>---</option>";
                }
                ?>
            </select>
        </div>
        <div class="col-sm-2">
            <input type="date" class="form-control" name="startdate" placeholder="Enter date" required>
        </div>
        <div class="col-sm-2">
            <input type="date" class="form-control" name="enddate" placeholder="Enter date" required>
        </div>
        <div class="col-sm-2">
            <button type="submit" class="btn btn-warning">Submit</button>
        </div>
    </div>  
</form>
<form class="form-horizontal" action="billroute.php" target="_blank">
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Route</label>
        <div class="col-sm-4">
            <select class="form-control" name="id" required>
                <?php //looping employee ID List
                $sql = "SELECT `ID`, `Name`, `Type` FROM `work` WHERE `Type` = 'Route'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<option>".$row["ID"]."</option>";
                    }
                } else {
                    echo "<option>---</option>";
                }
                ?>
            </select>
        </div>
        <div class="col-sm-2">
            <input type="date" class="form-control" name="startdate" placeholder="Enter date" required>
        </div>
        <div class="col-sm-2">
            <!--input type="date" class="form-control" name="enddate" placeholder="Enter date" disabled-->
        </div>
        <div class="col-sm-2">
            <button type="submit" class="btn btn-warning">Submit</button>
        </div>
    </div>  
</form>