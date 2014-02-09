<?php

class Ps_tax_rules_group_shop{


	/* fields */
	private $id_tax_rules_group
	private $id_shop

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_tax_rules_group($id_tax_rules_group){
		$this->id_tax_rules_group = $id_tax_rules_group;
	}

	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
	}

	/* getters */
	public function getId_tax_rules_group($id_tax_rules_group){
		 return $this->id_tax_rules_group;
	}

	public function getId_shop($id_shop){
		 return $this->id_shop;
	}



}