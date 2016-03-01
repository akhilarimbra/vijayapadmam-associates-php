<form class="form-horizontal" action="reportvehicle.php">
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Vehicle ID</label>
        <div class="col-sm-6">
            <select class="form-control" name="id" required>
                <?php
                $sql = "SELECT * FROM `vehicle`";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    echo "<option>---</option>";
                    while($row = $result->fetch_assoc()) {
                        echo "<option>".$row["ID"]."</option>";
                    }
                } else {
                    echo "<option>---</option>";
                }
                ?>
            </select>
        </div>
    </div>     
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Date</label>
        <div class="col-sm-6">
            <input type="date" class="form-control" name="date" placeholder="Enter date" required>
        </div>
    </div>
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Cost</label>
        <div class="col-sm-6">
            <input type="number" step="any" class="form-control" name="expense" placeholder="Enter the amount of expense payed" required>
        </div>
    </div>
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Expense Type ID</label>
        <div class="col-sm-6">
            <select class="form-control" name="workshop" required>
                <?php
                $sql = "SELECT * FROM `workshop`";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<option>".$row["ID"]."</option>";
                    }
                } else {
                    echo "0 results";
                }
                ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Payment Status</label>
        <div class="col-sm-6">
            <select class="form-control" name="status" required>
                <option>Paid</option>
                <option>UnPaid</option>
            </select>
        </div>
    </div>   
     <div class="form-group">
       <div class="col-sm-offset-2 col-sm-10">
         <button type="submit" class="btn btn-primary">Add Vehicle Expense Information</button>
       </div>
     </div>
</form>