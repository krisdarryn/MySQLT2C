<?php

class Ps_cart_rule_carrier{


	/* fields */
	private $id_cart_rule
	private $id_carrier

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_cart_rule($id_cart_rule){
		$this->id_cart_rule = $id_cart_rule;
	}

	public function setId_carrier($id_carrier){
		$this->id_carrier = $id_carrier;
	}

	/* getters */
	public function getId_cart_rule($id_cart_rule){
		 return $this->id_cart_rule;
	}

	public function getId_carrier($id_carrier){
		 return $this->id_carrier;
	}



}