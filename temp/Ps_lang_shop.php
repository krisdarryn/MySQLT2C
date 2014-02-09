<?php

class Ps_lang_shop{


	/* fields */
	private $id_lang
	private $id_shop

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_lang($id_lang){
		$this->id_lang = $id_lang;
	}

	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
	}

	/* getters */
	public function getId_lang($id_lang){
		 return $this->id_lang;
	}

	public function getId_shop($id_shop){
		 return $this->id_shop;
	}



}