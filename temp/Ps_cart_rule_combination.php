<?php

class Ps_cart_rule_combination{


	/* fields */
	private $id_cart_rule_1
	private $id_cart_rule_2

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_cart_rule_1($id_cart_rule_1){
		$this->id_cart_rule_1 = $id_cart_rule_1;
	}

	public function setId_cart_rule_2($id_cart_rule_2){
		$this->id_cart_rule_2 = $id_cart_rule_2;
	}

	/* getters */
	public function getId_cart_rule_1($id_cart_rule_1){
		 return $this->id_cart_rule_1;
	}

	public function getId_cart_rule_2($id_cart_rule_2){
		 return $this->id_cart_rule_2;
	}



}