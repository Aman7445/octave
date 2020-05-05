<?php
    include("includes/config.php");
	include("includes/classes/Account.php");
	include("includes/classes/Constants.php");

	$account = new Account($con);

	include("includes/handlers/login_handler.php");

?>

<html>
<head>
	<title>Login to Octave!</title>
	<link rel="shortcut icon" href="assets/images/icons/logo.ico">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/register.css" type="text/css">
</head>
<body>

<div class="container">
	<div class="card text-center">
  		<div class="card-body">
		  	<form id="loginForm" action="login.php" method="POST">
				<h2 class="card-title">Octave</h2>
				<p><strong>Log in to your account</strong></p>
    			<p class="card-text">
			 		<?php echo $account->getError(Constants::$loginFailed); ?>
					<label for="loginUsername">Username</label><br>
					<input id="loginUsername" name="loginUsername" type="text" placeholder="e.g. harshAnand" required>
				</p>
				<p class="card-text">
					<label for="loginPassword">Password</label><br>
					<input id="loginPassword" name="loginPassword" type="password" placeholder="Your password" required>
				</p>
				<button type="submit" name="loginButton" class="btn btn-primary">LOG IN</button><br>
				<a href="register.php">Create an account</a>
			</form>
  		</div>
	</div>
</div>

</body>
</html>
