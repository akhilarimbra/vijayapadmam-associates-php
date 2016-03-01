<form class="form-horizontal">
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Select Category</label>
        <label for="inputname" class="col-sm-4 control-label">Select ID</label>
    </div>  
</form>
<form class="form-horizontal" action="delete/emp.php">
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
                }
                ?>
            </select>
        </div>
        <div class="col-sm-2">
            <button type="submit" class="btn btn-warning" onclick="return confirm_delete()">Delete</button>
        </div>
    </div>  
</form>
<form class="form-horizontal" action="delete/client.php">
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
                }
                ?>
            </select>
        </div>
        <div class="col-sm-2">
            <button type="submit" class="btn btn-warning" onclick="return confirm_delete()">Delete</button>
        </div>
    </div>  
</form>
<form class="form-horizontal" action="delete/vehicle.php">
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Vehicle</label>
        <div class="col-sm-4">
            <select class="form-control" name="id" required>
                <?php //looping employee ID List
                $sql = "SELECT * FROM `vehicle`";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<option>".$row["ID"]."</option>";
                    }
                }
                ?>
            </select>
        </div>
        <div class="col-sm-2">
            <button type="submit" class="btn btn-warning" onclick="return confirm_delete()">Delete</button>
        </div>
    </div>  
</form>
<form class="form-horizontal" action="delete/workshop.php">
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Expense</label>
        <div class="col-sm-4">
            <select class="form-control" name="id" required>
                <?php //looping employee ID List
                $sql = "SELECT * FROM `workshop`";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<option>".$row["ID"]."</option>";
                    }
                }
                ?>
            </select>
        </div>
        <div class="col-sm-2">
            <button type="submit" class="btn btn-warning" onclick="return confirm_delete()">Delete</button>
        </div>
    </div>  
</form>
<form class="form-horizontal" action="delete/work.php">
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Route/Work</label>
        <div class="col-sm-4">
            <select class="form-control" name="id" required>
                <?php //looping employee ID List
                $sql = "SELECT * FROM `work`";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<option>".$row["ID"]."</option>";
                    }
                }
                ?>
            </select>
        </div>
        <div class="col-sm-2">
            <button type="submit" class="btn btn-warning" onclick="return confirm_delete()">Delete</button>
        </div>
    </div>  
</form>
<form class="form-horizontal" action="delete/company.php">
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Company</label>
        <div class="col-sm-4">
            <select class="form-control" name="id" required>
                <?php //looping employee ID List
                $sql = "SELECT * FROM `company`";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<option>".$row["ID"]."</option>";
                    }
                }
                ?>
            </select>
        </div>
        <div class="col-sm-2">
            <button type="submit" class="btn btn-warning" onclick="return confirm_delete()">Delete</button>
        </div>
    </div>  
</form>
<form class="form-horizontal" action="delete/distributor.php">
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Distributor</label>
        <div class="col-sm-4">
            <select class="form-control" name="id" required>
                <?php //looping employee ID List
                $sql = "SELECT * FROM `distributor`";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<option>".$row["ID"]."</option>";
                    }
                }
                ?>
            </select>
        </div>
        <div class="col-sm-2">
            <button type="submit" class="btn btn-warning" onclick="return confirm_delete()">Delete</button>
        </div>
    </div>  
</form>
<script type="text/javascript">
function confirm_delete() {
  return confirm('Do you want to delete the required data ?');
}
</script>