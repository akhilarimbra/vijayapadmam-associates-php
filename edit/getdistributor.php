<?php
	include "../include.php";
	include "../lock.php";
	$q = intval($_GET['q']);
	$sql = "SELECT * FROM `distributor`";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	    $count = 0;
	    while($row = $result->fetch_assoc()) {
	    	$count++;
	    	if($count === $q){
	    		$temp = $row["ID"];
	    	}
	    }
	}
	$sql = "SELECT * FROM `distributor` WHERE `ID` = '$temp'";
 	//`ID`, `Name`, `Route`, `Location`
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
	    	$name = $row['Name'];
	    	$route = $row['Company'];
	    	$location = $row['Location'];
	    }
	}
?>
<form class="form-horizontal" action="update/emp.php">
<div class="form-group">
    <label for="inputname" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="name" value="<?php echo $name; ?>" placeholder="Enter your new Employee's name" required>
    </div>
</div>
<div class="form-group">
    <label for="inputname" class="col-sm-2 control-label">Select Company ID</label>
    <div class="col-sm-6">
      <select name="route" class="form-control" required>
            <?php //looping employee ID List
            $sql = "SELECT * FROM `company` ORDER BY ID ASC";
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
    <label for="inputname" class="col-sm-2 control-label">Location</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="location" value="<?php echo $location;?>" placeholder="Enter your new distributor's location" required>
    </div>
</div>
<div class="form-group">
  <div class="col-sm-offset-2 col-sm-10">
    <button type="submit" class="btn btn-danger">Update Distributor</button>
  </div>
</div>
</form>