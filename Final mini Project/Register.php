<?php
$servername="localhost";
$username="root";
$password="";
$dbname="Blood Donation";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("connection failed".$conn->connect_error);
}

$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$bloodgroup=$_POST['blood group'];


$insert="INSERT INTO Donator Info (username,email,password,blood group) VALUES ('$username','$email','$password','$bloodgroup')";
if($conn->query($insert)===TRUE){
    echo "Form Submit";
}
else{
    echo "Error".$insert."<br>".$conn->error;
}

$conn->close();

?>