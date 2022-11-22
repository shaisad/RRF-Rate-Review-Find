<?php

session_start(); 

$sname= "localhost";
$uname= "root";
$password = "";

$db_name = "rrf";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}

if (isset($_POST['save']))
{
    $restaurantemail = $_POST['restaurantemail'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];
    $code = $_POST['code'];

   // $query = "SELECT * from user where useremail = '$useremail' && code = '$code'";
    $query2 = "SELECT * from restaurant where restaurantemail = '$restaurantemail' && code = '$code'";

   // $qres = mysqli_query($conn, $query);
   $qres2 = mysqli_query($conn, $query2);

    if ($qres->num_rows == 1)
    {
        if ($password == $confirm)
        {
            if (strlen($_POST['password']) > 15 || strlen($_POST['password']) < 8  || ctype_upper($_POST['password']) || ctype_lower($_POST['password']) || !preg_match("/[0-9]/", $_POST['password'])) {
                exit('Password must be between 8 and 15 characters long, contain uppercase, lowercase letters and a number!');
            }

            $update = "UPDATE restaurant SET password = '$password' where restaurantemail = '$restaurantemail' && code = '$code'";
            

            $result = mysqli_query($conn, $update);
            //$result2 = mysqli_query($conn, $update2);

            if ($result)
            {
                echo "Restaurant password updated successfully! Click here to 
                <a href='http://localhost/SPL1--R.R.F-1/SPL1-(R.R.F)/RestaurantSignInPage.html'>login </a>";
            }
        }
        else
        {
            echo "Passwords don't match!";
        }
    }

    
        else
        {
            echo "Passwords don't match!";
        }

}



?>


    

