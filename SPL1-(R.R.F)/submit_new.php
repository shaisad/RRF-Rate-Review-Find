<?php
if(isset($_POST['submit_password']) && $_POST['code'] && $_POST['reset'])
{
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "rrf";
    
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

  $email=$_POST['email'];
  $password=$_POST['password'];
  $query=("update restaurant set password='$password' where email='$email'");
  $query_run = mysqli_query($conn, $query);
}
?>