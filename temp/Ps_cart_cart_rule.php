<?php

class Ps_cart_cart_rule{


	/* fields */
	private $id_cart
	private $id_cart_rule

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_cart($id_cart){
		$this->id_cart = $id_cart;
	}

	public function setId_cart_rule($id_cart_rule){
		$this->id_cart_rule = $id_cart_rule;
	}

	/* getters */
	public function getId_cart($id_cart){
		 return $this->id_cart;
	}

	public function getId_cart_rule($id_cart_rule){
		 return $this->id_cart_rule;
	}



}