<?php

class Ps_cart_rule_product_rule_group{


	/* fields */
	private $id_product_rule_group
	private $id_cart_rule
	private $quantity

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_product_rule_group($id_product_rule_group){
		$this->id_product_rule_group = $id_product_rule_group;
	}

	public function setId_cart_rule($id_cart_rule){
		$this->id_cart_rule = $id_cart_rule;
	}

	public function setQuantity($quantity){
		$this->quantity = $quantity;
	}

	/* getters */
	public function getId_product_rule_group($id_product_rule_group){
		 return $this->id_product_rule_group;
	}

	public function getId_cart_rule($id_cart_rule){
		 return $this->id_cart_rule;
	}

	public function getQuantity($quantity){
		 return $this->quantity;
	}



}