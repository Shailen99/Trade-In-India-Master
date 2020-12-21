<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {margin:0;}

th {
  color:#D5DDE5;;
  background:#1b1e24;
  border-bottom:4px solid #9ea7af;
  border-right: 1px solid #343a45;
  font-size:23px;
  font-weight: 100;
  padding:24px;
  text-align:left;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  vertical-align:middle;
}

th:first-child {
  border-top-left-radius:3px;
}

th:last-child {
  border-top-right-radius:3px;
  border-right:none;
}
tr {
  border-top: 1px solid #C1C3D1;
  border-bottom-: 1px solid #C1C3D1;
  color:#666B85;
  font-size:16px;
  font-weight:normal;
  text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
}

tr:hover td {
  background:#4E5066;
  color:#FFFFFF;
  border-top: 1px solid #22262e;
}

tr:first-child {
  border-top:none;
}

tr:last-child {
  border-bottom:none;
}

tr:nth-child(odd) td {
  background:#EBEBEB;
}

tr:nth-child(odd):hover td {
  background:#4E5066;
}

tr:last-child td:first-child {
  border-bottom-left-radius:3px;
}

tr:last-child td:last-child {
  border-bottom-right-radius:3px;
}

td {
  background:#FFFFFF;
  padding:20px;
  text-align:left;
  vertical-align:middle;
  font-weight:300;
  font-size:18px;
  text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
  border-right: 1px solid #C1C3D1;
}

td:last-child {
  border-right: 0px;
}

th.text-left {
  text-align: left;
}

th.text-center {
  text-align: center;
}

th.text-right {
  text-align: right;
}

td.text-left {
  text-align: left;
}

td.text-center {
  text-align: center;
}

td.text-right {
  text-align: right;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #3FA802;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}


.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}


.right
{
margin-right: 1000px;
}

.main {
  padding: 16px;
  margin-bottom: 30px;
}
</style>
</head>
<body>
  <div class="navbar">
    <a href="main.html">Home</a>
    <a href="about.html">Who Are We</a>
    <a href = "selltous.php"> Sell to Us </a>
    <div class="dropdown">
    <button class="dropbtn">Buy</button>
    <div class="dropdown-content">
      <a href="buyapple.html">Apple</a>
      <a href="buysamsung.html">Samsung</a>
      <a href="buymicrosoft.html">Microsoft</a>
    </div>
  </div>
  <div class = "dropdown">
  <button class="dropbtn">Sell</button>
  <div class="dropdown-content">
    <a href="sellapple.html">Apple</a>
    <a href="sellsamsung.html">Samsung</a>
    <a href="sellmicrosoft.html">Microsoft</a>
  </div>
  </div>
  <a href="help.html" style="float:right">Help</a>
  <a href="#" style="float:right">Forum</a>
  <a href="admin.php" style="float:right">Admin</a>




</div>
<center>
  <h2> Information of Interested Sellers</h2>
<tr>
<td>
<?php
$connection = mysqli_connect("localhost","root","","sell");
$sql = "SELECT FirstName, LastName, Email,PHONENUM, Device,  DeviceAge, DeviceIssues, DesiredPrice FROM details";

$results = mysqli_query($connection,$sql);

if(mysqli_num_rows($results)>0){
  echo "<table><tr><th>First Name</th><th>Last Name</th><th>Email</th><th>Phone Number</th><th>Device</th><th>Age</th><th>Issues</th><th>Price Wanted</th></tr>";

while ($row = mysqli_fetch_array($results))
{
    echo "<tr><td>" .$row[0]."</td><td> ".$row[1]."</td><td> ".$row[2]." </td><td>".$row[3]."</td><td> ".$row[4]."</td><td> ".$row[5]." </td><td>".$row[6]." </td><td>".$row[7]."</td></tr>";

}
}
echo "</table>";

?>
</td>
</tr>
<h2> Comments and Concerns</h2>

<?php
$connection = mysqli_connect("localhost","root","","Help");
$sql = "SELECT Name, Email, PhoneNum,Comment FROM HelpInformation";

$results = mysqli_query($connection,$sql);

if(mysqli_num_rows($results)>0){
  echo "<table><tr><th>Name</th><th>Email</th><th>Phone Number</th><th>Comment</th></tr>";

while ($row = mysqli_fetch_array($results))
{
    echo "<tr><td>" .$row[0]."</td><td> ".$row[1]."</td><td> ".$row[2]." </td><td>".$row[3]."</td></tr>";
}
}
echo "</table>";

?>



</center>

</body>

</html>
