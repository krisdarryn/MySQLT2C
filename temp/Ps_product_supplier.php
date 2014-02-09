<?php

class Ps_product_supplier{


	/* fields */
	private $id_product_supplier
	private $id_product
	private $id_product_attribute
	private $id_supplier
	private $product_supplier_reference
	private $product_supplier_price_te
	private $id_currency

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_product_supplier($id_product_supplier){
		$this->id_product_supplier = $id_product_supplier;
	}

	public function setId_product($id_product){
		$this->id_product = $id_product;
	}

	public function setId_product_attribute($id_product_attribute){
		$this->id_product_attribute = $id_product_attribute;
	}

	public function setId_supplier($id_supplier){
		$this->id_supplier = $id_supplier;
	}

	public function setProduct_supplier_reference($product_supplier_reference){
		$this->product_supplier_reference = $product_supplier_reference;
	}

	public function setProduct_supplier_price_te($product_supplier_price_te){
		$this->product_supplier_price_te = $product_supplier_price_te;
	}

	public function setId_currency($id_currency){
		$this->id_currency = $id_currency;
	}

	/* getters */
	public function getId_product_supplier($id_product_supplier){
		 return $this->id_product_supplier;
	}

	public function getId_product($id_product){
		 return $this->id_product;
	}

	public function getId_product_attribute($id_product_attribute){
		 return $this->id_product_attribute;
	}

	public function getId_supplier($id_supplier){
		 return $this->id_supplier;
	}

	public function getProduct_supplier_reference($product_supplier_reference){
		 return $this->product_supplier_reference;
	}

	public function getProduct_supplier_price_te($product_supplier_price_te){
		 return $this->product_supplier_price_te;
	}

	public function getId_currency($id_currency){
		 return $this->id_currency;
	}



}