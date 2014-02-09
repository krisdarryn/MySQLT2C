<?php

class Ps_stock_mvt{


	/* fields */
	private $id_stock_mvt
	private $id_stock
	private $id_order
	private $id_supply_order
	private $id_stock_mvt_reason
	private $id_employee
	private $employee_lastname
	private $employee_firstname
	private $physical_quantity
	private $date_add
	private $sign
	private $price_te
	private $last_wa
	private $current_wa
	private $referer

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_stock_mvt($id_stock_mvt){
		$this->id_stock_mvt = $id_stock_mvt;
	}

	public function setId_stock($id_stock){
		$this->id_stock = $id_stock;
	}

	public function setId_order($id_order){
		$this->id_order = $id_order;
	}

	public function setId_supply_order($id_supply_order){
		$this->id_supply_order = $id_supply_order;
	}

	public function setId_stock_mvt_reason($id_stock_mvt_reason){
		$this->id_stock_mvt_reason = $id_stock_mvt_reason;
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

	public function setPhysical_quantity($physical_quantity){
		$this->physical_quantity = $physical_quantity;
	}

	public function setDate_add($date_add){
		$this->date_add = $date_add;
	}

	public function setSign($sign){
		$this->sign = $sign;
	}

	public function setPrice_te($price_te){
		$this->price_te = $price_te;
	}

	public function setLast_wa($last_wa){
		$this->last_wa = $last_wa;
	}

	public function setCurrent_wa($current_wa){
		$this->current_wa = $current_wa;
	}

	public function setReferer($referer){
		$this->referer = $referer;
	}

	/* getters */
	public function getId_stock_mvt($id_stock_mvt){
		 return $this->id_stock_mvt;
	}

	public function getId_stock($id_stock){
		 return $this->id_stock;
	}

	public function getId_order($id_order){
		 return $this->id_order;
	}

	public function getId_supply_order($id_supply_order){
		 return $this->id_supply_order;
	}

	public function getId_stock_mvt_reason($id_stock_mvt_reason){
		 return $this->id_stock_mvt_reason;
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

	public function getPhysical_quantity($physical_quantity){
		 return $this->physical_quantity;
	}

	public function getDate_add($date_add){
		 return $this->date_add;
	}

	public function getSign($sign){
		 return $this->sign;
	}

	public function getPrice_te($price_te){
		 return $this->price_te;
	}

	public function getLast_wa($last_wa){
		 return $this->last_wa;
	}

	public function getCurrent_wa($current_wa){
		 return $this->current_wa;
	}

	public function getReferer($referer){
		 return $this->referer;
	}



}