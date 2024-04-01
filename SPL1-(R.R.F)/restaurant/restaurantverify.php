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
                ?>
                 <script>alert("Logged in as restaurant")</script>
				 
                <?php
                header("Location: restaurant/restaurantimage.html");
                exit;
				
            }
            else{
                
                ?>      
          <script>alert("Restaurant Account could not be created due to verification error")</script>
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
