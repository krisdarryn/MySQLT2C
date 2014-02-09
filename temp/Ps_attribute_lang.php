<?php

class Ps_attribute_lang{


	/* fields */
	private $id_attribute
	private $id_lang
	private $name

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_attribute($id_attribute){
		$this->id_attribute = $id_attribute;
	}

	public function setId_lang($id_lang){
		$this->id_lang = $id_lang;
	}

	public function setName($name){
		$this->name = $name;
	}

	/* getters */
	public function getId_attribute($id_attribute){
		 return $this->id_attribute;
	}

	public function getId_lang($id_lang){
		 return $this->id_lang;
	}

	public function getName($name){
		 return $this->name;
	}



}