<form class="form-horizontal" action="billWorkshop.php" target="_blank">
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Vehicle Number</label>
        <div class="col-sm-6">
            <select class="form-control" name="vehicleid" required>
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
        <div class="col-sm-3">
            <label>Start Date</label>
            <input type="date" class="form-control" name="startdate" placeholder="Enter date" required>
        </div>
        <div class="col-sm-3">
            <label>End Date</label>
            <input type="date" class="form-control" name="enddate" placeholder="Enter date" required>
        </div>
        
    </div>
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Expense Type</label>
        <div class="col-sm-6">
            <select name="workshopid" class="form-control" required>
                <?php
                //SELECT * FROM `workshop` 
                $sql = "SELECT * FROM `workshop`";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
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
         <button type="submit" class="btn btn-primary">Get Expense Information</button>
       </div>
     </div>
</form><br>
<h4><b><ul>Confirm Payment</ul></b></h4><br>
<form class="form-horizontal" action="confirmpayment.php">
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Vehicle Number</label>
        <div class="col-sm-6">
            <select class="form-control" name="vehicleid" required>
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
        <div class="col-sm-3">
            <label>Start Date</label>
            <input type="date" class="form-control" name="startdate" placeholder="Enter date" required>
        </div>
        <div class="col-sm-3">
            <label>End Date</label>
            <input type="date" class="form-control" name="enddate" placeholder="Enter date" required>
        </div>
        
    </div>
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Expense Type</label>
        <div class="col-sm-6">
            <select name="workshopid" class="form-control" required>
                <?php
                //SELECT * FROM `workshop` 
                $sql = "SELECT * FROM `workshop`";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
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
       <div class="col-sm-offset-2 col-sm-10">
         <button type="submit" class="btn btn-primary">Confirm Payment</button>
       </div>
     </div>
</form>