<?php

class Ps_order_state{


	/* fields */
	private $id_order_state
	private $invoice
	private $send_email
	private $module_name
	private $color
	private $unremovable
	private $hidden
	private $logable
	private $delivery
	private $shipped
	private $paid
	private $deleted

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_order_state($id_order_state){
		$this->id_order_state = $id_order_state;
	}

	public function setInvoice($invoice){
		$this->invoice = $invoice;
	}

	public function setSend_email($send_email){
		$this->send_email = $send_email;
	}

	public function setModule_name($module_name){
		$this->module_name = $module_name;
	}

	public function setColor($color){
		$this->color = $color;
	}

	public function setUnremovable($unremovable){
		$this->unremovable = $unremovable;
	}

	public function setHidden($hidden){
		$this->hidden = $hidden;
	}

	public function setLogable($logable){
		$this->logable = $logable;
	}

	public function setDelivery($delivery){
		$this->delivery = $delivery;
	}

	public function setShipped($shipped){
		$this->shipped = $shipped;
	}

	public function setPaid($paid){
		$this->paid = $paid;
	}

	public function setDeleted($deleted){
		$this->deleted = $deleted;
	}

	/* getters */
	public function getId_order_state($id_order_state){
		 return $this->id_order_state;
	}

	public function getInvoice($invoice){
		 return $this->invoice;
	}

	public function getSend_email($send_email){
		 return $this->send_email;
	}

	public function getModule_name($module_name){
		 return $this->module_name;
	}

	public function getColor($color){
		 return $this->color;
	}

	public function getUnremovable($unremovable){
		 return $this->unremovable;
	}

	public function getHidden($hidden){
		 return $this->hidden;
	}

	public function getLogable($logable){
		 return $this->logable;
	}

	public function getDelivery($delivery){
		 return $this->delivery;
	}

	public function getShipped($shipped){
		 return $this->shipped;
	}

	public function getPaid($paid){
		 return $this->paid;
	}

	public function getDeleted($deleted){
		 return $this->deleted;
	}



}