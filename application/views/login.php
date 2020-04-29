<?php

// if(isset($_SESSION['views']))
// $_SESSION['views']=$_SESSION['views']+1;
// else
// $_SESSION['views']=1;
// echo "Views=".$_SESSION['views']."<br>";

// if(isset($_SESSION['views2']))
// $_SESSION['views2']=$_SESSION['views2']+1;
// else
// $_SESSION['views2']=1;
// echo "Views2=".$_SESSION['views2']."<br>";



?>



<!DOCTYPE html>
<html class="no-js">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<script type="text/javascript">
	var base_url = window.location.origin;
	var username = document.getElementById('username');
	var password = document.getElementById('password')
	// document.getElementById("submit_login").addEventListener("click", callPHP());

	function callPHP(event) {
		console.log("Called")
		var httpc = new XMLHttpRequest(); // simplified for clarity
		var url = "/index.php/welcome/verify_login";
		httpc.open("POST", url, true); // sending as POST
		httpc.send(event);
		console.log("Called END")
	}

	function test() {
		alert("tttttttttttttttttttttttttt")
	}
</script>

<body>


	<div class="w3-content w3-container w3-padding-64">
		<img src="/assets/images/schedule.png" class="w3-circle w3-display-topmiddle w3-padding-64" alt="Logo">
	</div>

	<br>
	<br>
	<br>
	<br>

	<div class="w3-content w3-container w3-padding-64" id="login">
		<form method="POST" action="/index.php/index/verify_login">

			<br>
			Username:
			<input type="text" name="username" size="20" class="content" id="username" /><br>
			Password:
			<input type="password" name="password" size="20" class="content" id="password" /><br>
			<input type="submit" value="submit" name="submit" class="content" />
			<input type="reset" value="Reset" class="content" />
		</form>

	</div>
	<div>
		<a href="/index.php/index/register_login">
			<button>Create Account</button>
		</a>

		<a href="/index.php/index/forgot_login">
			<button>Forgot Password</button>
		</a>
	</div>

	<br>
	
	<p id="denied">
		<?php
		if (isset($login_failure)) {
			if ($login_failure == 1) {
				echo ("login attempt failed");
			}
		} else echo ("");
		?>
	</p>



</body>

</html>