<?php

class Ps_group_lang{


	/* fields */
	private $id_group
	private $id_lang
	private $name

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_group($id_group){
		$this->id_group = $id_group;
	}

	public function setId_lang($id_lang){
		$this->id_lang = $id_lang;
	}

	public function setName($name){
		$this->name = $name;
	}

	/* getters */
	public function getId_group($id_group){
		 return $this->id_group;
	}

	public function getId_lang($id_lang){
		 return $this->id_lang;
	}

	public function getName($name){
		 return $this->name;
	}



}