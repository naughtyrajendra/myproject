<?php
include("conection.php");
$uname=$_POST["username"];
$pass=$_POST["password"];

$query = "SELECT * FROM signup WHERE username='$uname' and password='$pass'";

 
$data = mysqli_query($conn,	$query);

	if (mysqli_num_rows($data) >0 ) {
		$row = mysqli_fetch_assoc($data);
    echo "successfull".$row['id'].'<br>'.$row['username'].'<br>'.$row['password'].'<br>'.$row['email'].'<br>';
		// header('Location: member.php');
		//exit();
	}
	else {
		echo  "Please enter a valid username or password";
		/*header('Location: error.php');
		exit();*/
	}



?>