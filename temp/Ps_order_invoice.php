<?php

class Ps_order_invoice{


	/* fields */
	private $id_order_invoice
	private $id_order
	private $number
	private $delivery_number
	private $delivery_date
	private $total_discount_tax_excl
	private $total_discount_tax_incl
	private $total_paid_tax_excl
	private $total_paid_tax_incl
	private $total_products
	private $total_products_wt
	private $total_shipping_tax_excl
	private $total_shipping_tax_incl
	private $shipping_tax_computation_method
	private $total_wrapping_tax_excl
	private $total_wrapping_tax_incl
	private $note
	private $date_add

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_order_invoice($id_order_invoice){
		$this->id_order_invoice = $id_order_invoice;
	}

	public function setId_order($id_order){
		$this->id_order = $id_order;
	}

	public function setNumber($number){
		$this->number = $number;
	}

	public function setDelivery_number($delivery_number){
		$this->delivery_number = $delivery_number;
	}

	public function setDelivery_date($delivery_date){
		$this->delivery_date = $delivery_date;
	}

	public function setTotal_discount_tax_excl($total_discount_tax_excl){
		$this->total_discount_tax_excl = $total_discount_tax_excl;
	}

	public function setTotal_discount_tax_incl($total_discount_tax_incl){
		$this->total_discount_tax_incl = $total_discount_tax_incl;
	}

	public function setTotal_paid_tax_excl($total_paid_tax_excl){
		$this->total_paid_tax_excl = $total_paid_tax_excl;
	}

	public function setTotal_paid_tax_incl($total_paid_tax_incl){
		$this->total_paid_tax_incl = $total_paid_tax_incl;
	}

	public function setTotal_products($total_products){
		$this->total_products = $total_products;
	}

	public function setTotal_products_wt($total_products_wt){
		$this->total_products_wt = $total_products_wt;
	}

	public function setTotal_shipping_tax_excl($total_shipping_tax_excl){
		$this->total_shipping_tax_excl = $total_shipping_tax_excl;
	}

	public function setTotal_shipping_tax_incl($total_shipping_tax_incl){
		$this->total_shipping_tax_incl = $total_shipping_tax_incl;
	}

	public function setShipping_tax_computation_method($shipping_tax_computation_method){
		$this->shipping_tax_computation_method = $shipping_tax_computation_method;
	}

	public function setTotal_wrapping_tax_excl($total_wrapping_tax_excl){
		$this->total_wrapping_tax_excl = $total_wrapping_tax_excl;
	}

	public function setTotal_wrapping_tax_incl($total_wrapping_tax_incl){
		$this->total_wrapping_tax_incl = $total_wrapping_tax_incl;
	}

	public function setNote($note){
		$this->note = $note;
	}

	public function setDate_add($date_add){
		$this->date_add = $date_add;
	}

	/* getters */
	public function getId_order_invoice($id_order_invoice){
		 return $this->id_order_invoice;
	}

	public function getId_order($id_order){
		 return $this->id_order;
	}

	public function getNumber($number){
		 return $this->number;
	}

	public function getDelivery_number($delivery_number){
		 return $this->delivery_number;
	}

	public function getDelivery_date($delivery_date){
		 return $this->delivery_date;
	}

	public function getTotal_discount_tax_excl($total_discount_tax_excl){
		 return $this->total_discount_tax_excl;
	}

	public function getTotal_discount_tax_incl($total_discount_tax_incl){
		 return $this->total_discount_tax_incl;
	}

	public function getTotal_paid_tax_excl($total_paid_tax_excl){
		 return $this->total_paid_tax_excl;
	}

	public function getTotal_paid_tax_incl($total_paid_tax_incl){
		 return $this->total_paid_tax_incl;
	}

	public function getTotal_products($total_products){
		 return $this->total_products;
	}

	public function getTotal_products_wt($total_products_wt){
		 return $this->total_products_wt;
	}

	public function getTotal_shipping_tax_excl($total_shipping_tax_excl){
		 return $this->total_shipping_tax_excl;
	}

	public function getTotal_shipping_tax_incl($total_shipping_tax_incl){
		 return $this->total_shipping_tax_incl;
	}

	public function getShipping_tax_computation_method($shipping_tax_computation_method){
		 return $this->shipping_tax_computation_method;
	}

	public function getTotal_wrapping_tax_excl($total_wrapping_tax_excl){
		 return $this->total_wrapping_tax_excl;
	}

	public function getTotal_wrapping_tax_incl($total_wrapping_tax_incl){
		 return $this->total_wrapping_tax_incl;
	}

	public function getNote($note){
		 return $this->note;
	}

	public function getDate_add($date_add){
		 return $this->date_add;
	}



}