<?php

class Ps_theme{


	/* fields */
	private $id_theme
	private $name
	private $directory

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_theme($id_theme){
		$this->id_theme = $id_theme;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function setDirectory($directory){
		$this->directory = $directory;
	}

	/* getters */
	public function getId_theme($id_theme){
		 return $this->id_theme;
	}

	public function getName($name){
		 return $this->name;
	}

	public function getDirectory($directory){
		 return $this->directory;
	}



}