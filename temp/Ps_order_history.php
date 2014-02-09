<?php

class Ps_order_history{


	/* fields */
	private $id_order_history
	private $id_employee
	private $id_order
	private $id_order_state
	private $date_add

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_order_history($id_order_history){
		$this->id_order_history = $id_order_history;
	}

	public function setId_employee($id_employee){
		$this->id_employee = $id_employee;
	}

	public function setId_order($id_order){
		$this->id_order = $id_order;
	}

	public function setId_order_state($id_order_state){
		$this->id_order_state = $id_order_state;
	}

	public function setDate_add($date_add){
		$this->date_add = $date_add;
	}

	/* getters */
	public function getId_order_history($id_order_history){
		 return $this->id_order_history;
	}

	public function getId_employee($id_employee){
		 return $this->id_employee;
	}

	public function getId_order($id_order){
		 return $this->id_order;
	}

	public function getId_order_state($id_order_state){
		 return $this->id_order_state;
	}

	public function getDate_add($date_add){
		 return $this->date_add;
	}



}