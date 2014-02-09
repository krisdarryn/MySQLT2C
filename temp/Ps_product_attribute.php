<?php

class Ps_product_attribute{


	/* fields */
	private $id_product_attribute
	private $id_product
	private $reference
	private $supplier_reference
	private $location
	private $ean13
	private $upc
	private $wholesale_price
	private $price
	private $ecotax
	private $quantity
	private $weight
	private $unit_price_impact
	private $default_on
	private $minimal_quantity
	private $available_date

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_product_attribute($id_product_attribute){
		$this->id_product_attribute = $id_product_attribute;
	}

	public function setId_product($id_product){
		$this->id_product = $id_product;
	}

	public function setReference($reference){
		$this->reference = $reference;
	}

	public function setSupplier_reference($supplier_reference){
		$this->supplier_reference = $supplier_reference;
	}

	public function setLocation($location){
		$this->location = $location;
	}

	public function setEan13($ean13){
		$this->ean13 = $ean13;
	}

	public function setUpc($upc){
		$this->upc = $upc;
	}

	public function setWholesale_price($wholesale_price){
		$this->wholesale_price = $wholesale_price;
	}

	public function setPrice($price){
		$this->price = $price;
	}

	public function setEcotax($ecotax){
		$this->ecotax = $ecotax;
	}

	public function setQuantity($quantity){
		$this->quantity = $quantity;
	}

	public function setWeight($weight){
		$this->weight = $weight;
	}

	public function setUnit_price_impact($unit_price_impact){
		$this->unit_price_impact = $unit_price_impact;
	}

	public function setDefault_on($default_on){
		$this->default_on = $default_on;
	}

	public function setMinimal_quantity($minimal_quantity){
		$this->minimal_quantity = $minimal_quantity;
	}

	public function setAvailable_date($available_date){
		$this->available_date = $available_date;
	}

	/* getters */
	public function getId_product_attribute($id_product_attribute){
		 return $this->id_product_attribute;
	}

	public function getId_product($id_product){
		 return $this->id_product;
	}

	public function getReference($reference){
		 return $this->reference;
	}

	public function getSupplier_reference($supplier_reference){
		 return $this->supplier_reference;
	}

	public function getLocation($location){
		 return $this->location;
	}

	public function getEan13($ean13){
		 return $this->ean13;
	}

	public function getUpc($upc){
		 return $this->upc;
	}

	public function getWholesale_price($wholesale_price){
		 return $this->wholesale_price;
	}

	public function getPrice($price){
		 return $this->price;
	}

	public function getEcotax($ecotax){
		 return $this->ecotax;
	}

	public function getQuantity($quantity){
		 return $this->quantity;
	}

	public function getWeight($weight){
		 return $this->weight;
	}

	public function getUnit_price_impact($unit_price_impact){
		 return $this->unit_price_impact;
	}

	public function getDefault_on($default_on){
		 return $this->default_on;
	}

	public function getMinimal_quantity($minimal_quantity){
		 return $this->minimal_quantity;
	}

	public function getAvailable_date($available_date){
		 return $this->available_date;
	}



}