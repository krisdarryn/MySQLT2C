<?php

session_start();

class Session{
	
	public static function setCurrentDB($host,$dbname,$username,$password){
		$_SESSION['db']['host'] = $host;
		$_SESSION['db']['dbname'] = $dbname;
		$_SESSION['db']['username'] = $username;
		$_SESSION['db']['password'] = $password;
	}
	
	public static function getHost(){
		if(isset($_SESSION['db']['host']) && !empty($_SESSION['db']['host']))
			return $_SESSION['db']['host'];
		else
			return null;
	}
	
	public static function getDBName(){
		if(isset($_SESSION['db']['dbname']) && !empty($_SESSION['db']['dbname']))
			return $_SESSION['db']['dbname'];
		else
			return null;
	}
	
	public static function getUsername(){
		if(isset($_SESSION['db']['username']) && !empty($_SESSION['db']['username']))
			return $_SESSION['db']['username'];
		else
			return null;	
	}
	
	public static function getPassword(){
		if(isset($_SESSION['db']['password']) && !empty($_SESSION['db']['password']))
			return $_SESSION['db']['password'];
		else
			return null;	
	}
	
	public static function isSessionEmpty(){
		return !isset($_SESSION['db']) && empty($_SESSION['db']);
	}
	
	public static function destroy(){
		session_unset();
		session_destroy();
		header('Location:index.php');
	}
}