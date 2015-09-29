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
	
	
	if( count(array_diff(scandir('temp'),array('.','..'))) != 0 ) {
		$zip = new ZipArchive();
		$name = "classes".time().".zip";
		$filename = 'temp/'.$name;
		
		if ($zip->open($filename, ZIPARCHIVE::CREATE)!==TRUE) {
			exit("cannot open <$filename>\n");
		}
		
		foreach( array_diff(scandir('temp'),array('.','..')) as $key => $file ){
			if( strripos($file,".zip") < -1 ){
				$zip->addFile('temp/'.$file);
			}
		}
		
		/* echo "numfiles: " . $zip->numFiles . "\n";
		echo "status:" . $zip->status . "\n"; */
		$zip->close();
		
		ClassGenerator::download($name);
		ClassGenerator::delete($name); 
	}
}