<?php

class Ps_state{


	/* fields */
	private $id_state
	private $id_country
	private $id_zone
	private $name
	private $iso_code
	private $tax_behavior
	private $active

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_state($id_state){
		$this->id_state = $id_state;
	}

	public function setId_country($id_country){
		$this->id_country = $id_country;
	}

	public function setId_zone($id_zone){
		$this->id_zone = $id_zone;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function setIso_code($iso_code){
		$this->iso_code = $iso_code;
	}

	public function setTax_behavior($tax_behavior){
		$this->tax_behavior = $tax_behavior;
	}

	public function setActive($active){
		$this->active = $active;
	}

	/* getters */
	public function getId_state($id_state){
		 return $this->id_state;
	}

	public function getId_country($id_country){
		 return $this->id_country;
	}

	public function getId_zone($id_zone){
		 return $this->id_zone;
	}

	public function getName($name){
		 return $this->name;
	}

	public function getIso_code($iso_code){
		 return $this->iso_code;
	}

	public function getTax_behavior($tax_behavior){
		 return $this->tax_behavior;
	}

	public function getActive($active){
		 return $this->active;
	}



}