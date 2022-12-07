<?php
include_once 'db.php';
session_start();
// header('location:login.php');
if(isset($_POST['register']))
{	 
	 $fullname = $_POST['fullname'];
	 $username = $_POST['username'];
	 $email = $_POST['email'];
	 $password = $_POST['password'];

	 $q = "select * from signinphp where username = '$username' && password = 'password'";
	 $result = mysqli_query($conn,$q);
	 $num = mysqli_num_rows($result);
	 if($num == 1){
		echo "data is duplicate";
		echo"<script>alert('username already taken');
                window.location.href='index.php';
                </script>"; 
	 }
	 else{
		$sql = "INSERT INTO signinphp (fullname,username,email,password)
		VALUES ('$fullname','$username','$email','$password')";
		if (mysqli_query($conn, $sql)) {
		//    echo "New record created successfully !";
		//     header("location:index.php");
		echo"<script>alert('Data is entered successfully');
                window.location.href='index.php';
                </script>"; 
		} else {
		   echo "Error: " . $sql . "
   " . mysqli_error($conn);
   echo"<script>alert('Duplicate data, please enter valid details');
                window.location.href='index.php';
                </script>"; 
		}
		mysqli_close($conn);
	 }
	 
}
?>