<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

* {
	margin:0;
	padding:0;
	box-sizing:border-box;
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	-webkit-font-smoothing:antialiased;
	-moz-font-smoothing:antialiased;
	-o-font-smoothing:antialiased;
	font-smoothing:antialiased;
	text-rendering:optimizeLegibility;
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

.container {
	max-width:400px;
	width:100%;
	margin:0 auto;
	position:relative;
}
#contact {
	background:#F9F9F9;
	padding:25px;
	margin:50px 0;
}#contact h3 {
	color: #F96;
	display: block;
	font-size: 30px;
	font-weight: 400;
}

#contact h4 {
	margin:5px 0 15px;
	display:block;
	font-size:13px;
}
fieldset {
	border: medium none !important;
	margin: 0 0 10px;
	min-width: 100%;
	padding: 0;
	width: 100%;
}
#contact input[name="FIRST"],
 #contact input[name="LAST"],
 #contact input[name="EMAIL"],
 #contact input[name="PHONENUM"],
 #contact input[name="DEVICE"],
 #contact input[name="AGE"],
 #contact input[name="SELLPRICE"],
 #contact textarea,
 #contact button[type="submit"]
 { font:400 12px/16px "Open Sans", Helvetica, Arial, sans-serif; }

 #contact input[name="FIRST"],
  #contact input[name="LAST"],
  #contact input[name="EMAIL"],
	#contact input[name="PHONENUM"],
  #contact input[name="DEVICE"],
  #contact input[name="AGE"],
  #contact input[name="SELLPRICE"],
  #contact textarea,
  #contact button[type="submit"]{	width:100%;
	border:1px solid #CCC;
	background:#FFF;
	margin:0 0 5px;
	padding:10px;
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

<div class = "container">
  <form id="contact" action="sellconnection.php" method="POST">
    <h3>Contact Us to Sell your Device</h3>
    <h4> We will contact you within three to ten business days</h4>
    <fieldset>
      <label for="FIRST">First Name</label>
      <input placeholder="First Name" name="FIRST">
    </fieldset>
    <fieldset>
      <label for="LAST">Last Name</label>
      <input placeholder="Last Name" name="LAST">
    </fieldset>
    <fieldset>
      <label for="EMAIL">Email Address</label>
      <input placeholder="Email Address" name="EMAIL">
    </fieldset>
		<fieldset>
			<label for="PHONENUM">Phone Number</label>
			<input placeholder="Phone Number (+91)" name="PHONENUM">
		</fieldset>
    <fieldset>
      <label for="DEVICE">What Device</label>
      <input placeholder="Desired Device to Sell" name="DEVICE">
    </fieldset>
    <fieldset>
      <label for="AGE">Age of Device (Years)</label>
      <input placeholder="Device Age" name="AGE" tabindex="5">
    </fieldset>
    <fieldset>
      <label for="ISSUE">Device Issues</label>
      <textarea placeholder="Device Issues" name = "ISSUE"></textarea>
    </fieldset>
    <fieldset>
      <label for="SELLPRICE">Desired Selling Prince (INR)</label>
      <input placeholder="Desired Selling Price" name="SELLPRICE">
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>

  </form>
</div>

</body>

</html>
