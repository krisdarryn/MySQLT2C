<?php

class Ps_feature_value_lang{


	/* fields */
	private $id_feature_value
	private $id_lang
	private $value

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_feature_value($id_feature_value){
		$this->id_feature_value = $id_feature_value;
	}

	public function setId_lang($id_lang){
		$this->id_lang = $id_lang;
	}

	public function setValue($value){
		$this->value = $value;
	}

	/* getters */
	public function getId_feature_value($id_feature_value){
		 return $this->id_feature_value;
	}

	public function getId_lang($id_lang){
		 return $this->id_lang;
	}

	public function getValue($value){
		 return $this->value;
	}



}