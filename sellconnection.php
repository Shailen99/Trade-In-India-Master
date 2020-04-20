<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sell";

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn)
{
  echo "Connection OK";
}
else {
  die("connection failed because:" .mysqli_connect_error());
}

$First = $_POST["FIRST"];
$Last = $_POST["LAST"];
$Email = $_POST["EMAIL"];
$Device = $_POST["DEVICE"];
$Age = $_POST["AGE"];
$Issue = $_POST["ISSUE"];
$SellPrice = $_POST["SELLPRICE"];




$sql = "INSERT INTO details (FirstName, LastName, Email, Device, DeviceAge, DeviceIssues, DesiredPrice)
VALUES ('{$First}', '{$Last}', '{$Email}','{$Device}', '{$Age}','{$Issue}','{$SellPrice}')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
