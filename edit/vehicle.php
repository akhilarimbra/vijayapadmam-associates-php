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
        xmlhttp.open("GET","edit/getvehicle.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
<form class="form-horizontal" action="update/vehicle.php">
    <div class="form-group">
        <label for="inputname" class="col-sm-2 control-label">Vehicle Number</label>
        <div class="col-sm-6">
            <select class="form-control" name="id" required onchange="showUser(this.value)">
                <div id="txtHint"></div>
                <?php
                $sql = "SELECT * FROM `vehicle`";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    $count = 0;
                    echo "<option value = '' >Select a Vehicle ID</option>";
                    while($row = $result->fetch_assoc()) {
                        $count++;
                        echo "<option value=".$count.">".$row["ID"]."</option>";
                    }
                }
                ?>
            </select>
        </div>
    </div>
    <div id="txtHint"><b></b></div>
</form>