<?php

class Ps_tax_rule{


	/* fields */
	private $id_tax_rule
	private $id_tax_rules_group
	private $id_country
	private $id_state
	private $zipcode_from
	private $zipcode_to
	private $id_tax
	private $behavior
	private $description

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_tax_rule($id_tax_rule){
		$this->id_tax_rule = $id_tax_rule;
	}

	public function setId_tax_rules_group($id_tax_rules_group){
		$this->id_tax_rules_group = $id_tax_rules_group;
	}

	public function setId_country($id_country){
		$this->id_country = $id_country;
	}

	public function setId_state($id_state){
		$this->id_state = $id_state;
	}

	public function setZipcode_from($zipcode_from){
		$this->zipcode_from = $zipcode_from;
	}

	public function setZipcode_to($zipcode_to){
		$this->zipcode_to = $zipcode_to;
	}

	public function setId_tax($id_tax){
		$this->id_tax = $id_tax;
	}

	public function setBehavior($behavior){
		$this->behavior = $behavior;
	}

	public function setDescription($description){
		$this->description = $description;
	}

	/* getters */
	public function getId_tax_rule($id_tax_rule){
		 return $this->id_tax_rule;
	}

	public function getId_tax_rules_group($id_tax_rules_group){
		 return $this->id_tax_rules_group;
	}

	public function getId_country($id_country){
		 return $this->id_country;
	}

	public function getId_state($id_state){
		 return $this->id_state;
	}

	public function getZipcode_from($zipcode_from){
		 return $this->zipcode_from;
	}

	public function getZipcode_to($zipcode_to){
		 return $this->zipcode_to;
	}

	public function getId_tax($id_tax){
		 return $this->id_tax;
	}

	public function getBehavior($behavior){
		 return $this->behavior;
	}

	public function getDescription($description){
		 return $this->description;
	}



}