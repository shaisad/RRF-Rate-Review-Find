<?php
session_start();
?>
<?php
$userfavcuisine = '$_POST[userfavcuisine]';

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "rrf";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

if (mysqli_connect_error())
{
  die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
}

if (!empty($userfavcuisine)){
if (isset($_POST['submitcuisine'])) {

    $query = "update user set userfavcuisine = '$_POST[userfavcuisine]' where username = '$_SESSION[username]'";
    $result = mysqli_query($conn, $query);
    if ($result) {
      header("Location:popup7.html");
      exit();
    }

    else{
      header(Location:"popup8.html");
      exit();

    }
}
}
else{
  header(Location:"popup9.html");
      exit();

}

?>