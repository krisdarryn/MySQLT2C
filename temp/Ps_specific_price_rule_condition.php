<?php

class Ps_specific_price_rule_condition{


	/* fields */
	private $id_specific_price_rule_condition
	private $id_specific_price_rule_condition_group
	private $type
	private $value

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_specific_price_rule_condition($id_specific_price_rule_condition){
		$this->id_specific_price_rule_condition = $id_specific_price_rule_condition;
	}

	public function setId_specific_price_rule_condition_group($id_specific_price_rule_condition_group){
		$this->id_specific_price_rule_condition_group = $id_specific_price_rule_condition_group;
	}

	public function setType($type){
		$this->type = $type;
	}

	public function setValue($value){
		$this->value = $value;
	}

	/* getters */
	public function getId_specific_price_rule_condition($id_specific_price_rule_condition){
		 return $this->id_specific_price_rule_condition;
	}

	public function getId_specific_price_rule_condition_group($id_specific_price_rule_condition_group){
		 return $this->id_specific_price_rule_condition_group;
	}

	public function getType($type){
		 return $this->type;
	}

	public function getValue($value){
		 return $this->value;
	}



}