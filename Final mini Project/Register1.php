<?php

$servername="localhost";
$username="root";
$password="";

$conn=new mysqli($servername,$username,$password);
if($conn->connect_error){
    die("connection failed".$conn->connect_error);
}

$sql="CREATE DATABASE IF NOT EXISTS `Blood Donation`";
if($conn->query($sql)===TRUE){
    echo "Database created";
}
else{
    echo "Error creating database".$conn->error."<br>";
}

$conn->select_db("Blood Donation");

$tablesql="CREATE TABLE IF NOT EXISTS Donator Info(
    id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(20),
    email VARCHAR(30),
    password VARCHAR(30),
    blood group VARCHAR(10),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    UNIQUE KEY unique_email (email)
    )";

    if($conn->query($tablesql)===TRUE){
        echo "Table created";
    }
    else{
        echo "Error creating table".$conn->error."<br>";
    }

    $conn->close();
    ?>