<?php 
/**
 * 
 */
class Database
{
	private $table= null;
	private $dbname= null;
    public $conn =null ;
	public const HOST = 'localhost';
	function __construct($dbname)
	{
         $this -> dbname = $dbname;
		$this -> conn = $this -> connect();
	}
	public function connect(){
		$conn = new mysqli(self::HOST , 'root' , '' , $this -> dbname);
		return $conn ; 
	}
	public function table($table)
	{
		$this -> table = $table;
	}
}//end class

