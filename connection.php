<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "main"; 
    $db_name1 = "main"; 
    $conn = new mysqli($servername, $username, $password, $db_name, 3306);
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }
    $conn1 = new mysqli($servername, $username, $password, $db_name1, 3306);
    if($conn1->connect_error){
        die("Connection failed".$conn1->connect_error);
    }
    echo "";
    
    ?>