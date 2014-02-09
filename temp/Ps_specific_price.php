<?php

class Ps_specific_price{


	/* fields */
	private $id_specific_price
	private $id_specific_price_rule
	private $id_cart
	private $id_product
	private $id_shop
	private $id_shop_group
	private $id_currency
	private $id_country
	private $id_group
	private $id_customer
	private $id_product_attribute
	private $price
	private $from_quantity
	private $reduction
	private $reduction_type
	private $from
	private $to

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_specific_price($id_specific_price){
		$this->id_specific_price = $id_specific_price;
	}

	public function setId_specific_price_rule($id_specific_price_rule){
		$this->id_specific_price_rule = $id_specific_price_rule;
	}

	public function setId_cart($id_cart){
		$this->id_cart = $id_cart;
	}

	public function setId_product($id_product){
		$this->id_product = $id_product;
	}

	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
	}

	public function setId_shop_group($id_shop_group){
		$this->id_shop_group = $id_shop_group;
	}

	public function setId_currency($id_currency){
		$this->id_currency = $id_currency;
	}

	public function setId_country($id_country){
		$this->id_country = $id_country;
	}

	public function setId_group($id_group){
		$this->id_group = $id_group;
	}

	public function setId_customer($id_customer){
		$this->id_customer = $id_customer;
	}

	public function setId_product_attribute($id_product_attribute){
		$this->id_product_attribute = $id_product_attribute;
	}

	public function setPrice($price){
		$this->price = $price;
	}

	public function setFrom_quantity($from_quantity){
		$this->from_quantity = $from_quantity;
	}

	public function setReduction($reduction){
		$this->reduction = $reduction;
	}

	public function setReduction_type($reduction_type){
		$this->reduction_type = $reduction_type;
	}

	public function setFrom($from){
		$this->from = $from;
	}

	public function setTo($to){
		$this->to = $to;
	}

	/* getters */
	public function getId_specific_price($id_specific_price){
		 return $this->id_specific_price;
	}

	public function getId_specific_price_rule($id_specific_price_rule){
		 return $this->id_specific_price_rule;
	}

	public function getId_cart($id_cart){
		 return $this->id_cart;
	}

	public function getId_product($id_product){
		 return $this->id_product;
	}

	public function getId_shop($id_shop){
		 return $this->id_shop;
	}

	public function getId_shop_group($id_shop_group){
		 return $this->id_shop_group;
	}

	public function getId_currency($id_currency){
		 return $this->id_currency;
	}

	public function getId_country($id_country){
		 return $this->id_country;
	}

	public function getId_group($id_group){
		 return $this->id_group;
	}

	public function getId_customer($id_customer){
		 return $this->id_customer;
	}

	public function getId_product_attribute($id_product_attribute){
		 return $this->id_product_attribute;
	}

	public function getPrice($price){
		 return $this->price;
	}

	public function getFrom_quantity($from_quantity){
		 return $this->from_quantity;
	}

	public function getReduction($reduction){
		 return $this->reduction;
	}

	public function getReduction_type($reduction_type){
		 return $this->reduction_type;
	}

	public function getFrom($from){
		 return $this->from;
	}

	public function getTo($to){
		 return $this->to;
	}



}