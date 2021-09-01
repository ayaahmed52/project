<?php 
$username=$_POST['username'];
$password=$_POST['password'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$address=$_POST['address'];
$priv=$_POST['priv'];
$gender=$_POST['gender'];

include 'connect.php';

  $adduser = "INSERT INTO users (username , password , phone , email, address , priv , gender) VALUES ('$username' , '$password', '$phone' , '$email' , '$address' , '$priv' , ' $gender ') ";

$query = $conn -> query($adduser);
if ($query) {
header("location:../users.php");
}else{
	echo $conn -> error;
}