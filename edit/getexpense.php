<?php
	include "../include.php";
	include "../lock.php";
	$q = intval($_GET['q']);
	$sql = "SELECT * FROM `workshop`";
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
	$sql = "SELECT * FROM `workshop` WHERE `ID` = '$temp'";
 	//`ID`, `Name`, `Contact`, `Location`
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
	    	$name = $row['Name'];
	    	$contact = $row['Contact'];
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
    <label for="inputname" class="col-sm-2 control-label">Contact Number</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="contactno" value="<?php echo $contact;?>" placeholder="Enter his/her contact number" required>
    </div>
</div>     
<div class="form-group">
    <label for="inputname" class="col-sm-2 control-label">Location</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="location" value="<?php echo $location;?>" placeholder="Enter his/her personnel number" required>
    </div>
</div>
<div class="form-group">
  <div class="col-sm-offset-2 col-sm-10">
    <button type="submit" class="btn btn-danger">Update Expense Information</button>
  </div>
</div>
</form>