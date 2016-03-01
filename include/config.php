<?php
        /*
        $servername = "localhost";
        $username = "geekuser";
        $password = "arimbra143#";
        $dbname = "geekuser";
        */
        $servername = "localhost";
        $username = "geekuser";
        $password = "arimbra143#";
        $dbname = "vijayapadmam";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
?>