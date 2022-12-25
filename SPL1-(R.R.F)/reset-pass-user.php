<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
}

.banner form input[type="password"]{
    width: 300px;
    border: 2px solid rgb(80, 31, 19);
    height: 30px;
    position: relative;
    bottom: 40px;
    right: 190px;
    border-radius: 20px;
    margin-bottom: 20px;
  	padding: 0 15px;
}

    </style>

<body>

<div class = "banner">
          
        <div class="logo">

            <img class="rrflogo" src="cover.png" alt="logo">
    
        </div>
    
    <form method="post" action="reset-pass-code-user.php">
    <div class = "attribute">
      <input type = "password" name = "password" required placeholder="  Type new password">
                    <input type = "password" name = "confirm" required placeholder="  Re-type new password">
                    
                    
      
      <input type="submit" name="save" value = "Save changes">
      <input type = "hidden" name = "code" value = "<?php if (isset($_GET['code'])){echo $_GET['code'];} ?>">
                <input type = "hidden" name = "useremail" value = "<?php if (isset($_GET['useremail'])){echo $_GET['useremail'];} ?>">
    </div>
    </form>

</div>
 
</body>
</html>