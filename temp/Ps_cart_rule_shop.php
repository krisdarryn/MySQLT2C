<?php

class Ps_cart_rule_shop{


	/* fields */
	private $id_cart_rule
	private $id_shop

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_cart_rule($id_cart_rule){
		$this->id_cart_rule = $id_cart_rule;
	}

	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
	}

	/* getters */
	public function getId_cart_rule($id_cart_rule){
		 return $this->id_cart_rule;
	}

	public function getId_shop($id_shop){
		 return $this->id_shop;
	}



}