<?php

class Ps_search_word{


	/* fields */
	private $id_word
	private $id_shop
	private $id_lang
	private $word

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_word($id_word){
		$this->id_word = $id_word;
	}

	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
	}

	public function setId_lang($id_lang){
		$this->id_lang = $id_lang;
	}

	public function setWord($word){
		$this->word = $word;
	}

	/* getters */
	public function getId_word($id_word){
		 return $this->id_word;
	}

	public function getId_shop($id_shop){
		 return $this->id_shop;
	}

	public function getId_lang($id_lang){
		 return $this->id_lang;
	}

	public function getWord($word){
		 return $this->word;
	}



}