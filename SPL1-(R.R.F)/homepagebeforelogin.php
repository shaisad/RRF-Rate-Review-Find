<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
<!-- Bootstrap CSS -->

<link href="/css/bootstrap.min.css" rel="stylesheet">

    <title>RRF Home Page</title>
    



<style>

@import url("https://fonts.googleapis.com/css??family=Poppins:wght@400;500;600;700&display=swap");


body{
    background-color: rgb(240, 221, 136);
    overflow-x: hidden;
}

 .search{
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    position: relative;
    left: 20px ;
    bottom: 85px;
}

.search-box input[type="text"]{
    height: 100%;
    width: 100%;
    border: none;
    outline: none;
    background: #fff;
    font-size: 18px;
    padding: 0 60px 0 20px;
}

.search-box {
    height: 50px;
    width: 600px;
    color: #fff;
    position: relative;
    left: 100px;
    bottom: 15px;
}


.result{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
    }

.result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }

.result p:hover{
        background: #f2f2f2;
    }


.search-btn {
    position: relative;
    left: 550px;
    bottom: 35px;
    height: 50px;
    width: 70px;
    color: rgb(80, 31, 19) ;

}

.search-btn:hover {
    color: rgb(100, 91, 148);
}

.btnn {
  border: none;
  outline: none;
  padding: 8px 8px;
  cursor: pointer;
  color: rgb(80, 31, 19);
  position: relative;
  left: 125px;
  border-radius: 10px;
  bottom: 80px;
}


.btnn:hover {
  background-color: rgb(155, 113, 58) ;
  color: white;
}


.btnn.show {
  background-color: #666;
  color: white;
}

/* .container{
  position: relative;
  left: 5px;
  bottom: 10px;

}  */

img {
    width: 180px;
    top: 300px;
    left: 100px;
}

/* .sidebar {
  height: 100%;
  width: 180px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  overflow-x: hidden;
  background-color: rgb(241, 191, 114);
  
}

.sidebar a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: rgb(80, 31, 19);
  display: block;
  position: relative;
  top: 10px;
  left: 5px;
}

.sidebar a:hover {
  color: gray;
} */

/* .card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 25%;
  position: relative;
  left: 100px;
  background-color: white;
  top: 45px;
  margin-bottom: 40px;
} 

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
} 

.container {
  padding: 2px 16px;
  position: relative;
  left: 60px;
  bottom: 10px;

}  */

.rate {
    float: left;
    height: 46px;
    padding: 0 10px;
    position: relative;
    left: 25px;
}
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ffc700;    
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
}

.cardbtn {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: rgb(80, 31, 19);
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.cardbtn:hover
{
  opacity: 0.7;
}

.cardfix {
  position: relative;
  left: 25px;
  bottom: 140px;
}

.card:hover {
  box-shadow: 0 8px 16px 0 grey;
  transform: translate3D(0,-1px,0) scale(1.03);
} 


.heading{
  position: relative;
  left: 120px;
  font-size: 25px;
  color: rgb(80, 31, 19);
  bottom:60px;
}



</style>
</head>


<body>

    
    
     <div class="sidebar">

    <div class="logo">

        <img class="rrflogo" src="cover.png" alt="logo">

    
  
    <div class="container mt-5">
        
            <div class="search">
              <div class="search-box"> 
                 <input type="text" class="form-control" name="live_search" id="live_search" autocomplete="off" placeholder="Search for food and restaurant...">
                    <div class="search-btn">
                       <i class="fa fa-search"></i> </div>
              </div>
        
         <div id="search_result"></div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#live_search").keyup(function () {
                var query = $(this).val();
                if (query != "") {
                    $.ajax({
                        url: 'backend-search.php',
                        method: 'POST',
                        data: {
                            query: query
                        },
                        success: function (data) {
                            $('#search_result').html(data);
                            $('#search_result').css('display', 'block').css('color', 'black').css('background-color', 'white').css('width', '600px').css('position', 'relative').css('left', '100px').css('bottom', '10px');
                            $("#live_search").focusout(function () {
                                $('#search_result').css('display', 'none').css('color', 'black').css('background-color', 'white').css('width', '600px').css('position', 'relative').css('left', '100px').css('bottom', '10px');
                            });
                            $("#live_search").focusin(function () {
                                $('#search_result').css('display', 'block').css('color', 'black').css('background-color', 'white').css('width', '600px').css('position', 'relative').css('left', '100px').css('bottom', '10px');
                            });
                        }
                    });
                } else {
                    $('#search_result').css('display', 'none');
                }
            });
        });
    </script>

       
        <button class="btnn show" onclick="filterSelection('all')"> Show all</button>
        <button class="btnn" onclick="filterSelection('top rated')"> Top Rated</button>
        <button class="btnn" onclick="filterSelection('price')"> Price Range</button>
        <button class="btnn" onclick="filterSelection('location')"> Location</button>
        <button class="btnn" onclick="filterSelection('food category')"> Food Category</button>
        
    </div>
    <p class = heading> All restaurants </p>
    <!-- card -->
   <div class="cardfix">
   <div class="container py-5">
    <div class="row mt-3">
       <?php 
      require 'dbConfig.php';

      $query = "SELECT * FROM restaurant where status=1";
      $query_run = mysqli_query($db, $query);
      $check_user = mysqli_num_rows($query_run) > 0;
      
      if($check_user)
      {
        while($row = mysqli_fetch_assoc($query_run))
        {
          ?>
          
          <div class="col-md-3 mt-3">
            <div class="card">

          <div class="card-body">
            <h5 class="card-title"><?php echo $row['restaurantname']; ?></h5>
            <p class="card-text"><?php echo $row['location']; ?></p>
         
            <!-- image fetch -->
              <?php 
          // Include the database configuration file  
           require_once 'dbConfig.php'; 

           $queryy = "SELECT image, imageid,resimageid from images, restaurant where images.imageid=restaurant.resimageid and restaurant.restaurantname= '$row[restaurantname]'";
           $queryy_run = mysqli_query($db, $queryy);
           $check_userr = mysqli_num_rows($queryy_run) > 0;

           if($check_userr){
            while($row = mysqli_fetch_assoc($queryy_run)){
              ?>
                 <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" class="card-img-top"/>
                 
              <?php
            }
           }
        ?>

            

          </div>
          </div>
          </div>

          <?php
        }
      }

      ?>
    </div>
    </div>
    </div>
   
       
    
</body>


</html>



