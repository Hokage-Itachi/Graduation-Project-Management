<?php
    $servername = "localhost";
    $username = "root";
    $passwd = "uchihaitachi";
    $db_name = "gpms_schema";

    $conn = new mysqli($servername, $username, $passwd, $db_name);

    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }

?>