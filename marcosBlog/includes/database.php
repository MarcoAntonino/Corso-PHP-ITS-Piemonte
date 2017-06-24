<?php

/**
 *
 */
class Database
{
	private $host;
	private $user;
	private $pass;
	private $dbname;
	public $link;

	function __construct($dbname = DB_NAME, $host = DB_HOST, $user = DB_USER, $pass = DB_PASS) {
		$this->host = $host;
		$this->user = $user;
		$this->pass = $pass;
		$this->dbname = $dbname;
		$this->connection();
	}

	function connection()	{

		try {
			$this->link = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->user,$this->pass);
		} catch (Exception $e) {

			echo $e->getMessage();
		}

	}

	public function insert($query)
	{
		$insert = $this->link->query($query);
	}
}

?>
