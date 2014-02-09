<?php

class Ps_order_invoice_tax{


	/* fields */
	private $id_order_invoice
	private $type
	private $id_tax
	private $amount

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_order_invoice($id_order_invoice){
		$this->id_order_invoice = $id_order_invoice;
	}

	public function setType($type){
		$this->type = $type;
	}

	public function setId_tax($id_tax){
		$this->id_tax = $id_tax;
	}

	public function setAmount($amount){
		$this->amount = $amount;
	}

	/* getters */
	public function getId_order_invoice($id_order_invoice){
		 return $this->id_order_invoice;
	}

	public function getType($type){
		 return $this->type;
	}

	public function getId_tax($id_tax){
		 return $this->id_tax;
	}

	public function getAmount($amount){
		 return $this->amount;
	}



}