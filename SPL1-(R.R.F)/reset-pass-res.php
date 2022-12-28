
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RRF Restaurant Reset Password</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
		<link rel="stylesheet" href=
"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity=
"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
		</head>

    <style>

* {
  	box-sizing: border-box;
  	font-family: -apple-system, BlinkMacSystemFont, "segoe ui", roboto, oxygen, ubuntu, cantarell, "fira sans", "droid sans", "helvetica neue", Arial, sans-serif;
  	font-size: 16px;
  	-webkit-font-smoothing: antialiased;
  	-moz-osx-font-smoothing: grayscale;
}
body {
  	background-color: rgb(240, 221, 136);
  	margin: 0;
}
.UserSignUp {
  	width: 400px;
  	background-color: #ffffff;
  	box-shadow: 20px rgba(88, 88, 102, 0.3);
  	margin: 100px auto;
	border-radius: 50px;
	border: 10px;
}
.UserSignUp h1 {
  	text-align: center;
  	color: rgb(80, 31, 19);
  	font-size: 24px;
  	padding: 20px 0 20px 0;
  	border-bottom: 1px solid #dee0e4;
}
.UserSignUp form {
  	display: flex;
  	flex-wrap: wrap;
  	justify-content: center;
  	padding-top: 20px;
	border-radius: 60px;
}
.UserSignUp .uname {
  	display: flex;
  	justify-content: center;
  	align-items: center;
  	width: 50px;
 	height: 50px;
  	background-color: rgb(80, 31, 19);
  	color: #ffffff;
	border-radius: 40px;
	position: relative;
	right: 7px;
}
.UserSignUp .location {
  	display: flex;
  	justify-content: center;
  	align-items: center;
  	width: 50px;
 	height: 50px;
  	background-color: rgb(80, 31, 19);
  	color: #ffffff;
	border-radius: 40px;
	position: relative;
	right: 7px;
}
.UserSignUp .mail {
  	display: flex;
  	justify-content: center;
  	align-items: center;
  	width: 50px;
 	height: 50px;
  	background-color: rgb(80, 31, 19);
  	color: #ffffff;
	border-radius: 40px;
	position: relative;
	right: 7px;
}
.UserSignUp .pass {
  	display: flex;
  	justify-content: center;
  	align-items: center;
  	width: 50px;
 	height: 50px;
  	background-color: rgb(80, 31, 19);
  	color: #ffffff;
	border-radius: 40px;
}
.UserSignUp .cpass {
  	display: flex;
  	justify-content: center;
  	align-items: center;
  	width: 50px;
 	height: 50px;
  	background-color: rgb(80, 31, 19);
  	color: #ffffff;
	border-radius: 40px;
}
.UserSignUp form input[type="text"], .UserSignUp form input[type="email"] {
  	width: 310px;
  	height: 50px;
  	border: 3px solid rgb(80, 31, 19);
  	margin-bottom: 20px;
  	padding: 0 15px;
	border-radius: 60px;
}
.UserSignUp form input[type="password"]
{
  	width: 310px;
  	height: 50px;
  	border: 3px solid rgb(80, 31, 19);
  	margin-bottom: 20px;
  	padding: 0 15px;
	border-radius: 60px;
	position: relative;
	left: 5px;
}
.UserSignUp form input[type="submit"] {
	width: 100%;
  	padding: 15px;
  	margin-top: 20px;
  	background-color: rgb(80, 31, 19);
 	border: 0;
  	cursor: pointer;
  	font-weight: bold;
  	color: #ffffff;
  	transition: background-color 0.2s;
	position: relative;
	bottom: 30px;
}
.UserSignUp form input[type="submit"]:hover {
	background-color: rgb(80, 31, 19);
  	transition: background-color 0.2s;
}

.UserSignUp {
	font-size: 10px;
}

.eye-btn {
    position: relative;
	right:40px;
	top: 10px;
 }

 img {
    width: 180px;
    height: 80px;
    top: 350px;
    left: 100px;
}

    </style>
	
    <body>
		<div class="UserSignUp">
			<h1><div class="logo">

				<img class="rrflogo" src="coverW.png" alt="logo">
		
			</div>Reset Password</h1>
			<form action="reset-pass-code-rest.php" method="post" autocomplete="on">
				
				<label for="password" class="pass">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Type new password" id="password" required>
				<span class="eye-btn"><i class="bi bi-eye-slash" 
                    id="togglePassword"></i></span>
				
				
				<label for="confirm" class="cpass">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="confirm" placeholder="Confirm Password" id="cpassword" required>
				<span class="eye-btn"><i class="bi bi-eye-slash" 
                    id="togglePassword1"></i></span>
				
					<input type="submit" name="save" value = "Save changes">
      <input type = "hidden" name = "code" value = "<?php if (isset($_GET['code'])){echo $_GET['code'];} ?>">
                <input type = "hidden" name = "restaurantemail" value = "<?php if (isset($_GET['restaurantemail'])){echo $_GET['restaurantemail'];} ?>">

			</form>
		</div>

		<script>
			const togglePassword = document
				.querySelector('#togglePassword');

				const togglePassword1 = document
				.querySelector('#togglePassword1');
	  
			const password = document.querySelector('#password');
			const cpassword = document.querySelector('#cpassword');
	  
			togglePassword.addEventListener('click', () => {
	  
				// Toggle the type attribute using
				// getAttribure() method
				const type = password
					.getAttribute('type') === 'password' ?
					'text' : 'password';
					  
				password.setAttribute('type', type);
	  
				// Toggle the eye and bi-eye icon
				this.classList.toggle('bi-eye');
			});

			togglePassword1.addEventListener('click', () => {
	  
	  // Toggle the type attribute using
	  // getAttribure() method
	  const type = password
		  .getAttribute('type') === 'password' ?
		  'text' : 'password';
			
	  cpassword.setAttribute('type', type);

	  // Toggle the eye and bi-eye icon
	  this.classList.toggle('bi-eye');
  });

	
		</script>
	
		
	</body>
</html>
