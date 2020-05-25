<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $table = "qlsv";

    $conn = new mysqli($servername, $username, $password, $table);
    mysqli_set_charset($conn, 'UTF8');

    if($conn->connect_error){
        die("Connection failes: " . $conn->connect_error);
    }
    // echo "Connected successfully";

?>