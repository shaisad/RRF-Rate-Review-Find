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

$useremail = $_POST['useremail'];
$password = $_POST['password'];
//$email = $conn->real_escape_string($email);
//$password = $conn->real_escape_string($password);
//$password = md5($password);

if (isset($useremail) && isset($password)) {

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
		$sql = "SELECT * FROM user WHERE useremail = '$useremail' AND password = '$password'";
        //$sql2 = "SELECT * FROM restaurant WHERE email ='$email' AND password='$password'";
		
        $result = mysqli_query($conn, $sql);
        //$result2 = mysqli_query($conn, $sql2);

		if ($result->num_rows == 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['status'] == 1) {
				$_SESSION['useremail'] = $row['useremail'];
            	$_SESSION['password'] = $row['password'];
				$_SESSION['username'] = $row['username'];
				$_SESSION['location'] = $row['location'];
							

                header("Location: HomePageLoggedInUser.php");
                exit();
				
            }else{
				echo "Account not verified.";
		        exit();
			}
		}
	
	}
	
else{
	echo "Login failed";
	exit();
}

?>
