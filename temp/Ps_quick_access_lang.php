<?php

class Ps_quick_access_lang{


	/* fields */
	private $id_quick_access
	private $id_lang
	private $name

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_quick_access($id_quick_access){
		$this->id_quick_access = $id_quick_access;
	}

	public function setId_lang($id_lang){
		$this->id_lang = $id_lang;
	}

	public function setName($name){
		$this->name = $name;
	}

	/* getters */
	public function getId_quick_access($id_quick_access){
		 return $this->id_quick_access;
	}

	public function getId_lang($id_lang){
		 return $this->id_lang;
	}

	public function getName($name){
		 return $this->name;
	}



}