<?php

class Ps_supply_order_state{


	/* fields */
	private $id_supply_order_state
	private $delivery_note
	private $editable
	private $receipt_state
	private $pending_receipt
	private $enclosed
	private $color

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_supply_order_state($id_supply_order_state){
		$this->id_supply_order_state = $id_supply_order_state;
	}

	public function setDelivery_note($delivery_note){
		$this->delivery_note = $delivery_note;
	}

	public function setEditable($editable){
		$this->editable = $editable;
	}

	public function setReceipt_state($receipt_state){
		$this->receipt_state = $receipt_state;
	}

	public function setPending_receipt($pending_receipt){
		$this->pending_receipt = $pending_receipt;
	}

	public function setEnclosed($enclosed){
		$this->enclosed = $enclosed;
	}

	public function setColor($color){
		$this->color = $color;
	}

	/* getters */
	public function getId_supply_order_state($id_supply_order_state){
		 return $this->id_supply_order_state;
	}

	public function getDelivery_note($delivery_note){
		 return $this->delivery_note;
	}

	public function getEditable($editable){
		 return $this->editable;
	}

	public function getReceipt_state($receipt_state){
		 return $this->receipt_state;
	}

	public function getPending_receipt($pending_receipt){
		 return $this->pending_receipt;
	}

	public function getEnclosed($enclosed){
		 return $this->enclosed;
	}

	public function getColor($color){
		 return $this->color;
	}



}