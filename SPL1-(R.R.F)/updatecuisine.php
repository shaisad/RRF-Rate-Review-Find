<?php
session_start();
?>
<?php
$cuisine = '$_POST[cuisine]';

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "rrf";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

if (mysqli_connect_error())
{
  die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
}

if(isset($_POST['submitcuisine']))
{
   
    $query = "update restaurant set cuisine = '$_POST[cuisine]' where restaurantname = '$_SESSION[restaurantname]'";
    $result = mysqli_query($conn, $query);
    ?>      
          <script>alert("Restaurant cuisine updated successfully!")</script>
          <?php
          exit();
          
    

}
else{
    echo "Error!";
}

?>