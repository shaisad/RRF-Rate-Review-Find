<?php
if(isset($_POST['submit_email']) && $_POST['email'])
{
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "rrf";
    
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    
  $query=("select email,password from restaurant where email='$email'");
  $query_run = mysqli_query($conn, $query);
  $check_user = mysqli_num_rows($query_run) > 0;
  if($check_user==1)
  {
    while ($row = mysqli_fetch_array($query_run))
    {
      $email=md5($row['email']);
      $pass=md5($row['password']);
    }
    $link="<a href='http://localhost/SPL1--R.R.F-1/SPL1-(R.R.F)/reset.php?key=".$email."&reset=".$password."'>Click To Reset password</a>";
    require_once('phpmail/PHPMailerAutoload.php');
    $mail = new PHPMailer();
    $mail->CharSet =  "utf-8";
    $mail->IsSMTP();
    // enable SMTP authentication
    $mail->SMTPAuth = true;                  
    // GMAIL username
    $mail->Username = "rrfratereviewfind@gmail.com";
    // GMAIL password
    $mail->Password = "etlcjkrbuqitxism";
    $mail->SMTPSecure = "tls";  
    // sets GMAIL as the SMTP server
    $mail->Host = "smtp.gmail.com";
    // set the SMTP port for the GMAIL server
    $mail->Port = "587";
    $mail->From='rrfratereviewfind@gmail.com';
    $mail->FromName='RRF';
    $mail->AddAddress($email);
    $mail->Subject  =  'Reset Password';
    $mail->IsHTML(true);
    $mail->Subject = "Reset password"
    $mail->Body    = 'Click On This Link to Reset Password'.$password.'';
    $mail->Body = "Dear restaurant, Click the link to reset your password
                   <a href='http://localhost/SPL1--R.R.F-1/SPL1-(R.R.F)/reset.php?email=$email&reset=$password'> Reset </a>";

    if($mail->Send())
    {
      echo "Check Your Email and Click on the link sent to your email";
    }
    else
    {
      echo "Mail Error - >".$mail->ErrorInfo;
    }
  }	
}
?>
