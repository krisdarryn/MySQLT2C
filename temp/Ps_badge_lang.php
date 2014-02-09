<?php

class Ps_badge_lang{


	/* fields */
	private $id_badge
	private $id_lang
	private $name
	private $description
	private $group_name

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_badge($id_badge){
		$this->id_badge = $id_badge;
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

	public function setGroup_name($group_name){
		$this->group_name = $group_name;
	}

	/* getters */
	public function getId_badge($id_badge){
		 return $this->id_badge;
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

	public function getGroup_name($group_name){
		 return $this->group_name;
	}



}