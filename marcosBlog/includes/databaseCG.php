<?php
require_once 'config.php';
class Database {
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
	
	public function connection() {
		try{
			$this->link = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->user,$this->pass);
		}catch(PDOException $e){
			trigger_error('SQL error: '.$e->getMessage(), E_USER_ERROR);
		}
	}
	
	public function rowCount($query,$parameters=false){
		$q=$this->makeQuary($query,$parameters);
		return $q==false ? false : $q->rowCount();
	}
	
	public function exe($query,$parameters=false){
		$q=$this->makeQuary($query,$parameters);
		return $q==false ? false : $q->fetchAll(PDO::FETCH_ASSOC);
	}
	
	public function makeQuary($query,$parameters){
		if($parameters!=false && substr_count($query,"?")!=count($parameters) || $parameters==false && substr_count($query,"?")>0){
			trigger_error("Parameters from query and array not equals", E_USER_ERROR);
			return false;
		}
		try{
			$stmt = $this->link->prepare($query);
			if($parameters!=false)$stmt->execute($parameters);
			else $stmt->execute();
			return $stmt;
		}catch(PDOExeption $e){
			trigger_error('SQL error: '.$e->getMessage(), E_USER_ERROR);
			return false;
		}
	}
	
}
?>
