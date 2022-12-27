<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <title>Reset Password</title>
</head>

<style>

body{
    background-color: rgb(17, 6, 4);
}

.attribute {
        font-size: 18px;
        font-style: normal;
        position: relative;
        top: 30px;
        }

    .banner{
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 600px;
  height: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
  background-color: rgb(240, 221, 136);
  position: relative;
  top: 100px;
  border-radius: 5px;
    }

img {
    width: 180px;
    top: 300px;
    left: 100px;
}
label {
    position: relative;
    right: 10px;
}
.banner form input[type="submit"]{
  float: left;
  display: block;
  color: rgb(219, 216, 216);
  text-align: center;
  padding: 8px;
  text-decoration:none;
  font-size: 13px;
  background-color: rgb(46, 16, 9);
  margin: 10px;
  border-radius: 20px;
  position: relative;
  top: 80px;
  left: 200px;
}

.banner form input[type="password"]{
    width: 300px;
    border: 2px solid rgb(80, 31, 19);
    height: 30px;
    border-radius: 20px;
    margin-bottom: 20px;
  	padding: 0 15px;
}
.eye-btn1{

}
.eye-btn2{

}
.pass{
    position: relative;
    right: 40px;
    top: 30px;
}
.cpass{
    position: relative;
    top: 30px;
    right: 100px;
 
}
    </style>

<body>

<div class = "banner">
          
        <div class="logo">

            <img class="rrflogo" src="cover.png" alt="logo">
    
        </div>
    
    <form method="post" action="reset-pass-code-rest.php">
    <input type = "password" name = "password" required placeholder="  Type new password" class="pass">
    <span class="eye-btn1"><i class="bi bi-eye-slash" 
                    id="togglePassword"></i></span>
				
                    <input type = "password" name = "confirm" required placeholder="  Re-type new password" class="cpass">
                    <span class="eye-btn2"><i class="bi bi-eye-slash" 
                    id="togglePassword"></i></span>
				
                    
                    
                    
      
      <input type="submit" name="save" value = "Save changes">
      <input type = "hidden" name = "code" value = "<?php if (isset($_GET['code'])){echo $_GET['code'];} ?>">
                <input type = "hidden" name = "restaurantemail" value = "<?php if (isset($_GET['restaurantemail'])){echo $_GET['restaurantemail'];} ?>">
    </div>
    </form>


</div>

<script>
			const togglePassword = document
				.querySelector('#togglePassword');
	  
			const password = document.querySelector('#password');
	  
			togglePassword.addEventListener('click', () => {
	  
				
				const type = password
					.getAttribute('type') === 'password' ?
					'text' : 'password';
					  
				password.setAttribute('type', type);
	  
				this.classList.toggle('bi-eye');
			});
		</script>
 
</body>
</html>