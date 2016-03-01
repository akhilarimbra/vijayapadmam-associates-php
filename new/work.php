<form class="form-horizontal" action="addwork.php">
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">ID</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="nid" placeholder="Enter your new work's unique ID" required>
        </div>
    </div>
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="name" placeholder="Enter your new work's name" required>
        </div>
    </div>
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Type</label>
        <div class="col-sm-6">
          <select name="type" class="form-control">
            <option>Route</option>
            <option>Work</option>
          </select>
        </div>
    </div>
     <div class="form-group">
       <div class="col-sm-offset-2 col-sm-10">
         <button type="submit" class="btn btn-danger">Add Route/Work</button>
       </div>
     </div>
</form>