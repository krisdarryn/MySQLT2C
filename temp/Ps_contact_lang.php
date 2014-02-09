<?php

class Ps_contact_lang{


	/* fields */
	private $id_contact
	private $id_lang
	private $name
	private $description

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_contact($id_contact){
		$this->id_contact = $id_contact;
	}

	public function setId_lang($id_lang){
		$this->id_lang = $id_lang;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function setDescription($description){
		$this->description = $description;
	}

	/* getters */
	public function getId_contact($id_contact){
		 return $this->id_contact;
	}

	public function getId_lang($id_lang){
		 return $this->id_lang;
	}

	public function getName($name){
		 return $this->name;
	}

	public function getDescription($description){
		 return $this->description;
	}



}