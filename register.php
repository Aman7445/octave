<?php
    include("includes/config.php");
	include("includes/classes/Account.php");
	include("includes/classes/Constants.php");

	$account = new Account($con);

	include("includes/handlers/register_handler.php");

	function getInputValue($name) {
		if(isset($_POST[$name])) {
			echo $_POST[$name];
		}
	}
?>

<html>
<head>
	<title>Register to Octave!</title>
	<link rel="shortcut icon" href="assets/images/icons/logo.ico">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/register.css" type="text/css">
</head>
<body>

<div class="container">
	<div class="card text-center">
  		<div class="card-body">
			<form id="registerForm" action="register.php" method="POST">
				<h2 class="card-title">Octave</h2>
				<p><strong>Create an account</strong></p>
				<p>
					<?php echo $account->getError(Constants::$usernameCharacters); ?>
					<?php echo $account->getError(Constants::$usernameTaken); ?>
				
					<label for="username">Username</label><br>
					<input id="username" name="username" type="text" placeholder="e.g. harshAnand" value="<?php getInputValue('username') ?>" required>
				</p>

				<p>
					<?php echo $account->getError(Constants::$firstNameCharacters); ?>
					<label for="firstName">First name</label><br>
					<input id="firstName" name="firstName" type="text" placeholder="e.g. Harsh" value="<?php getInputValue('firstName') ?>" required>
				</p>

				<p>
					<?php echo $account->getError(Constants::$lastNameCharacters); ?>
					<label for="lastName">Last name</label><br>
					<input id="lastName" name="lastName" type="text" placeholder="e.g. Anand" value="<?php getInputValue('lastName') ?>" required>
				</p>

				<p>
					<?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
					<?php echo $account->getError(Constants::$emailInvalid); ?>
					<?php echo $account->getError(Constants::$emailTaken); ?>
					<label for="email">Email</label><br>
					<input id="email" name="email" type="email" placeholder="e.g. harsh@gmail.com" value="<?php getInputValue('email') ?>" required>
				</p>

				<p>
					<label for="email2">Confirm email</label><br>
					<input id="email2" name="email2" type="email" placeholder="e.g. harsh@gmail.com" value="<?php getInputValue('email2') ?>" required>
				</p>

				<p>
					<?php echo $account->getError(Constants::$passwordsDoNoMatch); ?>
					<?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
					<?php echo $account->getError(Constants::$passwordCharacters); ?>
					<label for="password">Password</label><br>
					<input id="password" name="password" type="password" placeholder="Your password" required>
				</p>

				<p>
					<label for="password2">Confirm password</label><br>
					<input id="password2" name="password2" type="password" placeholder="Your password" required>
				</p>

				<button type="submit" name="registerButton" class="btn btn-primary">SIGN UP</button><br>
				<a href="login.php">Already have an account?</a>
			
			</form>


		</div>
	</div>
</div>
</body>
</html>