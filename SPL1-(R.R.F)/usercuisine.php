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
      ?>      
      <script>alert("Your favourite cuisine has been submitted successfully!")</script>
      <?php
      exit();
    }

    else{?>
      <script>alert("Error! Your favourite cuisine could not be submitted! Please try again!")</script>
            <?php
      exit();
    }
}
}
else{
  ?>      
  <script>alert("Error! Cuisine field is not filled up!")</script>
  <?php
  exit();
}

?>