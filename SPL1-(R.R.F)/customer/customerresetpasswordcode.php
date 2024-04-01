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

if (isset($_POST['save'])) {
    $useremail = $_POST['useremail'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];
    $code = $_POST['code'];

    if (!empty($password) && !empty($confirm)) {


        if (strlen($_POST['password']) > 15 || strlen($_POST['password']) < 8 || ctype_upper($_POST['password']) || ctype_lower($_POST['password']) || !preg_match("/[0-9]/", $_POST['password'])) {
?>      
      <script>alert("Password must be between 8 and 15 characters long, contain uppercase, lowercase letters and a number!")</script>
      <?php
            exit();
            //exit('Password must be between 8 and 15 characters long, contain uppercase, lowercase letters and a number!');
        }

        if ($password == $confirm) {
            $host = "localhost";
            $dbUsername = "root";
            $dbPassword = "";
            $dbname = "rrf";

            $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);




            $query = "SELECT * from user where useremail = '$useremail' && code = '$code'";
            //$query2 = "SELECT * from restaurant where restaurantemail = '$restaurantemail' && code = '$code'";

             $qres = mysqli_query($conn, $query);
            //$qres2 = mysqli_query($conn, $query2);

            

                $options = array("cost" => 4);
                $hashPassword = password_hash($password, PASSWORD_BCRYPT, $options);


                $update = "UPDATE user SET password = '$hashPassword' where useremail = '$useremail' && code = '$code'";


                $result = mysqli_query($conn, $update);
                //$result2 = mysqli_query($conn, $update2);

                if ($result) {
                   
                            echo "User password updated successfully! Click here to 
                <a href='http://localhost/SPL1--R.R.F-1/SPL1-(R.R.F)/customer/CustomerSignInPage.html'>login </a>";
                        }
                     else {
                      
                        ?>      
          <script>alert("User Password could not be updated! User email does not exist!")</script>
          <?php
          exit();
                    }
                }
                else{
                    
                    ?>      
                  <script>alert("Passwords don't match!")</script>
                  <?php
          exit();
                }
            }
            else{
                
                ?>      
                  <script>alert("Password and Confirm Password Fields must be filled!")</script>
                  <?php
                  exit();
            }




            }
            else{
                ?>      
                <script>alert("Save Changes button must be clicked to continue!")</script>
                <?php
                exit();
                
            }
        

    


?>


    

