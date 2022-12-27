<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter By Range</title>
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

body{
    background-color: rgb(17, 6, 4);
}

.attribute {
        font-size: 18px;
        font-style: normal;
        position: relative;
        top: 30px;
        font-family: 'Times New Roman', Times, serif;
        }

    .banner{
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 600px;
  height: 300px;
  margin: auto;
  text-align: center;
  font-family: 'Times New Roman', Times, serif;
  background-color: rgb(240, 221, 136);
  position: relative;
  top: 100px;
  border-radius: 5px;
    }

img {
    width: 180px;
    top: 300px;
    left: 100px;
}
label {
    position: relative;
    right: 10px;
}
.banner form input[type="submit"]{
    width: 100px 80px;
    height: 20px;
  	background-color:rgb(80, 31, 19); 
 	border: 0;
  	cursor: pointer;
  	color: #ffffff;
  	transition: background-color 0.2s;
    position: relative;
    top: 60px;
    right: 180px;
    font-family: 'Times New Roman', Times, serif;
}
.banner form input[type="email"]{
    width: 220px;
    font-family: 'Times New Roman', Times, serif;
}

.heading{
    font-family: 'Times New Roman', Times, serif; 
    color:rgb(80, 31, 19);
    font-weight: 300;
    font-size: 20px; 
}
.form{
    font-family: 'Times New Roman', Times, serif; 
    color:rgb(80, 31, 19);
    background-color:rgb(17, 6, 4);
    font-weight: 300;
    font-size: 20px;
}
    </style>

<body>



    <div class = "banner">
          
        <div class="logo">

            <img class="rrflogo" src="cover.png" alt="logo">
    
        </div>

        <div class="heading">
            <p>Select range to filter</p>
        </div>

        

  <form method = "GET" action = "submitrange.php" >
        <div class = "attribute">
        <select name="sort_numeric" class="form">
                                            <option class="opt" value="">Select Option</option>
                                            <option class="opt" value="low-high" <?php if(isset($_GET['sort_numeric']) && $_GET['sort_numeric'] == "low-high") { echo "selected"; } ?> > Low - High</option>
                                            <option class="opt" value="high-low" <?php if(isset($_GET['sort_numeric']) && $_GET['sort_numeric'] == "high-low") { echo "selected"; } ?> > High - Low</option>
                                        </select>
                                        <button type="submit" class="input-group-text btn btn-primary" name = "submit" id="basic-addon2">
                                            Filter
                                        </button>
    </form>

    </div>


</body>
</html>