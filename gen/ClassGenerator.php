<?php

class ClassGenerator{
	
	const DIR = "../temp";
	
	private static $datatypes = array(
			'int','tinyint','smallint','mediumint','bigint','float','double','decimal',
			'date','datetime','timestamp','time','year',
			'char','varchar','blob','text','mediumblob','mediumtext','longblob','longtext','enum',		
		);
	
	private $tableStructure = array();
	
	public $tablename;
	
	public function __construct($arrg = null,$tablename = null){
		
		if($arrg != null){
			foreach($arrg as $key => $val){
				$this->tableStructure[$val['Field']] = $val['Type'];
			}
		}
		
		if($tablename != null){
			$this->tablename = $tablename;
		}
	}
	
	public function generateClass(){
		$a = new ContentMaker($this->tablename,$this->tableStructure);
		$file = fopen(self::DIR."/".ucfirst($this->tablename).".php","w");
		fwrite($file,$a->__toString());
		fclose($file);
		
		return true;
	}
	
	
	public static function getListGenClass(){
		$str = '';
		
		foreach( array_diff(scandir(self::DIR),array('.','..')) as $key => $file ){
			if( strripos($file,".zip") < -1 ){
				$str .= "<li><a href='' id='genClass'>$file</a><span class='del-class'>delete</span></li>";
			}
		}
		return $str;
	}
	
	public static function getGenClassContent($filename = null){
		$format_filename = strpos($filename,'.php')==false?"$filename.php":$filename;
		if($filename != null){
			$str = "\n";
			$str .= htmlentities(file_get_contents(self::DIR."/".$format_filename));
			
			print_r($str);
		}else{
			print_r("\nSelect a table.");
		}
	}
	
	public static function download($filename = null){
		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename="'.$filename.'"');
		header('Content-Transfer-Encoding: binary');
		header('Connection: Keep-Alive');
		header('Expires: 0');
		header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
		header('Pragma: public');
		header('Content-Length: ' . filesize("temp/".$filename) );
		readfile("temp/".$filename);
		exit();
	}
	
	public static function delete($filename = null){
		return unlink("../temp/".$filename);
	}
	
	public static function deleteAll(){
		foreach( array_diff(scandir(self::DIR),array('.','..')) as $key => $file ){
				ClassGenerator::delete($file);
		}
		
		return true;
	}
}

//////////////////
class ContentMaker{
	
	private $str;
	
	public function __construct($name = null,$fields = null){
		$this->str .= $this->header();
		$this->str .= $this->classHeader($name);
		//setting class field
		$this->str .= "\t/* fields */\n";
		foreach($fields as $key => $field){
			$this->str .= $this->setField($key);
		}
		//constructor
		$this->str .= "\n\t/* class constructor */\n";
		$this->str .= $this->constuctor();
		//setting setters
		$this->str .= "\t/* settter */\n";
		foreach($fields as $key => $field){
			$this->str .= $this->setSetter($key);
		}
		//setting getters
		$this->str .= "\t/* getters */\n";
		foreach($fields as $key => $field){
			$this->str .= $this->setGetter($key);
		}
		$this->str .= $this->classFooter();
	}
	
	private function header() { return "<?php\n\n"; }
	private function classHeader($name){ return "class ".ucfirst($name)."{\n\n\n"; }
	private function setField($field){ return "\tprivate $$field\n"; }
	private function constuctor(){ return "\tpublic function __construct(){\n\t}\n\n"; }
	private function setSetter($field){ return "\tpublic function set".ucfirst($field)."($$field){\n\t\t\$this->$field = $$field;\n\t}\n\n"; }
	private function setGetter($field){ return "\tpublic function get".ucfirst($field)."($$field){\n\t\t return \$this->$field;\n\t}\n\n"; }
	private function classFooter(){ return "\n\n}"; }
	
	public function __toString(){
		return $this->str;
	}
}