<?php 
session_start();
?>
<?php 
$irestaurantname = $_SESSION['restaurantname'];


//$ifoodname = $_SESSION['foodname'];



// Include the database configuration file  
require 'dbConfig.php'; 
 
// If file upload form is submitted 
$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    $status = 'error'; 
    if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
            

            // Insert image content into database 
            $insert = $db->query("INSERT into foodimage (image, irestaurantname, foodname)  VALUES ('$imgContent', '$_SESSION[restaurantname]', (select '$_SESSION[foodname]' from food_new where food_new.foodname = '$_SESSION[foodname]') ) "); 
          // $insert2 = $db->query("INSERT into foodimage (foodname) select '$_SESSION[foodname]' from food_new where food_new.foodname = '$_SESSION[foodname]' "); 
           
        //   INSERT INTO <table_name> (<field1>, <field2>, <field3>) 
        //   VALUES ('DUMMY1', (SELECT <field> FROM <table_name> ),'DUMMY2');
            

             
            if($insert){ 
                $status = 'success'; 
                $statusMsg = "File uploaded successfully. Click <a href='http://localhost/SPL1--R.R.F-1/SPL1-(R.R.F)/AddMenu.php'> here </a> to add another food item or go to <a href='http://localhost/SPL1--R.R.F-1/SPL1-(R.R.F)/HomePageLoggedInRest.php'>home page.</a>"; 
            }else{ 
                $statusMsg = "File upload failed, please try again."; 
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 
} 
 
// Display status message 
echo $statusMsg; 
?>