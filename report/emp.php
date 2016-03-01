<?php //`ID`, `Vehicle`, `Date`, `Advance`, `Allowance`, `StartKM`, `EndKM`, `Work`, `Starting Time`, `Ending Time`, `Day`, `Night`, `Stay` ?>
<form class="form-horizontal" action="reportemp.php">
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Employee ID</label>
        <div class="col-sm-6">
            <select class="form-control" name="id" required>
                <?php //looping employee ID List
                $sql = "SELECT * FROM `employee`";
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
        <label for="inputname" class="col-sm-2 control-label">Vehicle Used</label>
        <div class="col-sm-6">
            <select class="form-control" name="vehicle" required>
                <?php //looping employee ID List
                $sql = "SELECT * FROM `vehicle`";
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
        <label for="inputname" class="col-sm-2 control-label">Route/Work</label>
        <div class="col-sm-6">
            <select class="form-control" name="work" required>
                <?php //looping employee ID List
                $sql = "SELECT * FROM `work`";
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
        <label for="inputdate" class="col-sm-2 control-label">Date</label>
        <div class="col-sm-6">
        <input type="date" class="form-control" name="date" placeholder="Enter date" required>
        </div>
    </div>
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Advanced Payed</label>
        <div class="col-sm-6">
        <input type="number" step="any" class="form-control" name="advance" placeholder="Enter the amount of advanced payed" required>
        </div>
    </div>
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Basic</label>
        <div class="col-sm-6">
        <input type="number" step="any" class="form-control" name="basic" placeholder="Enter the number of basic" required>
        </div>
    </div>
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Starting Kilometer</label>
        <div class="col-sm-6">
        <input type="number" step="any" class="form-control" name="startkm" placeholder="Enter starting kilometer reading" required>
        </div>
    </div>
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Starting Time</label>
        <div class="col-sm-6">
        <input type="text" class="form-control" name="stime" placeholder="Enter starting time reading" required>
        </div>
    </div> 
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Ending Kilometer</label>
        <div class="col-sm-6">
        <input type="number" step="any" class="form-control" name="endkm" placeholder="Enter ending kilometer reading" required>
        </div>
    </div>  
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Ending Time</label>
        <div class="col-sm-6">
        <input type="text" class="form-control" name="etime" placeholder="Enter ending time reading" required>
        </div>
    </div>
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Day Time</label>
        <div class="col-sm-6">
        <input type="number" step="any" class="form-control" name="day" placeholder="Enter total day hours" required>
        </div>
    </div>    
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Night Time</label>
        <div class="col-sm-6">
        <input type="number" step="any" class="form-control" name="night" placeholder="Enter total night hours" required>
        </div>
    </div>
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Office Work Done</label>
        <div class="col-sm-6">
        <input type="number" step="any" class="form-control" name="officehr" placeholder="Enter the number of hours spend for office work" required>
        </div>
    </div>
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Number of Work Done</label>
        <div class="col-sm-6">
        <input type="number" step="any" class="form-control" name="nwork" placeholder="Enter the number of work done" required>
        </div>
    </div>
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Number of Stay</label>
        <div class="col-sm-6">
        <input type="number" step="any" class="form-control" name="stay" placeholder="Enter the number of stays" required>
        </div>
    </div>
    <h3 style="padding-left:9.5em;padding-bottom:.5em;"><b><u>Allowances Given</u></b></h3>
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Travel</label>
        <div class="col-sm-6">
        <input type="number" step="any" class="form-control" name="tallowance" placeholder="Enter the amount of allowance given" required>
        </div>
    </div>
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Communication</label>
        <div class="col-sm-6">
        <input type="number" step="any" class="form-control" name="callowance" placeholder="Enter the amount of allowance given" required>
        </div>
    </div>
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Loading and Unloading</label>
        <div class="col-sm-6">
        <input type="number" step="any" class="form-control" name="lallowance" placeholder="Enter the amount of allowance given" required>
        </div>
    </div>     
     <div class="form-group">
       <div class="col-sm-offset-2 col-sm-10">
         <button type="submit" class="btn btn-primary">Add Employee Work Information</button>
       </div>
     </div>
</form>