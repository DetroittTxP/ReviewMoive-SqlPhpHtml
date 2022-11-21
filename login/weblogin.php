<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ReviewMovie Signin & Signup Form</title>
	<link rel="stylesheet" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div class="wrapper">
		<div class="title-text">
			<div class="title signin">Login Form</div>
			<div class="title signup">Signup Form</div>
		</div>
			
		<div class="form-container">
			<div class="silde-controls">
				<a href="weblogin.php">Login</a>
				|
				<a href="../register/webregister.php">Signup</a>
			</div>
			<div class="form-inner">
				<form action="checklogin.php" class="login" method="post">
					<div class="field">
						<input type="text" name="username" placeholder="Username" required>
					</div>

					<div class="field">
						<input type="password" name="password" placeholder="Password" required>
					</div>

					<div class="pass-link"><a href="#">Forgot Password?</a></div>
					
					<div class="field">
						<input type="submit" value="Login">
					</div>
					<div class="signup-link">Not a member? <a href="../register/webregister.php">Signup Now</a></div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>