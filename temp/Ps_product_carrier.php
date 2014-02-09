<?php

class Ps_product_carrier{


	/* fields */
	private $id_product
	private $id_carrier_reference
	private $id_shop

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_product($id_product){
		$this->id_product = $id_product;
	}

	public function setId_carrier_reference($id_carrier_reference){
		$this->id_carrier_reference = $id_carrier_reference;
	}

	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
	}

	/* getters */
	public function getId_product($id_product){
		 return $this->id_product;
	}

	public function getId_carrier_reference($id_carrier_reference){
		 return $this->id_carrier_reference;
	}

	public function getId_shop($id_shop){
		 return $this->id_shop;
	}



}