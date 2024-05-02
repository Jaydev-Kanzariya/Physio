<?php
include "config.php";

$name =  $_POST['fname'];
// $gender =  $_POST['gender'];
$phone = $_POST['no'];
$email = $_POST['email'];
$password = $_POST['password'];
// $image = $_POST['image'];

$sql = "INSERT INTO doctor_master(Full_name,Phone,Email,password)  VALUES ('$name','$phone','$email','$password')";
	$result = mysqli_query($conn, $sql);
	
if($result){
	header("location:index.php");
} else{
	echo "Something went wrong";
}
mysqli_close($conn);
?>