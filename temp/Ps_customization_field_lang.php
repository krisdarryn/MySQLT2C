<?php

class Ps_customization_field_lang{


	/* fields */
	private $id_customization_field
	private $id_lang
	private $name

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_customization_field($id_customization_field){
		$this->id_customization_field = $id_customization_field;
	}

	public function setId_lang($id_lang){
		$this->id_lang = $id_lang;
	}

	public function setName($name){
		$this->name = $name;
	}

	/* getters */
	public function getId_customization_field($id_customization_field){
		 return $this->id_customization_field;
	}

	public function getId_lang($id_lang){
		 return $this->id_lang;
	}

	public function getName($name){
		 return $this->name;
	}



}