<?php
	include "../include.php";
	include "../lock.php";
	$q = intval($_GET['q']);
	$sql = "SELECT * FROM `client`";
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
	$sql = "SELECT * FROM `client` WHERE `ID` = '$temp'";
 	//`Name`, `ID`, `Contact Number`, `Product`
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
	    	$name = $row['Name'];
	    	$contact = $row['Contact Number'];
	    	$product = $row['Product'];
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
    <label for="inputname" class="col-sm-2 control-label">Product</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="product" value="<?php echo $product;?>" placeholder="Enter his/her personnel number" required>
    </div>
</div>
<div class="form-group">
  <div class="col-sm-offset-2 col-sm-10">
    <button type="submit" class="btn btn-danger">Update Client</button>
  </div>
</div>
</form>