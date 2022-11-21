<?php

  error_reporting(0);

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;

  $username = $_POST['username'];
  $location = $_POST['location'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirm = $_POST['confirm'];
  $status = '0';
  

  //$regularexpression = "/^[a-zA-Z\d]+$/";

  function sendMail($email,$code)
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

    $mail->Username = "rrfratereviewfind@gmail.com";

    $mail->Password = "izcofomssnnpgazg";

    $mail->isHTML(true);

    $mail->Subject = "Verify Mail";

    $mail->setFrom("rrfratereviewfind@gmail.com");

    $mail->Body = "Dear user, Thank you for registering. Click the link to verify your email
                   <a href='http://localhost/SPL1--R.R.F-1/SPL1-(R.R.F)/userverify.php?email=$email&code=$code'> Verify </a>";

    $mail->addAddress($email);

    if($mail->Send()){
        return true;
    }else{
        return false;
    }

    $mail->smtpClose();
  }


  if(!empty($username) && !empty($location) && !empty($email) && !empty($password) && !empty($confirm))
  {

    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      exit('Email is not valid!');
    }

    if (strlen($_POST['password']) > 15 || strlen($_POST['password']) < 8  || ctype_upper($_POST['password']) || ctype_lower($_POST['password']) || !preg_match("/[0-9]/", $_POST['password'])) {
      $Message = "Password must be between 8 and 15 characters long, contain uppercase, lowercase letters and a number!";
    }

    if($password == $confirm)
    {
      $host = "localhost";
      $dbUsername = "root";
      $dbPassword = "";
      $dbname = "rrf";

      $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

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
        //$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $INSERT= "INSERT Into user (username, location, email, password, code, status) values ('$username','$location','$email', '$password', '$code', 0)";

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

        mysqli_query($conn, $INSERT);

        if($INSERT && sendMail($email,$code))
        {
          ?>      
          <script>alert("Verification mail sent. Please verify your email before logging in. Make sure to check your spam folder!")</script>
          <?php
          exit();
          
        }

        $conn->close();
      }
    }
    else
    {
      echo "Password fields don't match!";
    }
  }
  else
  {
    echo "All fields are required.";
    die();
  }