<?php

class Ps_order_carrier{


	/* fields */
	private $id_order_carrier
	private $id_order
	private $id_carrier
	private $id_order_invoice
	private $weight
	private $shipping_cost_tax_excl
	private $shipping_cost_tax_incl
	private $tracking_number
	private $date_add

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_order_carrier($id_order_carrier){
		$this->id_order_carrier = $id_order_carrier;
	}

	public function setId_order($id_order){
		$this->id_order = $id_order;
	}

	public function setId_carrier($id_carrier){
		$this->id_carrier = $id_carrier;
	}

	public function setId_order_invoice($id_order_invoice){
		$this->id_order_invoice = $id_order_invoice;
	}

	public function setWeight($weight){
		$this->weight = $weight;
	}

	public function setShipping_cost_tax_excl($shipping_cost_tax_excl){
		$this->shipping_cost_tax_excl = $shipping_cost_tax_excl;
	}

	public function setShipping_cost_tax_incl($shipping_cost_tax_incl){
		$this->shipping_cost_tax_incl = $shipping_cost_tax_incl;
	}

	public function setTracking_number($tracking_number){
		$this->tracking_number = $tracking_number;
	}

	public function setDate_add($date_add){
		$this->date_add = $date_add;
	}

	/* getters */
	public function getId_order_carrier($id_order_carrier){
		 return $this->id_order_carrier;
	}

	public function getId_order($id_order){
		 return $this->id_order;
	}

	public function getId_carrier($id_carrier){
		 return $this->id_carrier;
	}

	public function getId_order_invoice($id_order_invoice){
		 return $this->id_order_invoice;
	}

	public function getWeight($weight){
		 return $this->weight;
	}

	public function getShipping_cost_tax_excl($shipping_cost_tax_excl){
		 return $this->shipping_cost_tax_excl;
	}

	public function getShipping_cost_tax_incl($shipping_cost_tax_incl){
		 return $this->shipping_cost_tax_incl;
	}

	public function getTracking_number($tracking_number){
		 return $this->tracking_number;
	}

	public function getDate_add($date_add){
		 return $this->date_add;
	}



}