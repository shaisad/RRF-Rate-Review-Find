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

              header('Location:popup/popup5.html');
              exit();

                			
            }
            else{
                
                ?>      
          <script>alert("User Account could not be updated due to verification error")</script>
          <?php
          exit();
            }
        }
        else{
            ?>      
          <script>alert("User does not exist!")</script>
          <?php
          exit();
            
        }
    }

    else{
        ?>      
          <script>alert("User Verification failed!")</script>
          <?php
        
    }
}

else{
    ?>      
          <script>alert("Error while generating user verificaton code!")</script>
          <?php
        
    
}

?>