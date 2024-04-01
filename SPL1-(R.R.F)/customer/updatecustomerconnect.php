<?php

session_start(); 

require 'config/dbConfig.php';

if (!$db) {
	echo "Connection failed!";
}

if (isset($_POST['submitname']))
{
    $username = $_POST['username'];

    $query = "update user set username='$username' where username = '$_SESSION[username]'";
    $query2 = "update food_reviews set food_reviews.rfusername='$username' where rfusername = '$_SESSION[username]'";
    $query3 = "update res_reviews set res_reviews.rrusername='$username' where rrusername = '$_SESSION[username]'";

    if ($db->query($query) === TRUE && $db->query($query2) === TRUE && $db->query($query3) === TRUE) {
        echo "Record updated successfully! Click <a href='http://localhost/SPL1--R.R.F-1/SPL1-(R.R.F)/customer/CustomerSignInPage.html'> here to login </a> to ensure your name details are
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
  
    $useremail = $_POST['useremail'];
    
  
  $status = '0';
  function sendMail($useremail,$code)
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

    $mail->Body = "Dear user, Click the link to verify your recently changed email
                   <a href='http://localhost/SPL1--R.R.F-1/SPL1-(R.R.F)/customer/customerupdateverify.php?useremail=$useremail&code=$code'> Verify </a>";

    $mail->addAddress($useremail);

    if($mail->Send()){
        return true;
    }else{
        return false;
    }

    $mail->smtpClose();
  }

  if(!empty($useremail))
  {
    if (!filter_var($_POST['useremail'], FILTER_VALIDATE_EMAIL)) {
        
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

      
    
    $sql = "SELECT * FROM user WHERE useremail='$_POST[useremail]'";
  $res = mysqli_query($conn, $sql);

  if(mysqli_num_rows($res) > 0){
    ?>      
          <script>alert("You can not use the old user email again! Make sure to enter a new email!")</script>
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
        $update = "update user set useremail='$useremail', code = '$code', status = 0 where username = '$_SESSION[username]'";
        

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
        

        if($update && sendMail($useremail,$code))
        {
          ?>      
          <script>alert("User email changed successfully! A Verification mail is sent for new email. Please verify your email before logging in. Make sure to check your spam folder!")</script>
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


    

