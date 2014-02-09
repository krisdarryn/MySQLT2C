<?php

class Ps_gender_lang{


	/* fields */
	private $id_gender
	private $id_lang
	private $name

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_gender($id_gender){
		$this->id_gender = $id_gender;
	}

	public function setId_lang($id_lang){
		$this->id_lang = $id_lang;
	}

	public function setName($name){
		$this->name = $name;
	}

	/* getters */
	public function getId_gender($id_gender){
		 return $this->id_gender;
	}

	public function getId_lang($id_lang){
		 return $this->id_lang;
	}

	public function getName($name){
		 return $this->name;
	}



}