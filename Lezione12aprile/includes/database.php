<?php
include './config.php';

class Database {
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;
    
    public $link;
    
    function __construct() {
        $this->connetti();
    }
    
    public function connetti() {
        $this->link = mysqli_connect($this->host, $this->user, $this->pass, $this->dbname);
    }
    
    public function select($query) {
        
        $result = mysqli_query($link, $query);
        if($result > 0){
            return $result;
        } else 
            return false;
        
    }
    
    public function insert ($query) {
        
    }
}


