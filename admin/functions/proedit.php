<?php
require_once 'connect.php';
$id=$_POST['id'];
$name=$_POST['name'];
$price=$_POST['price'];
$sale=$_POST['sale'];
$cat=$_POST['cat'];
 $imgName=$_FILES['img']['name'];
  $temp=$_FILES['img']['tmp_name'];
if($_FILES['img']['error'] == 0){

  $extension=['jpg' , 'jpeg' , 'gif' , 'png'];
  $ext = pathinfo($imgName , PATHINFO_EXTENSION);

  if(in_array($ext,$extension)){
  	if($_FILES['img']['size'] < 2000000){
  	 $newname=md5(uniqid()).".". $ext;
       move_uploaded_file($temp,"../imges/" . $newname);
  	}else{
  		echo 'this size is not allowed';
  	}

    }else{
          echo 'this type is not allowed';
  }
}

$updatepro="UPDATE product set name = '$name' , price= '$price' , sale ='$sale', cat_name= '$cat' , img='$newname' WHERE id = '$id' ";

$query = $conn -> query($updatepro);
if ($query) {
header("location:../products.php");
}else{
	echo $conn -> error;
}