<?php 
session_start();
require_once("connection.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>ASF Login</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" href="img/asf.png">
	<link href="https://fonts.googleapis.com/css?family=Calistoga&display=swap" rel="stylesheet">
</head>
<style type="text/css">
	*{
		font-family: 'Calistoga', cursive;
	}
	body{
		background-color: #829cd0;
	}
	.triangle-left {
	width: 0;
	height: 0;
	border-top: 20em solid #000b4f;
	border-right: 30em solid #20368f;
	border-bottom: 20em solid transparent;
	float: right;
}
	.triangle-right {
	width: 0;
	height: 0;
	border-top: 20em solid transparent;
	border-left: 30em solid #20368f;
	border-bottom: 20em solid #000b4f;
	float: left;
}	
div.a {
  transform: rotate(-34deg);
  position: absolute;
  margin-top: 6em;
  margin-left: 1.2em;
  font-size: 50px;
  color: white;
}
div.b {
  transform: rotate(-34deg);
  position: absolute;
  margin-top: 6em;
  margin-left: 5em;
  font-size: 50px;
  color: white;
}
.asf{
	position: absolute;
	left: 0;
	font-size: 50px;
	color: black;
	margin-left: 20px;
	margin-top: 20px;
	font-weight: bold
}
.box1{
	width: 99%;
	height: 100px;
	margin: auto;
	margin-top: 10px;
	background-color: white;
	position: absolute;
	opacity: .5;
	margin-left: 5px;
}
.user{
	transform: rotate(-34deg);
	position: absolute;
	top: 0;
	margin-top: 15em;
	margin-left: 27em;
}
.pass{
	transform: rotate(-34deg);
	position: absolute;
	top: 0;
	margin-top: 14em;
	margin-left: 35em;
}
.login{
	transform: rotate(-34deg);
	position: absolute;
	top: 0;
	margin-top: 21.5em;
	margin-left: 35em;
}
.signup{
	transform: rotate(-34deg);
	position: absolute;
	top: 0;
	margin-top: 18.5em;
	margin-left: 39em;
}
</style>
<body>
	<form method="post">
		<div class="box1"></div>
		<span class="asf">WELCOME TO ASF | AS FUC...</span>
		<div class="a">No, It's not what you think</div>
		<div class="b">It's AICS student feedback</div>
		<div class="triangle-right"></div>
		<div class="triangle-left"></div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



				<input type="text" class="user" placeholder="Username" name="username">
				<input type="password" class="pass" placeholder="Password" name="password">
				<button class="login" type="submit" name="login">LOGIN</button>
				<button class="signup"><a href="register.php">SIGNUP</a></button>
		</form>


	<?php
		if (isset($_POST['login'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];

			$q = 'SELECT * FROM `site` WHERE `username` = "'.$username.'" AND `password` = "'.$password.'"  ';

			$r = mysqli_query($con, $q);
			if ($r) {
				if (mysqli_num_rows($r) > 0){
					$_SESSION['username'] = $username;
					header("location:add.html");
				}else{
					echo '<p class="p">Your username and password do not matched<p>'; 
				}
			}else{
				echo $q; 
			}
		}
	?>

</body>
</html>