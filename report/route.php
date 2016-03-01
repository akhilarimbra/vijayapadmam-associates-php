<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
<div align="center">
<?php
    if (isset($_GET['date'])) {
    ?>
<a href="report.php?id=route">
    <button type="button" class="btn btn-danger" align="center">Reset</button>
</a>
    <?php
    }
        function getCompanyValue(){
            include 'include/config.php';
            $temp = 0;
            $count = 0;
            $sql = "SELECT `ID`, `Name` FROM `company`";
            $result = $conn->query($sql);
            if(isset($_GET['company'])){
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $count++;
                        if($_GET['company'] == $row['ID']){
                            $temp = $count;
                        }
                    }
                }
            }
            return $temp;
        }
?>
</div>
<form class="form-horizontal" action="reportroute.php">
    <div class="form-group"><br>
        <label for="inputname" class="col-sm-2 control-label">Route ID</label>
        <div class="col-sm-6">
        <?php
            if (isset($_GET['route'])) {
            ?>
                <select class="form-control" name="route" required>
                    <option><?php echo $_GET['route'];?></option>
                </select>
            <?php
            }else{
        ?>
            <select class="form-control" name="route" required>
                <?php
                $sql = "SELECT * FROM `work` WHERE `Type` = 'Route'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<option>".$row["ID"]."</option>";
                    }
                }
                ?>
            </select>
            <?php
        }
        ?>
        </div>
    </div>
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Company ID</label>
        <div class="col-sm-6">
        <?php
            if (isset($_GET['company'])) {
                ?>
            <select class="form-control" name="company" required onchange="showUser(this.value)" required>
                <option value=<?php echo getCompanyValue();?>><?php echo $_GET['company'];?></option>
            </select>
            <?php
            }else{
        ?>
            <select class="form-control" name="company" required onchange="showUser(this.value)" required>
                <?php
                $sql = "SELECT `ID`, `Name` FROM `company`";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    $count = 0;
                    echo "<option value=''>Select a Company</option>";
                    while($row = $result->fetch_assoc()) {
                        $count++;
                        echo "<option value=".$count.">".$row["ID"]."</option>";
                    }
                }
                ?>
            </select>
            <?php 
        }
        ?>
        </div>
    </div>
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Distributor ID</label>
        <div class="col-sm-6">
        <?php
            if (isset($_GET['company'])) {
        ?>
            <select class="form-control" name="id" required>
                <?php
                $sql = "SELECT * FROM `distributor` WHERE `Company` = '".$_GET['company']."'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<option>".$row["ID"]."</option>";
                    }
                }
                ?>
            </select>
        <?php
            }else{
        ?>
            <select class="form-control" name="id" required id="txtHint">
            </select>
        <?php }
        ?>
        </div>
    </div>     
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Date</label>
        <div class="col-sm-6">
            <?php
            function cdate(){
                if (isset($_GET['date'])) {
                  $date = $_GET['date'];
                  return "value=$date";  
                }
            }
            ?>
            <input type="date" class="form-control" name="date" placeholder="Enter date" required <?php echo cdate();?> >
        </div>
    </div>     
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">SIM</label>
        <div class="col-sm-6">
            <input type="number" step="any" class="form-control" name="sim" placeholder="Enter the number of SIM" required>
        </div>
    </div>     
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">RCV</label>
        <div class="col-sm-6">
            <input type="number" step="any" class="form-control" name="rcv" placeholder="Enter the number of RCV" required>
        </div>
    </div>     
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Promo/Other</label>
        <div class="col-sm-6">
            <input type="number" step="any" class="form-control" name="promo" placeholder="Enter the number of Promo/Other" required>
        </div>
    </div>     
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Kilometer Run</label>
        <div class="col-sm-6">
            <input type="number" step="any" class="form-control" name="km" placeholder="Enter the amount of kilometer runned for the distributor" required>
        </div>
    </div>     
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Time Taken</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="time" placeholder="Enter the amount of time taken for the required task" required>
        </div>
    </div>
     <div class="form-group">
       <div class="col-sm-offset-2 col-sm-10">
         <button type="submit" class="btn btn-primary">Add Report</button>
       </div>
     </div>
</form>