<?php 
 

 /**
  * edit user
  */
 class Edit
 {
 	public $conn=null;
 	public $array = null ;
 	function __construct()
 	{
       $this->array = $_POST;

 	}
 	public function connect()
 	{
 		include_once 'connect.php';
 		$this->conn = new Database('project');
 		$this -> conn -> table('users');
 	}
 	 public function get($data){
      print_r($data);
 	 }
 }//end class
