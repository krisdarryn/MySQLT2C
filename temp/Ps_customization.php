<?php

class Ps_customization{


	/* fields */
	private $id_customization
	private $id_product_attribute
	private $id_address_delivery
	private $id_cart
	private $id_product
	private $quantity
	private $quantity_refunded
	private $quantity_returned
	private $in_cart

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_customization($id_customization){
		$this->id_customization = $id_customization;
	}

	public function setId_product_attribute($id_product_attribute){
		$this->id_product_attribute = $id_product_attribute;
	}

	public function setId_address_delivery($id_address_delivery){
		$this->id_address_delivery = $id_address_delivery;
	}

	public function setId_cart($id_cart){
		$this->id_cart = $id_cart;
	}

	public function setId_product($id_product){
		$this->id_product = $id_product;
	}

	public function setQuantity($quantity){
		$this->quantity = $quantity;
	}

	public function setQuantity_refunded($quantity_refunded){
		$this->quantity_refunded = $quantity_refunded;
	}

	public function setQuantity_returned($quantity_returned){
		$this->quantity_returned = $quantity_returned;
	}

	public function setIn_cart($in_cart){
		$this->in_cart = $in_cart;
	}

	/* getters */
	public function getId_customization($id_customization){
		 return $this->id_customization;
	}

	public function getId_product_attribute($id_product_attribute){
		 return $this->id_product_attribute;
	}

	public function getId_address_delivery($id_address_delivery){
		 return $this->id_address_delivery;
	}

	public function getId_cart($id_cart){
		 return $this->id_cart;
	}

	public function getId_product($id_product){
		 return $this->id_product;
	}

	public function getQuantity($quantity){
		 return $this->quantity;
	}

	public function getQuantity_refunded($quantity_refunded){
		 return $this->quantity_refunded;
	}

	public function getQuantity_returned($quantity_returned){
		 return $this->quantity_returned;
	}

	public function getIn_cart($in_cart){
		 return $this->in_cart;
	}



}