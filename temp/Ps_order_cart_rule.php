<?php

class Ps_order_cart_rule{


	/* fields */
	private $id_order_cart_rule
	private $id_order
	private $id_cart_rule
	private $id_order_invoice
	private $name
	private $value
	private $value_tax_excl
	private $free_shipping

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_order_cart_rule($id_order_cart_rule){
		$this->id_order_cart_rule = $id_order_cart_rule;
	}

	public function setId_order($id_order){
		$this->id_order = $id_order;
	}

	public function setId_cart_rule($id_cart_rule){
		$this->id_cart_rule = $id_cart_rule;
	}

	public function setId_order_invoice($id_order_invoice){
		$this->id_order_invoice = $id_order_invoice;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function setValue($value){
		$this->value = $value;
	}

	public function setValue_tax_excl($value_tax_excl){
		$this->value_tax_excl = $value_tax_excl;
	}

	public function setFree_shipping($free_shipping){
		$this->free_shipping = $free_shipping;
	}

	/* getters */
	public function getId_order_cart_rule($id_order_cart_rule){
		 return $this->id_order_cart_rule;
	}

	public function getId_order($id_order){
		 return $this->id_order;
	}

	public function getId_cart_rule($id_cart_rule){
		 return $this->id_cart_rule;
	}

	public function getId_order_invoice($id_order_invoice){
		 return $this->id_order_invoice;
	}

	public function getName($name){
		 return $this->name;
	}

	public function getValue($value){
		 return $this->value;
	}

	public function getValue_tax_excl($value_tax_excl){
		 return $this->value_tax_excl;
	}

	public function getFree_shipping($free_shipping){
		 return $this->free_shipping;
	}



}