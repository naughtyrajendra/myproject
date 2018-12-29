<?php
include('conection.php');
//print_r($_POST);die;


$uname= $_POST['usernamesignup'];
$email=$_POST['emailsignup'];
$pass= $_POST['passwordsignup'];

$sql = "INSERT INTO signup (username, email, password)
VALUES ('$uname', '$email', '$pass')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql .	 "<br>" . $conn->error;
}


$conn->close();
?>
