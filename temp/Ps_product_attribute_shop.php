<?php

class Ps_product_attribute_shop{


	/* fields */
	private $id_product_attribute
	private $id_shop
	private $wholesale_price
	private $price
	private $ecotax
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

	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
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

	public function getId_shop($id_shop){
		 return $this->id_shop;
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