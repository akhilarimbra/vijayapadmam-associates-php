        <div class="col-lg-12">
            <form class="form-horizontal" action="include/update.php">
                <div class="form-group">
                    <label for="inputname" class="col-sm-2 control-label">Type</label>
                    <div class="col-sm-6">
                        <select class="form-control" name="type" required>
                            <?php //looping employee ID List
                            $sql = "SELECT * FROM `rate`";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    echo "<option>".$row["type"]."</option>";
                                }
                            } else {
                                echo "0 results";
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputname" class="col-sm-2 control-label">Rate</label>
                    <div class="col-sm-6">
                      <input type="number" class="form-control" name="rate" placeholder="Enter Updated Rate" step="any" required>
                    </div>
                </div>
                 <div class="form-group">
                   <div class="col-sm-offset-2 col-sm-10">
                     <button type="submit" class="btn btn-primary">Update Info</button>
                   </div>
                 </div>
            </form>
        </div>