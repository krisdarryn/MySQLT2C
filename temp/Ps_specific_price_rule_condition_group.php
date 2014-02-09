<?php

class Ps_specific_price_rule_condition_group{


	/* fields */
	private $id_specific_price_rule_condition_group
	private $id_specific_price_rule

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_specific_price_rule_condition_group($id_specific_price_rule_condition_group){
		$this->id_specific_price_rule_condition_group = $id_specific_price_rule_condition_group;
	}

	public function setId_specific_price_rule($id_specific_price_rule){
		$this->id_specific_price_rule = $id_specific_price_rule;
	}

	/* getters */
	public function getId_specific_price_rule_condition_group($id_specific_price_rule_condition_group){
		 return $this->id_specific_price_rule_condition_group;
	}

	public function getId_specific_price_rule($id_specific_price_rule){
		 return $this->id_specific_price_rule;
	}



}