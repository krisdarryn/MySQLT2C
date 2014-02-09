<?php

class Ps_carrier_tax_rules_group_shop{


	/* fields */
	private $id_carrier
	private $id_tax_rules_group
	private $id_shop

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_carrier($id_carrier){
		$this->id_carrier = $id_carrier;
	}

	public function setId_tax_rules_group($id_tax_rules_group){
		$this->id_tax_rules_group = $id_tax_rules_group;
	}

	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
	}

	/* getters */
	public function getId_carrier($id_carrier){
		 return $this->id_carrier;
	}

	public function getId_tax_rules_group($id_tax_rules_group){
		 return $this->id_tax_rules_group;
	}

	public function getId_shop($id_shop){
		 return $this->id_shop;
	}



}