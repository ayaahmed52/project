<?php
 /**
  * 
  */
 class Signup 
 { 
    public $conn = null ;
	public const HOST = 'localhost';
	public $data=null;	
 	function __construct()
 	{
	    $this -> conn = $this -> connect();
 	  }
 	
 	public function connect(){
		$conn = new mysqli(self::HOST , 'root' , '' , 'project');
		return $conn ; 
	}
  function insert( $fields, $values) {

                $key = implode(", ", $fields);
                $value = "'" . implode("','", $values) . "'";
                $insert = "INSERT INTO users ({$key}) VALUES ({$value}) ";
                $query = $this -> conn-> query($insert);
                if ($query) {
                	header("location:../login.php");
                }else{
                	echo $this-> conn -> error;
                }
                       
        }

    }

	


