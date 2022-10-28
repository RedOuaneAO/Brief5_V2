<?php
    
    global $conn ;
    //CONNECT TO MYSQL DATABASE USING MYSQLI
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword ="";
    $dbName = "youcodescumboard";

    $conn =  mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

    if(!$conn){
        die("Connection failed : " . mysqli_connect_error());
    }else{
    echo "Connected successfully";
    }
?>