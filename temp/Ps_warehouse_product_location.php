<?php

class Ps_warehouse_product_location{


	/* fields */
	private $id_warehouse_product_location
	private $id_product
	private $id_product_attribute
	private $id_warehouse
	private $location

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_warehouse_product_location($id_warehouse_product_location){
		$this->id_warehouse_product_location = $id_warehouse_product_location;
	}

	public function setId_product($id_product){
		$this->id_product = $id_product;
	}

	public function setId_product_attribute($id_product_attribute){
		$this->id_product_attribute = $id_product_attribute;
	}

	public function setId_warehouse($id_warehouse){
		$this->id_warehouse = $id_warehouse;
	}

	public function setLocation($location){
		$this->location = $location;
	}

	/* getters */
	public function getId_warehouse_product_location($id_warehouse_product_location){
		 return $this->id_warehouse_product_location;
	}

	public function getId_product($id_product){
		 return $this->id_product;
	}

	public function getId_product_attribute($id_product_attribute){
		 return $this->id_product_attribute;
	}

	public function getId_warehouse($id_warehouse){
		 return $this->id_warehouse;
	}

	public function getLocation($location){
		 return $this->location;
	}



}