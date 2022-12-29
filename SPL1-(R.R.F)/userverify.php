<?php

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "rrf";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

if (mysqli_connect_error())
{
  die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
}

if(isset($_GET['code']))
{
    $code = $_GET['code'];

    $query = "SELECT status, code FROM user WHERE status = 0 AND code = '$code' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if($result)
    {
        if($result->num_rows == 1)
        {
            $update = "UPDATE user SET status = 1 WHERE code = '$code' LIMIT 1";
            if (mysqli_query($conn, $update)){
                echo "User Account created successfully! Click the link to complete login
                <a href='http://localhost/SPL1--R.R.F-1/SPL1-(R.R.F)/UserSignInPage.html'>Login </a>";
                exit;
                
				
            }
            else{
                
                header(Location:"PopUp1.html");
                exit();
            }
        }
        else{
          header(Location:"PopUp2.html");
          exit();
      
            
        }
    }

    else{
      header(Location:"PopUp3.html");
      exit();
  
        
    }
}

else{
        
  header(Location:"popup4.html");
  exit();

}

?>