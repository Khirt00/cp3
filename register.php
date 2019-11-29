<?php require_once("connection.php");?>
<!DOCTYPE html> 
<title>ASF Register</title>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" href="img/asf.png">
	<link rel="stylesheet" type="text/css" href="btn.css">
<body>
	<style type="text/css">
		body{
			overflow: hidden;
			background-color: #e8f6f9
		}
		.con{
			margin-left: 7em;
		}
		.container1{
			margin-left: 10em;
			margin-top: 5em;
			position: absolute;
			width: 300px;
			height: 100%;
		}
		.container2{
			margin-left: 20em;
			margin-top: 15em;
			position: absolute;
			width: 300px;
			height: 100%;
		}
		.container3{
			margin-left: 32em;
			margin-top: 8em;
			position: absolute;
			width: 300px;
			height: 100%;
		}
		.container4{
			margin-left: 45em;
			margin-top: 17em;
			position: absolute;
			width: 300px;
			height: 100%;
		}
		.top1,.top2,.top3,.top4{
			width: 300px;
			height: 100px;
			background-color: #cdf1f9;
			transform: skew(20deg);
		}
		.left1,.left2,.left3,.left4{
			width: 37px;
			height: 100%;
			background-color: #aee1ec;
			margin-left: -19px;
			position: absolute;
			top: 0;
		}
		.bottom1,.bottom2,.bottom3,.bottom4{
			width: 300px;
			height: 100%;
			background-color: #beeef9;
			margin-left: 18px;
			margin-top: 100px;
			position: absolute;
			top: 0;
		}
		.fname{
			position: absolute;
			margin-left: 9em;
			margin-top: 3em;
			padding: 20px 40px;
			border: none;
			background-color: transparent;
			font-size: 30px;
			font-weight: bold;
		}
		.lname{
			position: absolute;
			margin-left: 20em;
			margin-top: 4.5em;
			padding: 20px 40px;
			border: none;
			background-color: transparent;
			font-size: 30px;
			font-weight: bold;
		}
		.user{
			position: absolute;
			margin-left: 14em;
			margin-top: 8.3em;
			padding: 20px 40px;
			border: none;
			background-color: transparent;
			font-size: 30px;
			font-weight: bold;
		}
		.pass{
			position: absolute;
			margin-left: 27em;
			margin-top: 9.3em;
			padding: 20px 40px;
			border: none;
			background-color: transparent;
			font-size: 30px;
			font-weight: bold;
		}
		.btn{
			bottom: 0;
			width: 99%;
			height: 100px;
			opacity: .5;
			background-color: white;
			position: absolute;
			margin-bottom: 50px;
		}
		
	</style>
<form method="post">
<div class="con">
	<div class="container1">
		<div class="bottom1"></div>
		<div class="left1"></div>
		<div class="top1"></div>
	</div>
	<div class="container3">
		<div class="bottom3"></div>
		<div class="left3"></div>
		<div class="top3"></div>
	</div>
	<div class="container2">
		<div class="bottom2"></div>
		<div class="left2"></div>
		<div class="top2"></div>
	</div>
	<div class="container4">
		<div class="bottom4"></div>
		<div class="left4"></div>
		<div class="top4"></div>
	</div>
</div>


			<input name="first_name" class="fname" type="text" placeholder="First Name" required>
			<input name="last_name" class="lname" type="text" placeholder="Last Name" required>
			<input id="username" onkeyup="check_user()" name="username" class="user" type="text" placeholder="Username" required>	
			<input name="password" class="pass" type="password" placeholder="Password" required>
			

			<div class="btn">
				<div class="row">
					<div class="col-sm-6">
						<button style="float: right; margin-top: 5px;" name="register" type="submit" class="learn-more" id="register">SIGNUP</button>
					</div>
					<div class="col-sm-6">
						<button style="float: left; margin-top: 5px;" class="learn-more"><a   href="login.php">Login</a></button>
					</div>
				</div>
			</div>

				
		</form>

	</div>
	</div><br><br>
	<center>
		<div id="checking"></div>
	</center>	
	<?php 
		if (isset($_POST['register'])) {
			$first_name = $_POST['first_name'];
			$last_name = $_POST['last_name'];
			$username = $_POST['username'];
			$password = $_POST['password'];
		

		$q = "INSERT INTO `site` (`id`, `first_name`, `last_name`, `username`, `password`) VALUES ('', '".$first_name."', '".$last_name."', '".$username."', '".$password."')";
		$r = mysqli_query($con, $q);

		if ($r) {
				header("location:login.php");
		}
		else{
			echo $q;
		}
		}
	?>
	<script src="sub_file/jquery-3.4.1.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		document.getElementById("register").disabled = true;
		function check_user(){
			var username =  document.getElementById("username").value;

			$.post("sub_file/user_check.php",
				{
					user: username
				},
					function(data, status){

					if(data == '<p style="color:red">User already registered</p>') {

						document.getElementById("register").disabled = true;
					}else{
						document.getElementById("register").disabled = false;
					}

					document.getElementById("checking").innerHTML = data;
						
				}

				);
		
		}
	</script>

</body>
</html>