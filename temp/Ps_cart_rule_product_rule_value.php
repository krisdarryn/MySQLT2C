<?php

class Ps_cart_rule_product_rule_value{


	/* fields */
	private $id_product_rule
	private $id_item

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_product_rule($id_product_rule){
		$this->id_product_rule = $id_product_rule;
	}

	public function setId_item($id_item){
		$this->id_item = $id_item;
	}

	/* getters */
	public function getId_product_rule($id_product_rule){
		 return $this->id_product_rule;
	}

	public function getId_item($id_item){
		 return $this->id_item;
	}



}