<?php
include_once 'Session.php';

class Database{
	
	public $db;
	
	private $host;
	private $dbname;
	private $username;
	private $password;
	
	public function __construct($host = null,$dbname = null,$username = null,$password = null){
		
		if(!Session::isSessionEmpty()){
			$this->host = Session::getHost();
			$this->dbname = Session::getDBName();
			$this->username = Session::getUsername();
			$this->password = Session::getPassword();
		}else{
			$this->host = $host;
			$this->dbname = $dbname;
			$this->username = $username;
			$this->password = $password;
		}
		
		$dns = "mysql:dbname=".$this->dbname.";host=".$this->host;
		try{
			$this->db = new PDO($dns,$this->username,$this->password);
			if(Session::isSessionEmpty()){Session::setCurrentDB($host,$dbname,$username,$password);}
		}catch(PDOException $e){
			$this->db = null;
			echo $e->getMessage();
		}
	}
	
	public function listTables(){
		$stmt = $this->db->prepare("SHOW TABLES");
		$stmt->execute();
		
		$result = $stmt->fetchAll();
		$tables = array();
		
		foreach($result as $res){
			$tables[] = $res[0];	
		}
		
		return $tables;
	}
	
	public function getTableStructure($tablename){
		$stmt = $this->db->prepare("DESCRIBE ".$tablename);
		$stmt->execute();
		
		return $stmt->fetchAll();
	}
}