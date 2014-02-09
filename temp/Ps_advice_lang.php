<?php

class Ps_advice_lang{


	/* fields */
	private $id_advice
	private $id_lang
	private $html

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_advice($id_advice){
		$this->id_advice = $id_advice;
	}

	public function setId_lang($id_lang){
		$this->id_lang = $id_lang;
	}

	public function setHtml($html){
		$this->html = $html;
	}

	/* getters */
	public function getId_advice($id_advice){
		 return $this->id_advice;
	}

	public function getId_lang($id_lang){
		 return $this->id_lang;
	}

	public function getHtml($html){
		 return $this->html;
	}



}