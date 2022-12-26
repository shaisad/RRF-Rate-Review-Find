<?php 


session_start(); 

$sname= "localhost";
$uname= "root";
$password = "";

$db_name = "rrf";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}

$restaurantemail = $_POST['restaurantemail'];
$password = $_POST['password'];
//$email = $conn->real_escape_string($email);
//$password = $conn->real_escape_string($password);
//$password = md5($password);

if (isset($restaurantemail) && isset($password)) {

//	function validate($data){
//       $data = trim($data);
//	   $data = stripslashes($data);
//	   $data = htmlspecialchars($data);
//	   return $data;
//	   echo "p1";
//	}

//	$email = validate($_POST['email']);
//	$password = validate($_POST['password']);

//	if (empty($email)) {
//		header("Location: process.php?error=Email is required");
//	    exit();
//	}else if(empty($password)){
//        header("Location: process.php?error=Password is required");
//	    exit();
//	}else{
		//$sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
        $sql2 = "SELECT * FROM restaurant WHERE restaurantemail ='$restaurantemail'";
		
        //$result = mysqli_query($conn, $sql);
        $result2 = mysqli_query($conn, $sql2);

		
        if ($result2->num_rows == 1) {
			$row = mysqli_fetch_assoc($result2);
            if ($row['status'] == 1) {
				if( password_verify($password, $row['password'])){
					$_SESSION['restaurantemail'] = $row['restaurantemail'];
					$_SESSION['password'] = $row['password'];
					$_SESSION['restaurantname'] = $row['restaurantname'];
					$_SESSION['location'] = $row['location'];
							
					
                header("Location: HomePageLoggedInRest.php?resid='. $sno .'");
                exit();
				
            }
			else{
				
				?>      
          <script>alert("Wrong Password! Make sure to type in the correct password!")</script>
          <?php
          exit();
			}
		}else{
			?>      
          <script>alert("Restaurant account not verified!")</script>
          <?php
          exit();
				
		        
			}
		}
		else{
			
			?>      
          <script>alert("No restaurant found!")</script>
          <?php
          exit();
		}
	
	}
	
else{
	
	?>      
	<script>alert("Restaurant email and password fields must be filled to continue!")</script>
	<?php
	exit();}

?>
