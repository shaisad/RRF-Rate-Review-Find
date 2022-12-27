<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter By Category</title>
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

    </style>

<body>



    <div class = "banner">
          
        <div class="logo">

            <img class="rrflogo" src="cover.png" alt="logo">
    
        </div>

        
<!-- italian french bengali chinese -->
  <form method = "GET" action = "submitCuisine.php" >
        <div class = "attribute">
        
    <input type="checkbox" name="cuisine[]" value="Asian">
    <input type="checkbox" name="cuisine[]" value="Italian">
    <input type="checkbox" name="cuisine[]" value="Bengali">
    <input type="checkbox" name="cuisine[]" value="French">
    <input type="checkbox" name="cuisine[]" value="Chinese">
    <input type="submit" name = "submit" >
</form>
                                      

    </div>


</body>
</html>