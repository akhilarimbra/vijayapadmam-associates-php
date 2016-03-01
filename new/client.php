<form class="form-horizontal" action="addclient.php">
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="name" placeholder="Enter your new client's name" required>
        </div>
    </div>
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Client ID</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="id" placeholder="Enter an unique ID for your Client" required>
        </div>
    </div>    
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Contact Number</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="contactno" placeholder="Enter client's contact number" required>
        </div>
    </div>
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Product Name</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="product" placeholder="Enter client's product name" required>
        </div>
    </div>  
     <div class="form-group">
       <div class="col-sm-offset-2 col-sm-10">
         <button type="submit" class="btn btn-danger">Add Client</button>
       </div>
     </div>
</form>