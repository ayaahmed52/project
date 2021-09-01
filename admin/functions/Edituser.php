<?php
 require_once 'connect.php';
$id=$_POST['id'];
$username=$_POST['username'];
$password=$_POST['password'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$address=$_POST['address'];
$priv=$_POST['priv'];
$gender=$_POST['gender'];
if (!empty($password)) {
  $pass=md5($password);
  $Updatepass="UPDATE  users set password='$pass'";
  $conn -> query($Updatepass);
}

$UpdateUser = "UPDATE users set username = '$username' , phone = '$phone' , email = '$email' , address = '$address' , priv = '$priv' , gender ='$gender' , password = '$password' WHERE id = '$id' " ;

$query = $conn -> query($UpdateUser);
if ($query) {
header("location:../users.php");
}else{
	echo $conn -> error;
}


  ?>