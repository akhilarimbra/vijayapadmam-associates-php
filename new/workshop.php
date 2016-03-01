<form class="form-horizontal" action="addworkshop.php">
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">ID</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="id" placeholder="Enter an unique id for the expense" required>
        </div>
    </div>
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="name" placeholder="Enter the name of the new expense" required>
        </div>
    </div>
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Contact Number</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="contact" placeholder="Enter the contact number of the expense" required>
        </div>
    </div>
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Location</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="location" placeholder="Enter the location of the expense" required>
        </div>
    </div> 
     <div class="form-group">
       <div class="col-sm-offset-2 col-sm-10">
         <button type="submit" class="btn btn-danger">Add expense</button>
       </div>
     </div>
</form>