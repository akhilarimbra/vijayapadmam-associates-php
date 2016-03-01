<form class="form-horizontal" action="addemp.php">
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Employee ID</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="id" placeholder="Enter an unique ID for your employee" required>
        </div>
    </div>
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="name" placeholder="Enter your new Employee's name" required>
        </div>
    </div>    
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Contact Number</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="contactno" placeholder="Enter his/her contact number" required>
        </div>
    </div>     
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Personnel Number</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="pno" placeholder="Enter his/her personnel number" required>
        </div>
    </div>     
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Licence Number</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="lno" placeholder="Enter his/her licence number" required>
        </div>
    </div>     
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Badge Number</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="badge" placeholder="Enter his/her badge number" required>
        </div>
    </div>     
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Account Number</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="account" placeholder="Enter his/her account number" required>
        </div>
    </div>     
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Bank Name</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="bank" placeholder="Enter the Bank Name corresponding to the account number" required>
        </div>
    </div>
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Branch</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="branch" placeholder="Enter the Branch Name corresponding to the Bank Account" required>
        </div>
    </div>    
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">IFSC Number</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="ifsc" placeholder="Enter the required IFSC number" required>
        </div>
    </div>     
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">S/O</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="sonof" placeholder="Enter the name of the employee's father" required>
        </div>
    </div>     
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Address</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="address" placeholder="Enter his/her address/location information" required>
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
      <button type="submit" class="btn btn-danger">Add Employee</button>
    </div>
  </div>
</form>