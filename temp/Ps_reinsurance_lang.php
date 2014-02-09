<?php

class Ps_reinsurance_lang{


	/* fields */
	private $id_reinsurance
	private $id_lang
	private $text

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_reinsurance($id_reinsurance){
		$this->id_reinsurance = $id_reinsurance;
	}

	public function setId_lang($id_lang){
		$this->id_lang = $id_lang;
	}

	public function setText($text){
		$this->text = $text;
	}

	/* getters */
	public function getId_reinsurance($id_reinsurance){
		 return $this->id_reinsurance;
	}

	public function getId_lang($id_lang){
		 return $this->id_lang;
	}

	public function getText($text){
		 return $this->text;
	}



}