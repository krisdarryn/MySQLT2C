<?php

class Ps_order_slip_detail{


	/* fields */
	private $id_order_slip
	private $id_order_detail
	private $product_quantity
	private $amount_tax_excl
	private $amount_tax_incl

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_order_slip($id_order_slip){
		$this->id_order_slip = $id_order_slip;
	}

	public function setId_order_detail($id_order_detail){
		$this->id_order_detail = $id_order_detail;
	}

	public function setProduct_quantity($product_quantity){
		$this->product_quantity = $product_quantity;
	}

	public function setAmount_tax_excl($amount_tax_excl){
		$this->amount_tax_excl = $amount_tax_excl;
	}

	public function setAmount_tax_incl($amount_tax_incl){
		$this->amount_tax_incl = $amount_tax_incl;
	}

	/* getters */
	public function getId_order_slip($id_order_slip){
		 return $this->id_order_slip;
	}

	public function getId_order_detail($id_order_detail){
		 return $this->id_order_detail;
	}

	public function getProduct_quantity($product_quantity){
		 return $this->product_quantity;
	}

	public function getAmount_tax_excl($amount_tax_excl){
		 return $this->amount_tax_excl;
	}

	public function getAmount_tax_incl($amount_tax_incl){
		 return $this->amount_tax_incl;
	}



}