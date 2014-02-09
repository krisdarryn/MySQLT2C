<?php

class Ps_product_country_tax{


	/* fields */
	private $id_product
	private $id_country
	private $id_tax

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_product($id_product){
		$this->id_product = $id_product;
	}

	public function setId_country($id_country){
		$this->id_country = $id_country;
	}

	public function setId_tax($id_tax){
		$this->id_tax = $id_tax;
	}

	/* getters */
	public function getId_product($id_product){
		 return $this->id_product;
	}

	public function getId_country($id_country){
		 return $this->id_country;
	}

	public function getId_tax($id_tax){
		 return $this->id_tax;
	}



}