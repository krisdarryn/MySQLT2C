<?php

include_once '../helper/Database.php';
include_once 'ClassGenerator.php';

	if(isset($_GET['tableData']) && !empty($_GET['tableData'])){
		$db = new Database();
		$res = $db->getTableStructure($_GET['tableData']);   
		$genClass = new ClassGenerator($res, $_GET['tableData'], $_GET);
      
      header("Content-Type: application/json");
      
		if($genClass->generateClass()){
			$class = $genClass->getGenClassContent(ClassGenerator::strToCamelCase($_GET['tableData']));	
			
         $data = json_encode(array(
            'classContent' => $class,
            'className' => ClassGenerator::strToCamelCase($_GET['tableData'])
         ));
         
         print_r($data);
         exit;
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
	