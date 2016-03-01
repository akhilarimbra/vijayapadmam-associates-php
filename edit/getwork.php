<?php
	include "../include.php";
	include "../lock.php";
	$q = intval($_GET['q']);
	$sql = "SELECT * FROM `work`";
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
	$sql = "SELECT * FROM `work` WHERE `ID` = '$temp'";
 	//`ID`, `Name`, `Type`
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
	    	$name = $row['Name'];
	    	$type = $row['Type'];
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
    <label for="inputname" class="col-sm-2 control-label">Type</label>
    <div class="col-sm-6">
      <select name="type" class="form-control" required>
        <option>Route</option>
        <option>Work</option>
      </select>
    </div>
</div> 
<div class="form-group">
  <div class="col-sm-offset-2 col-sm-10">
    <button type="submit" class="btn btn-danger">Update Work/Route</button>
  </div>
</div>
</form>