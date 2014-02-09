<?php

class Ps_cart_rule_country{


	/* fields */
	private $id_cart_rule
	private $id_country

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_cart_rule($id_cart_rule){
		$this->id_cart_rule = $id_cart_rule;
	}

	public function setId_country($id_country){
		$this->id_country = $id_country;
	}

	/* getters */
	public function getId_cart_rule($id_cart_rule){
		 return $this->id_cart_rule;
	}

	public function getId_country($id_country){
		 return $this->id_country;
	}



}