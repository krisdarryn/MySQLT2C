<?php

class Ps_web_browser{


	/* fields */
	private $id_web_browser
	private $name

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_web_browser($id_web_browser){
		$this->id_web_browser = $id_web_browser;
	}

	public function setName($name){
		$this->name = $name;
	}

	/* getters */
	public function getId_web_browser($id_web_browser){
		 return $this->id_web_browser;
	}

	public function getName($name){
		 return $this->name;
	}



}