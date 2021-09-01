<?php 
$username=$_POST['username'];
$password=$_POST['password'];
$phon=$_POST['phone'];
$emai=$_POST['email'];
$address=$_POST['address'];
$priv=$_POST['priv'];
$gender=$_POST['gender'];

include 'connect.php';

$ins="INSERT INTO users (username , password , email , phone , address , priv , gender) VALUES ('$username' , '$password' , '$email' , '$phone' , '$address' , '$priv' , '$gender')";

$query = $conn -> query($ins);
if ($query) {
header("location:../login.php");
}else{
	echo $conn -> error;
}
