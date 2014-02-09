<?php

class Ps_cms_block_lang{


	/* fields */
	private $id_cms_block
	private $id_lang
	private $name

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_cms_block($id_cms_block){
		$this->id_cms_block = $id_cms_block;
	}

	public function setId_lang($id_lang){
		$this->id_lang = $id_lang;
	}

	public function setName($name){
		$this->name = $name;
	}

	/* getters */
	public function getId_cms_block($id_cms_block){
		 return $this->id_cms_block;
	}

	public function getId_lang($id_lang){
		 return $this->id_lang;
	}

	public function getName($name){
		 return $this->name;
	}



}