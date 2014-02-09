<?php

class Ps_cart_rule_product_rule{


	/* fields */
	private $id_product_rule
	private $id_product_rule_group
	private $type

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_product_rule($id_product_rule){
		$this->id_product_rule = $id_product_rule;
	}

	public function setId_product_rule_group($id_product_rule_group){
		$this->id_product_rule_group = $id_product_rule_group;
	}

	public function setType($type){
		$this->type = $type;
	}

	/* getters */
	public function getId_product_rule($id_product_rule){
		 return $this->id_product_rule;
	}

	public function getId_product_rule_group($id_product_rule_group){
		 return $this->id_product_rule_group;
	}

	public function getType($type){
		 return $this->type;
	}



}