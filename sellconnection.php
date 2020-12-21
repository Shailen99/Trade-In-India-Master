<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sell";

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn)
{
}
else {
  die("connection failed because:" .mysqli_connect_error());
}

$First = $_POST["FIRST"];
$Last = $_POST["LAST"];
$Email = $_POST["EMAIL"];
$Phone = $_POST["PHONENUM"];
$Device = $_POST["DEVICE"];
$Age = $_POST["AGE"];
$Issue = $_POST["ISSUE"];
$SellPrice = $_POST["SELLPRICE"];




$sql = "INSERT INTO details (FirstName, LastName, Email, PHONENUM, Device, DeviceAge, DeviceIssues, DesiredPrice)
VALUES ('{$First}', '{$Last}', '{$Email}','{$Phone}','{$Device}', '{$Age}','{$Issue}','{$SellPrice}')";



$conn->close();
?>
