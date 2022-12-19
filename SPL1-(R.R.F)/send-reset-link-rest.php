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

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;

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

    $mail->Password = "izcofomssnnpgazg";

    $mail->isHTML(true);

    $mail->Subject = "RRF- Reset Password Mail";

    $mail->setFrom("rrfratereviewfind@gmail.com");

    $mail->Body = "Dear concerned, Here is the link to reset your password. 
                   <a href='http://localhost/SPL1--R.R.F-1/SPL1-(R.R.F)/reset-pass-res.php?restaurantemail=$restaurantemail&code=$code'> Click here to reset </a>";

    $mail->addAddress($restaurantemail);

    if($mail->Send()){
        return true;
    }else{
        return false;
    }

    $mail->smtpClose();
  }

  $code = bin2hex(random_bytes(16));

  $restaurantemail = $_POST['restaurantemail'];

  if (isset($restaurantemail))
  {
    //$update = "UPDATE user SET code = '$code' where email = '$email'";
    $update2 = "UPDATE restaurant SET code = '$code' where restaurantemail = '$restaurantemail'";

    //$result = mysqli_query($conn, $update);
    $result2 = mysqli_query($conn, $update2);

    if ($result2 && sendMail($restaurantemail, $code))
    {
        echo "Mail sent to reset password. Please reset your password before logging in. Make sure to check your spam folder!";
    }
    
    else
    {
        echo "Error";
    }
  }
  else
  {
    echo "Error 2";
  }



?>