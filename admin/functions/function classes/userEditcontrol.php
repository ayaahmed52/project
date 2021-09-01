<?php 
$data['username'] = $_POST['username'];
$data['password'] = $_POST['password'];
$data['phone']    = $_POST['phone'];
$data['email']    = $_POST['email'];
$data['address']  = $_POST['address'];
$data['priv']     = $_POST['priv'];
$data['gender']   = $_POST['gender'];

include 'Edituser.php';
 $obj = new Edit();
 $obj -> get($data);