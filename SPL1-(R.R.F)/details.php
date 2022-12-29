<?php
  require 'config.php';

  if (isset($_POST['submit'])) {
    $restaurantName = $_POST['live_search'];
    $restaurantLocation = $_POST['live_search'];
    echo $restaurantLocation;

    $sql = 'SELECT *  FROM restaurant WHERE restaurantname = :restaurantname or location = :location ';
    $stmt = $conn->prepare($sql);
    $stmt->execute(['restaurantname' => $restaurantName, 'location' => $restaurantLocation] );
    $count = $stmt->rowCount();
    echo $count;
    $row = $stmt->fetch(); 
  }

   else {
    header('location: .');
    exit();
   }
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Details</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <div class="row mt-5">
      <div class="col-5 mx-auto">
        <div class="card shadow text-center">
          <div class="card-header">
            <h1><?= $row['restaurantname'] ?></h1>
          </div>
          <div class="card-body">
            <h4><b></b> <?= $row['location'] ?></h4>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
