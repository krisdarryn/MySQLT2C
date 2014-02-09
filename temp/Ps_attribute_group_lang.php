<?php

class Ps_attribute_group_lang{


	/* fields */
	private $id_attribute_group
	private $id_lang
	private $name
	private $public_name

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_attribute_group($id_attribute_group){
		$this->id_attribute_group = $id_attribute_group;
	}

	public function setId_lang($id_lang){
		$this->id_lang = $id_lang;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function setPublic_name($public_name){
		$this->public_name = $public_name;
	}

	/* getters */
	public function getId_attribute_group($id_attribute_group){
		 return $this->id_attribute_group;
	}

	public function getId_lang($id_lang){
		 return $this->id_lang;
	}

	public function getName($name){
		 return $this->name;
	}

	public function getPublic_name($public_name){
		 return $this->public_name;
	}



}