<?php

class Ps_supply_order_history{


	/* fields */
	private $id_supply_order_history
	private $id_supply_order
	private $id_employee
	private $employee_lastname
	private $employee_firstname
	private $id_state
	private $date_add

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_supply_order_history($id_supply_order_history){
		$this->id_supply_order_history = $id_supply_order_history;
	}

	public function setId_supply_order($id_supply_order){
		$this->id_supply_order = $id_supply_order;
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

	public function setId_state($id_state){
		$this->id_state = $id_state;
	}

	public function setDate_add($date_add){
		$this->date_add = $date_add;
	}

	/* getters */
	public function getId_supply_order_history($id_supply_order_history){
		 return $this->id_supply_order_history;
	}

	public function getId_supply_order($id_supply_order){
		 return $this->id_supply_order;
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

	public function getId_state($id_state){
		 return $this->id_state;
	}

	public function getDate_add($date_add){
		 return $this->date_add;
	}



}