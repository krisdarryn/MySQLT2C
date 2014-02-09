<?php
include_once 'helper/Database.php';
include_once 'gen/ClassGenerator.php';

if(isset($_GET['db']) && !empty($_GET['db'])){
	Session::destroy();
}
	
if(isset($_POST) && !empty($_POST)){
	$db = new Database($_POST['host'],$_POST['dbname'],$_POST['username'],$_POST['password']); 
}else{
	$db = new Database();
}

if( isset($_GET['download']) && !empty($_GET['download']) ){
	ClassGenerator::download($_GET['download']);
}

if( isset($_GET['dl_all']) && !empty($_GET['dl_all']) ){
//	ClassGenerator::downloadAll($_GET['dl_all']);
}