<?php

class Ps_cart_product{


	/* fields */
	private $id_cart
	private $id_product
	private $id_address_delivery
	private $id_shop
	private $id_product_attribute
	private $quantity
	private $date_add

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_cart($id_cart){
		$this->id_cart = $id_cart;
	}

	public function setId_product($id_product){
		$this->id_product = $id_product;
	}

	public function setId_address_delivery($id_address_delivery){
		$this->id_address_delivery = $id_address_delivery;
	}

	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
	}

	public function setId_product_attribute($id_product_attribute){
		$this->id_product_attribute = $id_product_attribute;
	}

	public function setQuantity($quantity){
		$this->quantity = $quantity;
	}

	public function setDate_add($date_add){
		$this->date_add = $date_add;
	}

	/* getters */
	public function getId_cart($id_cart){
		 return $this->id_cart;
	}

	public function getId_product($id_product){
		 return $this->id_product;
	}

	public function getId_address_delivery($id_address_delivery){
		 return $this->id_address_delivery;
	}

	public function getId_shop($id_shop){
		 return $this->id_shop;
	}

	public function getId_product_attribute($id_product_attribute){
		 return $this->id_product_attribute;
	}

	public function getQuantity($quantity){
		 return $this->quantity;
	}

	public function getDate_add($date_add){
		 return $this->date_add;
	}



}