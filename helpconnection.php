<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Help";

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn)
{
  echo "Connection OK";
}
else {
  die("connection failed because:" .mysqli_connect_error());
}


$Name = $_POST["Name"];
$Email = $_POST["Email"];
$Phone = $_POST["PhoneNum"];
$Comment = $_POST["comment"];

$sql = "INSERT INTO HelpInformation (Name, Email, PhoneNum, Comment) VALUES ('{$Name}', '{$Email}', '{$Phone}', '{$Comment}')";


$conn->close();
?>
