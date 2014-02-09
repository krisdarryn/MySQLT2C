<?php

class Ps_order_invoice_payment{


	/* fields */
	private $id_order_invoice
	private $id_order_payment
	private $id_order

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_order_invoice($id_order_invoice){
		$this->id_order_invoice = $id_order_invoice;
	}

	public function setId_order_payment($id_order_payment){
		$this->id_order_payment = $id_order_payment;
	}

	public function setId_order($id_order){
		$this->id_order = $id_order;
	}

	/* getters */
	public function getId_order_invoice($id_order_invoice){
		 return $this->id_order_invoice;
	}

	public function getId_order_payment($id_order_payment){
		 return $this->id_order_payment;
	}

	public function getId_order($id_order){
		 return $this->id_order;
	}



}