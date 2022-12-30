<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  .ancr{
    text-decoration: none;
    color: black;
  }
  </style>
<body>
  
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
    $query = "SELECT restaurantname, location FROM restaurant WHERE restaurantname LIKE '{$_POST['query']}%' OR location LIKE '{$_POST['query']}%'  LIMIT 100";
    $query2 = "SELECT foodname, frestaurantname FROM food_new WHERE foodname LIKE '{$_POST['query']}%' OR  frestaurantname LIKE '{$_POST['query']}%' LIMIT 100";
    $result = mysqli_query($conn, $query);
    $result2 = mysqli_query($conn, $query2);

    $query3 = "SELECT * FROM restaurant where status=1";
      $query3_run = mysqli_query($conn, $query3);
      $check_user = mysqli_num_rows($query3_run) > 0;
      
      if($check_user)
      {
        while($row = mysqli_fetch_assoc($query3_run))
        {
          
          $sno = $row['restaurantid'];
        }
      }
    
  if (mysqli_num_rows($result) > 0) {
    
    $row_cnt = $result->num_rows;
    echo "<div class='alert alert-success mt-3 text-center' role='alert'>$row_cnt restaurant(s) found! </div>";
      while ($res = mysqli_fetch_array($result)) {
        
          
        

        
        echo  '<a class="ancr" href="RestaurantInfo.php?resid='.$sno.'">' . $res['restaurantname'] . ','. ' '.$res['location']. '<br /></a>';
        //echo $res['restaurantname']. ','. ' '.$res['location']. "<br/>";
      
      }
      
    }
    else{
      echo "
    <div class='alert alert-danger mt-3 text-center' role='alert'>
        No restaurant found!
    </div>
    ";
    }
      if (mysqli_num_rows($result2) > 0) {
        $row_cnt2 = $result2->num_rows;
    echo "<div class='alert alert-success mt-3 text-center' role='alert'>$row_cnt2 food item(s) found! </div>";
      
        while ($res = mysqli_fetch_array($result2)) {
          
          echo $res['foodname']. ','. ' '.$res['frestaurantname']. "<br/>";
        
      }
    
  } else {
    echo "
    <div class='alert alert-danger mt-3 text-center' role='alert'>
        No food item found!
    </div>
    ";
  }



}
?>
</body>
</html>


            
     
