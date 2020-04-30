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
</head>
<body>

	<div id="inputContainer">
		<form id="loginForm" action="login.php" method="POST">
			<h2>Login to your account</h2>
			<p>
			    <?php echo $account->getError(Constants::$loginFailed); ?>
				<label for="loginUsername">Username</label>
				<input id="loginUsername" name="loginUsername" type="text" placeholder="e.g. harshAnand" required>
			</p>
			<p>
				<label for="loginPassword">Password</label>
				<input id="loginPassword" name="loginPassword" type="password" placeholder="Your password" required>
			</p>

			<button type="submit" name="loginButton">LOG IN</button>
			
		</form>

	</div>

</body>
</html>
