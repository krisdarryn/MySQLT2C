<?php

class Ps_cart_rule_group{


	/* fields */
	private $id_cart_rule
	private $id_group

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_cart_rule($id_cart_rule){
		$this->id_cart_rule = $id_cart_rule;
	}

	public function setId_group($id_group){
		$this->id_group = $id_group;
	}

	/* getters */
	public function getId_cart_rule($id_cart_rule){
		 return $this->id_cart_rule;
	}

	public function getId_group($id_group){
		 return $this->id_group;
	}



}