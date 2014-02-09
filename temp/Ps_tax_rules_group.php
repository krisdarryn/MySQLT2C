<?php

class Ps_tax_rules_group{


	/* fields */
	private $id_tax_rules_group
	private $name
	private $active

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_tax_rules_group($id_tax_rules_group){
		$this->id_tax_rules_group = $id_tax_rules_group;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function setActive($active){
		$this->active = $active;
	}

	/* getters */
	public function getId_tax_rules_group($id_tax_rules_group){
		 return $this->id_tax_rules_group;
	}

	public function getName($name){
		 return $this->name;
	}

	public function getActive($active){
		 return $this->active;
	}



}