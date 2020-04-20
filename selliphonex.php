<!DOCTYPE HTML>
<html>
<head>
<style>

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

</style>
</head>
<body>

  <?php
  $result = "Insert Data";
  $x = 53019;
  if(isset($_POST["button"])){

  $BrokenScreen_value= $_POST ['BrokenScreen'];
  $x = $BrokenScreen_value*53019;
  $Age_value = $_POST ['device_age'];
  $x = $Age_value*$x;
  $issue_value = $_POST ['issues'];
  $x = $issue_value * $x;
  $result =  $x;
}
  ?>   <div class="navbar">
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


<center><h1>iPhone X - 64 GB</h1></center>
<img src="style/apple_iphonex_main.jpg" alt="Headshot photo" style="float:left;margin:0 20px 20px 0;"> <ul>
<li>Product Type: Smartphone</li>
<li>Release Date: November 3, 2017</li>


<h2>How much will we buy your device for?</h2>
<form action="" method="post">
  <center>  <h3>Is the Screen Broken?</h3>

  <input type="radio" name="BrokenScreen" value = "0.75">Yes</input>
  <input type="radio" name="BrokenScreen" value = "0.9">No</input>


  <center>  <h3>How Old is the Device?</h3>
<input type="radio" name="device_age" value = "0.95">1 Year or Less</input>
<input type="radio" name="device_age" value = "0.9">1-2 Years</input>
<input type="radio" name="device_age" value = "0.85">2-4 Years</input>
<input type="radio" name="device_age" value = "0.80">5 or More Years</input>
</center>

<center><h3>Any Other Issues with the Device?</h3><center>

<input type="radio" name="issues" value = "0.65"> Broken Speaker or Microphone
<input type="radio" name="issues" value = "0.75"> Broken Camera (Front or Back)
<input type="radio" name="issues" value = "0.45"> Broken Home Button
<input type="radio" name="issues" value = "0.9"> Software Issues (Of Any Variety)

</center>

<h1> Our Calculated Price: <?php echo $result; ?> INR</h1>
<input type="submit" name="button" value="Submit"/></form> </center>



</body>
