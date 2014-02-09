<?php

class Ps_order_slip{


	/* fields */
	private $id_order_slip
	private $conversion_rate
	private $id_customer
	private $id_order
	private $shipping_cost
	private $amount
	private $shipping_cost_amount
	private $partial
	private $date_add
	private $date_upd

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_order_slip($id_order_slip){
		$this->id_order_slip = $id_order_slip;
	}

	public function setConversion_rate($conversion_rate){
		$this->conversion_rate = $conversion_rate;
	}

	public function setId_customer($id_customer){
		$this->id_customer = $id_customer;
	}

	public function setId_order($id_order){
		$this->id_order = $id_order;
	}

	public function setShipping_cost($shipping_cost){
		$this->shipping_cost = $shipping_cost;
	}

	public function setAmount($amount){
		$this->amount = $amount;
	}

	public function setShipping_cost_amount($shipping_cost_amount){
		$this->shipping_cost_amount = $shipping_cost_amount;
	}

	public function setPartial($partial){
		$this->partial = $partial;
	}

	public function setDate_add($date_add){
		$this->date_add = $date_add;
	}

	public function setDate_upd($date_upd){
		$this->date_upd = $date_upd;
	}

	/* getters */
	public function getId_order_slip($id_order_slip){
		 return $this->id_order_slip;
	}

	public function getConversion_rate($conversion_rate){
		 return $this->conversion_rate;
	}

	public function getId_customer($id_customer){
		 return $this->id_customer;
	}

	public function getId_order($id_order){
		 return $this->id_order;
	}

	public function getShipping_cost($shipping_cost){
		 return $this->shipping_cost;
	}

	public function getAmount($amount){
		 return $this->amount;
	}

	public function getShipping_cost_amount($shipping_cost_amount){
		 return $this->shipping_cost_amount;
	}

	public function getPartial($partial){
		 return $this->partial;
	}

	public function getDate_add($date_add){
		 return $this->date_add;
	}

	public function getDate_upd($date_upd){
		 return $this->date_upd;
	}



}