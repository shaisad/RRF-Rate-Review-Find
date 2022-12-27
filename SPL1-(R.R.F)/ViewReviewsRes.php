
<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, intial-scale=1.0">
<title>Review Details</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
<!-- Bootstrap CSS -->

<link href="/css/bootstrap.min.css" rel="stylesheet">

<!--Stylesheet--------------------------->
<link rel="stylesheet" href="css/style.css"/>
<!--Fav-icon------------------------------>
<link rel="shortcut icon" href="images/fav-icon.png"/>
<!--poppins-font-family------------------->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<!--using-Font-Awesome-------------------->
<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
</head>

<style>

@import url("https://fonts.googleapis.com/css??family=Poppins:wght@400;500;600;700&display=swap");

*{
    margin: 0px;
    padding: 0px;
    font-family: poppins;
    box-sizing: border-box;
}
body{
    background-color: rgb(240, 221, 136);
}
a{
    text-decoration: none;
    font-family: 'Times New Roman', Times, serif;
}
#testimonials{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    width:100%;
}
.testimonial-heading{
    letter-spacing: 1px;
    margin: 30px 0px;
    padding: 10px 20px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.testimonial-heading h1{
    font-size: 2.2rem;
    font-weight: 500;
    background-color: rgb(80, 31, 19);
    color: #ffffff;
    padding: 10px 20px;
}
.testimonial-heading span{
    font-size: 1.3rem;
    color: rgb(80, 31, 19);
    margin-bottom: 10px;
    letter-spacing: 2px;
    text-transform: uppercase;
}
.testimonial-box-container{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    width:100%;
}
.testimonial-box{
    width:500px;
    box-shadow: 2px 2px 30px rgba(0,0,0,0.1);
    background-color: #ffffff;
    padding: 20px;
    margin: 15px;
    cursor: pointer;
}
.profile{
    display: flex;
    align-items: center;
}
.name-user{
    display: flex;
    flex-direction: column;
}
.name-user strong{
    color: #3d3d3d;
    font-size: 1.1rem;
    letter-spacing: 0.5px;
}
.name-user span{
    color: #979797;
    font-size: 0.8rem;
}
.reviews{
    color: #f9d71c;
}
.box-top{
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}
.client-comment p{
    font-size: 0.9rem;
    color: #4b4b4b;
}
.testimonial-box:hover{
    transform: translateY(-10px);
    transition: all ease 0.3s;
}
 
@media(max-width:1060px){
    .testimonial-box{
        width:45%;
        padding: 10px;
    }
}
@media(max-width:790px){
    .testimonial-box{
        width:100%;
    }
    .testimonial-heading h1{
        font-size: 1.4rem;
    }
}
@media(max-width:340px){
    .box-top{
        flex-wrap: wrap;
        margin-bottom: 10px;
    }
    .reviews{
        margin-top: 10px;
    }
}
::selection{
    color: #ffffff;
    background-color: #252525;
}

img {
    width: 180px;
    height: 80px;
    top: 350px;
    left: 100px;
}
 


</style>

<body>
    
    
          
        <div class="logo">

            <img class="rrflogo" src="cover.png" alt="logo">
    
        </div>


        <?php



  
  
    require 'dbConfig.php';
    $sno = $_GET['resid'];
    
    $getr= "SELECT AVG(rating) AS overall_rating, COUNT(*) AS total_reviews FROM res_reviews WHERE reviewrid ='$sno'";
    $result = mysqli_query($db, $getr);

    $row = mysqli_fetch_array($result);
echo $row['overall_rating'].'/5'."<br/>";
echo 'Total:'.$row['total_reviews'].' '.'reviews'."<br/>";

$showr = "SELECT review, rating, rrusername, submitdate  FROM res_reviews WHERE reviewrid = '$sno'  ORDER BY submitdate DESC";
$result = mysqli_query($db, $showr);

?>
<section id="testimonials">

        <div class="testimonial-heading">
            <span>Reviews</span>
            <h1>Reviewers says..</h1>
        </div>

        <div class="container py-5">
            <div class="row mt-3">
        
        <?php


    while($row = mysqli_fetch_array($result)) {
                
        
    
    ?>
    

        <!--testimonials-box-container------>
<div class="testimonial-box-container">
            <!--BOX-1-------------->
    <div class="col-md-6 mt-3">
        <div class="card">
            <div class="testimonial-box">
                <!--top------------------------->
                <div class="box-top">
                    <!--profile----->
                    <div class="profile">
                        
                        <!--name-and-username-->
                        <div class="name-user">
                            <strong><?php echo $row['rrusername']."<br/>"?></strong>
                        </div>

                        <div class="client-comment">
                            <p><?php echo $row['submitdate']."<br/>"?> </p>
                        </div>

                    </div>
                    <!--reviews------>
                    <div class="reviews">
                        <p>Given Rating: <?php echo $row['rating']?><i class="fas fa-star"></i></p>
                    </div>
                </div>
                <!--Comments---------------------------------------->
                <div class="client-comment">
                    <p><?php echo $row['review']."<br/>" ?></p>
              </div>
            
         </div>
    </div>

            
</div>
    </div>
    </div>
        
    </section>
    <?php

    }


?>
</body>
</html>



