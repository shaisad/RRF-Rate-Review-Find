<?php

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "user";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

if (mysqli_connect_error())
{
  die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
}

if(isset($_GET['code']))
{
    $code = $_GET['code'];

    $query = "SELECT status, code FROM accounts WHERE status = 0 AND code = '$code' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if($result)
    {
        if($result->num_rows == 1)
        {
            $update = "UPDATE accounts SET status = 1 WHERE code = '$code' LIMIT 1";
            if (mysqli_query($conn, $update)){
                echo "Account verified.";
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

