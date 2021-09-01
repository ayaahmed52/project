 <?php 

define('HOST', 'localhost');
define('USER' , 'root');
define('PASSWORD', '');
define('DBNAME', 'project');
$conn = new mysqli (HOST , USER , PASSWORD , DBNAME);

$conn -> set_charset('utf8');

if(!$conn){

   echo $conn -> connect_error ;

 };
?> 