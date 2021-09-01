<?php 

$id =$_GET['id'];
 require_once 'connect.php';

 $del = " DELETE FROM product WHERE id  = $id ";
$query = $conn -> query($del);
if ($query) {
header("location:../products.php");
}else{
	echo $conn -> error;
}
 ?>