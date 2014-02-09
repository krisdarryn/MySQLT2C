<?php

class Ps_stock{


	/* fields */
	private $id_stock
	private $id_warehouse
	private $id_product
	private $id_product_attribute
	private $reference
	private $ean13
	private $upc
	private $physical_quantity
	private $usable_quantity
	private $price_te

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_stock($id_stock){
		$this->id_stock = $id_stock;
	}

	public function setId_warehouse($id_warehouse){
		$this->id_warehouse = $id_warehouse;
	}

	public function setId_product($id_product){
		$this->id_product = $id_product;
	}

	public function setId_product_attribute($id_product_attribute){
		$this->id_product_attribute = $id_product_attribute;
	}

	public function setReference($reference){
		$this->reference = $reference;
	}

	public function setEan13($ean13){
		$this->ean13 = $ean13;
	}

	public function setUpc($upc){
		$this->upc = $upc;
	}

	public function setPhysical_quantity($physical_quantity){
		$this->physical_quantity = $physical_quantity;
	}

	public function setUsable_quantity($usable_quantity){
		$this->usable_quantity = $usable_quantity;
	}

	public function setPrice_te($price_te){
		$this->price_te = $price_te;
	}

	/* getters */
	public function getId_stock($id_stock){
		 return $this->id_stock;
	}

	public function getId_warehouse($id_warehouse){
		 return $this->id_warehouse;
	}

	public function getId_product($id_product){
		 return $this->id_product;
	}

	public function getId_product_attribute($id_product_attribute){
		 return $this->id_product_attribute;
	}

	public function getReference($reference){
		 return $this->reference;
	}

	public function getEan13($ean13){
		 return $this->ean13;
	}

	public function getUpc($upc){
		 return $this->upc;
	}

	public function getPhysical_quantity($physical_quantity){
		 return $this->physical_quantity;
	}

	public function getUsable_quantity($usable_quantity){
		 return $this->usable_quantity;
	}

	public function getPrice_te($price_te){
		 return $this->price_te;
	}



}