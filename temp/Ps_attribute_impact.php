<?php

class Ps_attribute_impact{


	/* fields */
	private $id_attribute_impact
	private $id_product
	private $id_attribute
	private $weight
	private $price

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_attribute_impact($id_attribute_impact){
		$this->id_attribute_impact = $id_attribute_impact;
	}

	public function setId_product($id_product){
		$this->id_product = $id_product;
	}

	public function setId_attribute($id_attribute){
		$this->id_attribute = $id_attribute;
	}

	public function setWeight($weight){
		$this->weight = $weight;
	}

	public function setPrice($price){
		$this->price = $price;
	}

	/* getters */
	public function getId_attribute_impact($id_attribute_impact){
		 return $this->id_attribute_impact;
	}

	public function getId_product($id_product){
		 return $this->id_product;
	}

	public function getId_attribute($id_attribute){
		 return $this->id_attribute;
	}

	public function getWeight($weight){
		 return $this->weight;
	}

	public function getPrice($price){
		 return $this->price;
	}



}