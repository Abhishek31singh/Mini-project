<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        background-color: red;
        color: aliceblue;
    }
</style>
<body>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="Blood Donation";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("connection failed".$conn->connect_error);
}

$sql="SELECT * FROM Info";
$result=$conn->query($sql);

if($result->num_rows > 0){
    echo "<h2>Donator Information:</h2>";
    echo "<table border='5' >
        <tr>
             <th>ID</th>
             <th>NAME</th>
             <th>EMAIL</th>
             <th>PASSWORD</th>
             <th>BLOOD GROUP</th>
             <th>CREATED AT</th>
        </tr>";
    while($row =$result->fetch_assoc()){
        echo"<tr>
                <td>{$row['id']}</td>
                <td>{$row['username']}</td>
                <td>{$row['email']}</td>
                <td>{$row['password']}</td>
                <td>{$row['bloodgroup']}</td>
                <td>{$row['created_at']}</td>
            </tr>";
    }

    echo"</table>";
}
else{
    echo"No entries found";
}

$conn->close();

?>
</body>
</html>
