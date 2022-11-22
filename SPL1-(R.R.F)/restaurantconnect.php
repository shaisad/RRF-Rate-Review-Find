<?php

  error_reporting(0);

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;

  $restaurantname = $_POST['restaurantname'];
  $location = $_POST['location'];
  $restaurantemail = $_POST['restaurantemail'];
  
  $password = $_POST['password'];
  $confirm = $_POST['confirm'];
  $status = '0';
  
  

  //$regularexpression = "/^[a-zA-Z\d]+$/";

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

    $mail->Username = "rrfratereviewfind@gmail.com";

    $mail->Password = "etlcjkrbuqitxism";

    $mail->isHTML(true);

    $mail->Subject = "RRF - Verify Mail";

    $mail->setFrom("rrfratereviewfind@gmail.com");

    $mail->Body = "Dear restaurant, Thank you for registering. Click the link to verify your email
                   <a href='http://localhost/SPL1--R.R.F-1/SPL1-(R.R.F)/restaurantverify.php?email=$restaurantemail&code=$code'> Verify </a>";

    $mail->addAddress($restaurantemail);

    if($mail->Send()){
        return true;
    }else{
        return false;
    }

    $mail->smtpClose();
  }


  if(!empty($restaurantname) && !empty($location)  && !empty($restaurantemail) && !empty($password) && !empty($confirm))
  {
    if (!filter_var($_POST['restaurantemail'], FILTER_VALIDATE_EMAIL)) {
      ?>      
      echo <script>alert("Invalid Email!")</script>
      <?php
      exit();
    }

    if (strlen($_POST['password']) > 15 || strlen($_POST['password']) < 8  || ctype_upper($_POST['password']) || ctype_lower($_POST['password']) || !preg_match("/[0-9]/", $_POST['password'])) {
      ?>      
      <script>alert("Password must be between 8 and 15 characters long, contain uppercase, lowercase letters and a number!")</script>
      <?php
      exit();
      //exit('Password must be between 8 and 15 characters long, contain uppercase, lowercase letters and a number!');
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
        
        // correct $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $INSERT= "INSERT Into restaurant (restaurantname, location, restaurantemail, password, code, status) values ('$restaurantname','$location','$restaurantemail','$password', '$code', 0)";

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

        mysqli_query($conn, $INSERT);

        //$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        if($INSERT && sendMail($restaurantemail,$code))
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
      ?>      
          echo <script>alert("Password fields don't match!")</script>
          <?php
      
    }
  }
  else
  {
    echo "All fields are required.";
    die();
  }
 

?>