<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ReviewMovie Signin & Signup Form</title>
	<link rel="stylesheet" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
         let checkpassword = () =>{
            let pass1 = document.getElementById("CheckPass1").value;
            let pass2 = document.getElementById("CheckPass2").value;

            if(pass1!=pass2){
                alert("รหัสผ่านไม่ตรงกัน");
                return false
            }
            return true;
         }       
    </script>
</head>
<body>
	<div class="wrapper">
		<div class="title-text">
			<div class="title signin">Login Form</div>
			<div class="title signup">Signup Form</div>
		</div>
			
		<div class="form-container">
			<div class="form-inner">
				<form action="RegisterMove.php" class="signup" method="post">
					<div class="field">
						<input type="text" name="username" placeholder="Username" required>
					</div>

					<div class="field">
						<input type="password" name="password" placeholder="Password" id="CheckPass1" required>
					</div>

					<div class="field">
						<input type="password" name="re-password" placeholder="Confirm password" id="CheckPass2" required>
					</div>

                    <div class="field">
						<input type="email" name="email" placeholder="Email" required>
					</div>

					<div class="field">
						<input type="submit" value="Signup" onclick="return checkpassword()">
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>