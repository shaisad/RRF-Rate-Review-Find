<?php

error_reporting(0);
 

$msg = "";
 
// If upload button is clicked ...

if (isset($_POST['upload'])) {
 

    $filename = $_FILES["filename"]["name"];

    $tempname = $_FILES["filename"]["tmp_name"];

    $folder = "./image/" . $filename;

    $db = mysqli_connect("localhost", "root", "", "rrf");
 

    // Get all the submitted data from the form

    $sql = "INSERT INTO restaurant (filename) VALUES ('$filename')";
 

    // Execute query

    mysqli_query($db, $sql);
 

    // Now let's move the uploaded image into the folder: image

    if (move_uploaded_file($tempname, $folder)) {

        echo "<h3>  Image uploaded successfully!</h3>";

    } else {

        echo "<h3>  Failed to upload image!</h3>";

    }
}
?>