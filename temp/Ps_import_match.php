<?php

class Ps_import_match{


	/* fields */
	private $id_import_match
	private $name
	private $match
	private $skip

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_import_match($id_import_match){
		$this->id_import_match = $id_import_match;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function setMatch($match){
		$this->match = $match;
	}

	public function setSkip($skip){
		$this->skip = $skip;
	}

	/* getters */
	public function getId_import_match($id_import_match){
		 return $this->id_import_match;
	}

	public function getName($name){
		 return $this->name;
	}

	public function getMatch($match){
		 return $this->match;
	}

	public function getSkip($skip){
		 return $this->skip;
	}



}