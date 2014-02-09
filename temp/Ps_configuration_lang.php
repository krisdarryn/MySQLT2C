<?php

class Ps_configuration_lang{


	/* fields */
	private $id_configuration
	private $id_lang
	private $value
	private $date_upd

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_configuration($id_configuration){
		$this->id_configuration = $id_configuration;
	}

	public function setId_lang($id_lang){
		$this->id_lang = $id_lang;
	}

	public function setValue($value){
		$this->value = $value;
	}

	public function setDate_upd($date_upd){
		$this->date_upd = $date_upd;
	}

	/* getters */
	public function getId_configuration($id_configuration){
		 return $this->id_configuration;
	}

	public function getId_lang($id_lang){
		 return $this->id_lang;
	}

	public function getValue($value){
		 return $this->value;
	}

	public function getDate_upd($date_upd){
		 return $this->date_upd;
	}



}