<form class="form-horizontal" action="addvehicle.php">
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Vehicle Name</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="name" placeholder="Enter your new vehicle's name" required>
        </div>
    </div>
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Vehicle Number(ID)</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="id" placeholder="Enter the number of your vehicle" required>
        </div>
    </div>
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Type</label>
        <div class="col-sm-6">
          <select name="type" class="form-control" required>
            <option>Owned</option>
            <option>Rented</option>
          </select>
        </div>
    </div> 
     <div class="form-group">
       <div class="col-sm-offset-2 col-sm-10">
         <button type="submit" class="btn btn-danger">Add Vehicle</button>
       </div>
     </div>
</form>