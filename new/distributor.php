<form class="form-horizontal" action="adddistributor.php">
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Select Route ID</label>
        <div class="col-sm-6">
          <select name="route" class="form-control" required>
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
    </div>
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Distributor ID</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="id" placeholder="Enter your new distributor's unique ID" required>
        </div>
    </div>
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Distributor Name</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="name" placeholder="Enter your new distributor's name" required>
        </div>
    </div>
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Location</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="location" placeholder="Enter your new distributor's location" required>
        </div>
    </div>
     <div class="form-group">
       <div class="col-sm-offset-2 col-sm-10">
         <button type="submit" class="btn btn-danger">Add Distributor</button>
       </div>
     </div>
</form>