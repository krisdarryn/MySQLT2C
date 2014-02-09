<?php

class Ps_profile_lang{


	/* fields */
	private $id_lang
	private $id_profile
	private $name

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_lang($id_lang){
		$this->id_lang = $id_lang;
	}

	public function setId_profile($id_profile){
		$this->id_profile = $id_profile;
	}

	public function setName($name){
		$this->name = $name;
	}

	/* getters */
	public function getId_lang($id_lang){
		 return $this->id_lang;
	}

	public function getId_profile($id_profile){
		 return $this->id_profile;
	}

	public function getName($name){
		 return $this->name;
	}



}