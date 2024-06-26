<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RRF Filter By Cuisine</title>
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
    float: left;
  display: block;
  color: rgb(219, 216, 216);
  text-align: center;
  padding: 10px;
  text-decoration:none;
  font-size: 15px;
  background-color: rgb(46, 16, 9);
  margin: 10px;
  border-radius: 5px;
  font-family: 'Times New Roman', Times, serif;
  border: none;
  position: relative;
  top: 40px;
  left: 240px;
}
.banner form input[type="checkbox"]{
    width: 45px;
    position: relative;
    left: 10px;
}
.banner .check{
    font-family: 'Times New Roman', Times, serif;
    color: rgb(46, 16, 9);
    position: relative;
    right: 5px;
    top: 15px;
}

    </style>

<body>



    <div class = "banner">
          
        <div class="logo">

            <img class="rrflogo" src="image/navbarlogo.png" alt="logo">
    
        </div>

        
<!-- italian french bengali chinese -->
  <form method = "GET" action = "customer/submitSpice.php" >
        <div class = "attribute">
        <div class="check">
    <input type="checkbox" name="spicelevel[]" value="Non-Spicy">
    <label>Non-Spicy</label>
    <input type="checkbox" name="spicelevel[]" value="Regular">
    <label>Regular</label>
    <input type="checkbox" name="spicelevel[]" value="Mild">
    <label>Mild</label>
    <input type="checkbox" name="spicelevel[]" value="Spicy">
    <label>Spicy</label>
    <input type="checkbox" name="spicelevel[]" value="Extremely Spicy">
    <label>Extremely Spicy</label>
    <input type="submit" name = "Submit" >
</div>
</form>
                                      

    </div>


</body>
</html>