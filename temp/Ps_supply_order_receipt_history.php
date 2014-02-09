<?php

class Ps_supply_order_receipt_history{


	/* fields */
	private $id_supply_order_receipt_history
	private $id_supply_order_detail
	private $id_employee
	private $employee_lastname
	private $employee_firstname
	private $id_supply_order_state
	private $quantity
	private $date_add

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_supply_order_receipt_history($id_supply_order_receipt_history){
		$this->id_supply_order_receipt_history = $id_supply_order_receipt_history;
	}

	public function setId_supply_order_detail($id_supply_order_detail){
		$this->id_supply_order_detail = $id_supply_order_detail;
	}

	public function setId_employee($id_employee){
		$this->id_employee = $id_employee;
	}

	public function setEmployee_lastname($employee_lastname){
		$this->employee_lastname = $employee_lastname;
	}

	public function setEmployee_firstname($employee_firstname){
		$this->employee_firstname = $employee_firstname;
	}

	public function setId_supply_order_state($id_supply_order_state){
		$this->id_supply_order_state = $id_supply_order_state;
	}

	public function setQuantity($quantity){
		$this->quantity = $quantity;
	}

	public function setDate_add($date_add){
		$this->date_add = $date_add;
	}

	/* getters */
	public function getId_supply_order_receipt_history($id_supply_order_receipt_history){
		 return $this->id_supply_order_receipt_history;
	}

	public function getId_supply_order_detail($id_supply_order_detail){
		 return $this->id_supply_order_detail;
	}

	public function getId_employee($id_employee){
		 return $this->id_employee;
	}

	public function getEmployee_lastname($employee_lastname){
		 return $this->employee_lastname;
	}

	public function getEmployee_firstname($employee_firstname){
		 return $this->employee_firstname;
	}

	public function getId_supply_order_state($id_supply_order_state){
		 return $this->id_supply_order_state;
	}

	public function getQuantity($quantity){
		 return $this->quantity;
	}

	public function getDate_add($date_add){
		 return $this->date_add;
	}



}