<?php

session_start(); 

require 'config/dbConfig.php';

if (!$db) {
	echo "Connection failed!";
}

if (isset($_POST['submitname']))
{
    $restaurantname = $_POST['restaurantname'];
    
    
    $query = "update restaurant set restaurantname='$restaurantname' where restaurantname = '$_SESSION[restaurantname]'";
    $query2 = "update food_new set food_new.frestaurantname='$restaurantname' where frestaurantname = '$_SESSION[restaurantname]'";
    $query3 = "update foodimage set foodimage.irestaurantname='$restaurantname' where irestaurantname = '$_SESSION[restaurantname]'";
   
    if ($db->query($query) === TRUE && $db->query($query2) === TRUE && $db->query($query3) === TRUE) {
        echo "Record updated successfully. Click <a href='http://localhost/SPL1--R.R.F-1/SPL1-(R.R.F)/restaurant/RestaurantSignInPage.html'> here to login </a> to ensure your details are
                 updated.";
       } else {
        echo "Error updating record: " . $db->error;
       }
      
     $db->close();      

}

use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;

if (isset($_POST['submitemail']))
{
  
    $restaurantemail = $_POST['restaurantemail'];
    
  
  $status = '0';
  function sendMail($restaurantemail,$code)
  {
    require ("PHPMailer/PHPMailer.php");
    require ("PHPMailer/SMTP.php");
    require ("PHPMailer/Exception.php");

    $mail = new PHPMailer();

    $mail->isSMTP();

    $mail->Host = "smtp.gmail.com";

    $mail->SMTPAuth = "true";

    $mail->SMTPSecure = "tls";

    $mail->Port = "587";

    $mail->Username = "";

    $mail->Password = "";

    $mail->isHTML(true);

    $mail->Subject = "RRF - Verify Mail";

    $mail->setFrom("");

    $mail->Body = "Dear restaurant, Click the link to verify your recently changed email
                   <a href='http://localhost/SPL1--R.R.F-1/SPL1-(R.R.F)/restaurant/restaurantupdateverify.php?restaurantemail=$restaurantemail&code=$code'> Verify </a>";

    $mail->addAddress($restaurantemail);

    if($mail->Send()){
        return true;
    }else{
        return false;
    }

    $mail->smtpClose();
  }

  if(!empty($restaurantemail))
  {
    if (!filter_var($_POST['restaurantemail'], FILTER_VALIDATE_EMAIL)) {
        
      ?>      
        <script>alert("Invalid Email!")</script>
        <?php
        exit();
    }
    
    


    
      $host = "localhost";
      $dbUsername = "root";
      $dbPassword = "";
      $dbname = "rrf";

      $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

      
    
    $sql = "SELECT * FROM restaurant WHERE restaurantemail='$_POST[restaurantemail]'";
  $res = mysqli_query($conn, $sql);

  if(mysqli_num_rows($res) > 0){
    ?>      
          <script>alert("You can not use the old restaurant email again! Make sure to enter a new email!")</script>
          <?php
          exit();
  }

  

 
      //$email = $conn->real_escape_string($email);
      //$password = $conn->real_escape_string($password);
      //$confirm = $conn->real_escape_string($confirm);
      //$password = md5($password);
      //$confirm = md5($confirm);

      $code = bin2hex(random_bytes(16));
      
      if (mysqli_connect_error())
      {
        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
      }

      else
      {
        $update = "update restaurant set restaurantemail='$restaurantemail', code = '$code', status = 0 where restaurantname = '$_SESSION[restaurantname]'";
        

        //$stmt = $conn->prepare($SELECT);
        //$stmt->bind_param("s", $email);
        //$stmt->execute();
        //$stmt->bind_result($email);
        //$stmt->store_result();
        //$rnum = $stmt->num_rows;

        
        //if(ctype_upper($_POST['password']) || ctype_lower($_POST['password'])) {
        //  exit('Password must contain a combination of uppercase letters, lowercase letters!');
        //}

        //if(!preg_match("/[0-9]/", $_POST['password'])){
        //  exit('Password must contain a number');
        //}

        //$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        //$hash = $password;
        mysqli_query($conn, $update);
        

        if($update && sendMail($restaurantemail,$code))
        {
          ?>      
          <script>alert("Restaurant email changed successfully! A Verification mail is sent for new email. Please verify your email before logging in. Make sure to check your spam folder!")</script>
          <?php
          exit();
          
        }
        else{
          ?>      
          <script>alert("Verification of changed email failed!")</script>
          <?php
        }

        $conn->close();
      }
    
    
  }
  else
  {
    
    ?>      
          <script>alert("Email field is required!")</script>
          <?php
          exit();
    
  }

    

    
         

}


?>


    




    

