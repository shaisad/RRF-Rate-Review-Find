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
                header("Location: image.php");
                exit;
				
            }
            else{
                echo "Error 1";
            }
        }
        else{
            echo "Error 2";
        }
    }

    else{
        echo "Error 3";
    }
}

else{
    echo "Error 4";
}

?>