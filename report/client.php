<form class="form-horizontal" action="reportclient.php">
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Client ID</label>
        <div class="col-sm-6">
            <select class="form-control" name="id" required>
                <?php
                $sql = "SELECT * FROM `client`";
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
        <label for="inputname" class="col-sm-2 control-label">Date</label>
        <div class="col-sm-6">
        <input type="date" class="form-control" name="date" placeholder="Enter starting kilometer reading" required>
        </div>
    </div>
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Starting Kilometer</label>
        <div class="col-sm-6">
        <input type="number" class="form-control" step="any" name="startkm" placeholder="Enter starting kilometer reading" required>
        </div>
    </div>    
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Ending Kilometer</label>
        <div class="col-sm-6">
        <input type="number" class="form-control" step="any" name="endkm" placeholder="Enter ending kilometer reading" required>
        </div>
    </div>
     <div class="form-group">
       <div class="col-sm-offset-2 col-sm-10">
         <button type="submit" class="btn btn-primary">Add Client Bill Information</button>
       </div>
     </div>
</form>