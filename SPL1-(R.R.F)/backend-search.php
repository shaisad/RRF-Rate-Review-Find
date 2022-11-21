<?php


$sname= "localhost";
  $uname= "root";
  $password = "";
  
  $db_name = "rrf";
  
  $conn = mysqli_connect($sname, $uname, $password, $db_name);
  
 if (!$conn) {
    echo "Connection failed!";
  }
  
  if (isset($_POST['query'])) {
    $query = "SELECT restaurantname FROM restaurant WHERE restaurantname LIKE '{$_POST['query']}%' OR location LIKE '{$_POST['query']}%'  LIMIT 100";
    $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) > 0) {
      while ($res = mysqli_fetch_array($result)) {
        echo $res['restaurantname']. "<br/>";
      
      
    }
  } else {
    echo "
    <div class='alert alert-danger mt-3 text-center' role='alert'>
        not found
    </div>
    ";
  }



}
?>


            
     
