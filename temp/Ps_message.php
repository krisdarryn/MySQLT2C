<?php

class Ps_message{


	/* fields */
	private $id_message
	private $id_cart
	private $id_customer
	private $id_employee
	private $id_order
	private $message
	private $private
	private $date_add

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_message($id_message){
		$this->id_message = $id_message;
	}

	public function setId_cart($id_cart){
		$this->id_cart = $id_cart;
	}

	public function setId_customer($id_customer){
		$this->id_customer = $id_customer;
	}

	public function setId_employee($id_employee){
		$this->id_employee = $id_employee;
	}

	public function setId_order($id_order){
		$this->id_order = $id_order;
	}

	public function setMessage($message){
		$this->message = $message;
	}

	public function setPrivate($private){
		$this->private = $private;
	}

	public function setDate_add($date_add){
		$this->date_add = $date_add;
	}

	/* getters */
	public function getId_message($id_message){
		 return $this->id_message;
	}

	public function getId_cart($id_cart){
		 return $this->id_cart;
	}

	public function getId_customer($id_customer){
		 return $this->id_customer;
	}

	public function getId_employee($id_employee){
		 return $this->id_employee;
	}

	public function getId_order($id_order){
		 return $this->id_order;
	}

	public function getMessage($message){
		 return $this->message;
	}

	public function getPrivate($private){
		 return $this->private;
	}

	public function getDate_add($date_add){
		 return $this->date_add;
	}



}