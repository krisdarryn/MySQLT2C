<?php

class Ps_supply_order_detail{


	/* fields */
	private $id_supply_order_detail
	private $id_supply_order
	private $id_currency
	private $id_product
	private $id_product_attribute
	private $reference
	private $supplier_reference
	private $name
	private $ean13
	private $upc
	private $exchange_rate
	private $unit_price_te
	private $quantity_expected
	private $quantity_received
	private $price_te
	private $discount_rate
	private $discount_value_te
	private $price_with_discount_te
	private $tax_rate
	private $tax_value
	private $price_ti
	private $tax_value_with_order_discount
	private $price_with_order_discount_te

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_supply_order_detail($id_supply_order_detail){
		$this->id_supply_order_detail = $id_supply_order_detail;
	}

	public function setId_supply_order($id_supply_order){
		$this->id_supply_order = $id_supply_order;
	}

	public function setId_currency($id_currency){
		$this->id_currency = $id_currency;
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

	public function setSupplier_reference($supplier_reference){
		$this->supplier_reference = $supplier_reference;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function setEan13($ean13){
		$this->ean13 = $ean13;
	}

	public function setUpc($upc){
		$this->upc = $upc;
	}

	public function setExchange_rate($exchange_rate){
		$this->exchange_rate = $exchange_rate;
	}

	public function setUnit_price_te($unit_price_te){
		$this->unit_price_te = $unit_price_te;
	}

	public function setQuantity_expected($quantity_expected){
		$this->quantity_expected = $quantity_expected;
	}

	public function setQuantity_received($quantity_received){
		$this->quantity_received = $quantity_received;
	}

	public function setPrice_te($price_te){
		$this->price_te = $price_te;
	}

	public function setDiscount_rate($discount_rate){
		$this->discount_rate = $discount_rate;
	}

	public function setDiscount_value_te($discount_value_te){
		$this->discount_value_te = $discount_value_te;
	}

	public function setPrice_with_discount_te($price_with_discount_te){
		$this->price_with_discount_te = $price_with_discount_te;
	}

	public function setTax_rate($tax_rate){
		$this->tax_rate = $tax_rate;
	}

	public function setTax_value($tax_value){
		$this->tax_value = $tax_value;
	}

	public function setPrice_ti($price_ti){
		$this->price_ti = $price_ti;
	}

	public function setTax_value_with_order_discount($tax_value_with_order_discount){
		$this->tax_value_with_order_discount = $tax_value_with_order_discount;
	}

	public function setPrice_with_order_discount_te($price_with_order_discount_te){
		$this->price_with_order_discount_te = $price_with_order_discount_te;
	}

	/* getters */
	public function getId_supply_order_detail($id_supply_order_detail){
		 return $this->id_supply_order_detail;
	}

	public function getId_supply_order($id_supply_order){
		 return $this->id_supply_order;
	}

	public function getId_currency($id_currency){
		 return $this->id_currency;
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

	public function getSupplier_reference($supplier_reference){
		 return $this->supplier_reference;
	}

	public function getName($name){
		 return $this->name;
	}

	public function getEan13($ean13){
		 return $this->ean13;
	}

	public function getUpc($upc){
		 return $this->upc;
	}

	public function getExchange_rate($exchange_rate){
		 return $this->exchange_rate;
	}

	public function getUnit_price_te($unit_price_te){
		 return $this->unit_price_te;
	}

	public function getQuantity_expected($quantity_expected){
		 return $this->quantity_expected;
	}

	public function getQuantity_received($quantity_received){
		 return $this->quantity_received;
	}

	public function getPrice_te($price_te){
		 return $this->price_te;
	}

	public function getDiscount_rate($discount_rate){
		 return $this->discount_rate;
	}

	public function getDiscount_value_te($discount_value_te){
		 return $this->discount_value_te;
	}

	public function getPrice_with_discount_te($price_with_discount_te){
		 return $this->price_with_discount_te;
	}

	public function getTax_rate($tax_rate){
		 return $this->tax_rate;
	}

	public function getTax_value($tax_value){
		 return $this->tax_value;
	}

	public function getPrice_ti($price_ti){
		 return $this->price_ti;
	}

	public function getTax_value_with_order_discount($tax_value_with_order_discount){
		 return $this->tax_value_with_order_discount;
	}

	public function getPrice_with_order_discount_te($price_with_order_discount_te){
		 return $this->price_with_order_discount_te;
	}



}