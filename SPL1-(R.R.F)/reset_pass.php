<?php
if($_GET['code'] && $_GET['reset'])
{
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "rrf";
    
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

  $email=$_GET['code'];
  $pass=$_GET['reset'];
  $query=("select email,password from restaurant where md5(email)='$email' and md5(password)='$password'");
  $query_run = mysqli_query($conn, $query);
  $check_user = mysqli_num_rows($query_run) > 0;

  if($result->num_rows == 1)
  {
    ?>
    <form method="post" action="submit_new.php">
    <input type="hidden" name="email" value="<?php echo $email;?>">
    <p>Enter New password</p>
    <input type="password" name='password'>
    <input type="submit" name="submit_password">
    </form>
    <?php
  }
}
?>