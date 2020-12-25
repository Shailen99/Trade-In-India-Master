

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style.css" rel="stylesheet" type="text/css">

<style>
.login {
  	width: 400px;
  	background-color: #ffffff;
  	box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.3);
  	margin: 100px auto;
}
.login h1 {
  	text-align: center;
  	color: #5b6574;
  	font-size: 24px;
  	padding: 20px 0 20px 0;
  	border-bottom: 1px solid #dee0e4;
}
.login form {
  	display: flex;
  	flex-wrap: wrap;
  	justify-content: center;
  	padding-top: 20px;
}
.login form input[type="password"], .login form input[type="text"] {
  	width: 310px;
  	height: 50px;
  	border: 1px solid #dee0e4;
  	margin-bottom: 20px;
  	padding: 0 15px;
}
.login form input[type="submit"] {
  	width: 100%;
  	padding: 15px;
 	margin-top: 20px;
  	background-color: #3274d6;
  	border: 0;
  	cursor: pointer;
  	font-weight: bold;
  	color: #ffffff;
  	transition: background-color 0.2s;
}
.login form input[type="submit"]:hover {
	background-color: #2868c7;
  	transition: background-color 0.2s;
}

body {
  margin:0;
  box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
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

<center><img src="style/companylogo.png" alt="Trade In India Logo">
<h2> Administrator Area </h2>
<div class="login">
  <h1>Login</h1>

  <form action="authenticate.php" method="post">
    <label for="username">
      <i class="fas fa-user"></i>
    </label>
    <input type="text" name="username" placeholder="Username" id="username" required>
    <label for="password">
      <i class="fas fa-lock"></i>
    </label>
    <input type="password" name="password" placeholder="Password" id="password" required>
    <input type="submit" value="Login">
  </form>
</div>


</body>
</html>
