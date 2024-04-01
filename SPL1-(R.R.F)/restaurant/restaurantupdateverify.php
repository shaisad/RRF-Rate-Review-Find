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

    $query = "SELECT status, code FROM restaurant WHERE status = 0 AND code = '$code' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if($result)
    {
        if($result->num_rows == 1)
        {
            $update = "UPDATE restaurant SET status = 1 WHERE code = '$code' LIMIT 1";
            if (mysqli_query($conn, $update)){
                echo "Restaurant Account updated successfully! Click <a href='http://localhost/SPL1--R.R.F-1/SPL1-(R.R.F)/restaurant/RestaurantSignInPage.html'> here </a> to login again to make sure that the restaurant email has been updated! 
                  ";
                exit;
                
				
            }
            else{
                
                ?>      
          <script>alert("Restaurant Account could not be updated due to verification error")</script>
          <?php
          exit();
            }
        }
        else{
            ?>      
          <script>alert("Restaurant does not exist!")</script>
          <?php
          exit();
            
        }
    }

    else{
        ?>      
          <script>alert("Restaurant Verification failed!")</script>
          <?php
        
    }
}

else{
    ?>      
          <script>alert("Error while generating restaurant verificaton code!")</script>
          <?php
        
    
}

?>
