<?php 

$id =$_GET['id'];
 require_once 'connect.php';

 $del = " DELETE FROM users WHERE id  = $id ";
$query = $conn -> query($del);
if ($query) {
header("location:../users.php");
}else{
	echo $conn -> error;
}
 ?>