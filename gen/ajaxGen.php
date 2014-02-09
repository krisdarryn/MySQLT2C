<?php

include_once '../helper/Database.php';
include_once 'ClassGenerator.php';

	if(isset($_GET['tableData']) && !empty($_GET['tableData'])){
		$db = new Database();
		$res = $db->getTableStructure($_GET['tableData']);
		$genClass = new ClassGenerator($res,$_GET['tableData']);
	
		if($genClass->generateClass()){
				
			echo $genClass->getGenClassContent($_GET['tableData']);
		}
		exit();
	} else if(isset($_GET['renFile']) && !empty($_GET['renFile'])){
		echo ClassGenerator::getGenClassContent($_GET['renFile']);
	} else if(isset($_GET['reload']) && !empty($_GET['reload'])){
		echo ClassGenerator::getListGenClass();
	} else if(isset($_GET['deleteClass']) && !empty($_GET['deleteClass']) ){
		echo json_encode( array( "deleted" => ClassGenerator::delete($_GET['deleteClass'])) );
	} else if(isset($_GET['deleteAll']) && !empty($_GET['deleteAll']) ){
		echo json_encode( array( "deleteAll" => ClassGenerator::deleteAll() ) );
	} else if( isset($_GET['all']) && !empty($_GET['all']) ){
		$db = new Database();
		
		foreach($db->listTables() as $table){
			$res  = $db->getTableStructure($table);
			$genClass = new ClassGenerator($res,$table);
		
			$genClass->generateClass();
		}
	}
	