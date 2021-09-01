<?php 
require 'connect.php';
$username=$_POST['username'];
$password=$_POST['password'];
 $logincheck= "SELECT * FROM users WHERE username='$username' AND password='$password' ";
$querylogin = $conn -> query($logincheck);
$user=$querylogin -> fetch_assoc();
$id=$user['id'];
if ($querylogin -> num_rows > 0) {
	session_start();
	$_SESSION['loginid'] = $id;
header("location:../index.php");
}else{
	header("location:../login.php");
};
?>