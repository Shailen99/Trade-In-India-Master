<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body {margin:0;}
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

  <form id="contact" action="sellconnection.php" method="POST">
    <h3>Contact Us to Sell your Device</h3>
      <input placeholder="First Name" name="FIRST">
      <br>
      <input placeholder="Last Name" name="LAST">
      <br>
      <input placeholder="Email Address" name="EMAIL">
      <br>
      <input placeholder="Desired Device" name="DEVICE">
      <br>
      <input placeholder="Device Age" name="AGE" tabindex="5">
      <br>
      <textarea placeholder="Device Issues" name = "ISSUE"></textarea>
      <br>
      <input placeholder="Desired Selling Price" name="SELLPRICE">
      <br>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
  </form>


</body>

</html>
