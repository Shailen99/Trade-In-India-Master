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


$Name = $_POST["name"];
$Email = $_POST["email"];
$Comment = $_POST["text"];

$sql = "INSERT INTO details (Name, Email, Comment) VALUES ('{$Name}', '{$Email}', '{$Comment}')";


$conn->close();
?>
