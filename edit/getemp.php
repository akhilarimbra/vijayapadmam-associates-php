<?php
	include "../include.php";
	include "../lock.php";
	$q = intval($_GET['q']);
	$sql = "SELECT * FROM `employee`";
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
	$sql = "SELECT * FROM `employee` WHERE `ID` = '$temp'";
	//`Name`, `ID`, `Contact Number`, `Personnel Number`, `Licence`, `Badge`, 
	//`Account Number`, `Bank`, `Branch`, `IFSC`, `S/O`, `Address`, `Sex`
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
	    	$name = $row['Name'];
	    	$contact = $row['Contact Number'];
	    	$personnel = $row['Personnel Number'];
	    	$licence = $row['Licence'];
	    	$badge = $row['Badge'];
	    	$account = $row['Account Number'];
	    	$bank = $row['Bank'];
	    	$branch = $row['Branch'];
	    	$ifsc = $row['IFSC'];
	    	$so = $row['S/O'];
	    	$address = $row['Address'];
	    	$sex = $row['Sex'];
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
    <label for="inputname" class="col-sm-2 control-label">Personnel Number</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="pno" value="<?php echo $personnel;?>" placeholder="Enter his/her personnel number" required>
    </div>
</div>     
<div class="form-group">
    <label for="inputname" class="col-sm-2 control-label">Licence Number</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="lno" value="<?php echo $licence;?>" placeholder="Enter his/her licence number" required>
</div>
</div>     
<div class="form-group">
    <label for="inputname" class="col-sm-2 control-label">Badge Number</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="badge" value="<?php echo $badge;?>" placeholder="Enter his/her badge number" required>
    </div>
</div>     
<div class="form-group">
    <label for="inputname" class="col-sm-2 control-label">Account Number</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="account" value="<?php echo $account;?>" placeholder="Enter his/her account number" required>
    </div>
</div>     
<div class="form-group">
    <label for="inputname" class="col-sm-2 control-label">Bank Name</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="bank" value="<?php echo $bank;?>" placeholder="Enter the Bank Name corresponding to the account number" required>
    </div>
</div>
<div class="form-group">
    <label for="inputname" class="col-sm-2 control-label">Branch</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="branch" value="<?php echo $branch;?>" placeholder="Enter the Branch Name corresponding to the Bank Account" required>
    </div>
</div>    
<div class="form-group">
    <label for="inputname" class="col-sm-2 control-label">IFSC Number</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="ifsc" value="<?php echo $ifsc;?>" placeholder="Enter the required IFSC number" required>
    </div>
</div>     
<div class="form-group">
    <label for="inputname" class="col-sm-2 control-label">S/O</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="sonof" value="<?php echo $so;?>" placeholder="Enter the name of the employee's father" required>
    </div>
</div>     
<div class="form-group">
    <label for="inputname" class="col-sm-2 control-label">Address</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="address" value="<?php echo $address;?>" placeholder="Enter his/her address/location information" required>
    </div>
</div>    
<div class="form-group">
    <label for="inputname" class="col-sm-2 control-label">Sex</label>
    <div class="col-sm-6">
        <select class="form-control" name="sex">
          <option>Male</option>
          <option>Female</option>
        </select>
    </div>
</div>
<div class="form-group">
  <div class="col-sm-offset-2 col-sm-10">
    <button type="submit" class="btn btn-danger">Update Employee</button>
  </div>
</div>
</form>