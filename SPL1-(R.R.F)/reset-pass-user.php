<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
</head>
<body>
    
    <form method="post" action="reset-pass-code-user.php">
    <label>Create new password</label>
      <input type = "password" name = "password" required>
                    
      <label>Confirm new password</label>
                    <input type = "password" name = "confirm" required>
                    
                    
      
      <input type="submit" name="save" value = "Save changes">
      <input type = "hidden" name = "code" value = "<?php if (isset($_GET['code'])){echo $_GET['code'];} ?>">
                <input type = "hidden" name = "useremail" value = "<?php if (isset($_GET['useremail'])){echo $_GET['useremail'];} ?>">
    </form>
 
</body>
</html>