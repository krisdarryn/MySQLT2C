<?php

class Ps_warehouse{


	/* fields */
	private $id_warehouse
	private $id_currency
	private $id_address
	private $id_employee
	private $reference
	private $name
	private $management_type
	private $deleted

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_warehouse($id_warehouse){
		$this->id_warehouse = $id_warehouse;
	}

	public function setId_currency($id_currency){
		$this->id_currency = $id_currency;
	}

	public function setId_address($id_address){
		$this->id_address = $id_address;
	}

	public function setId_employee($id_employee){
		$this->id_employee = $id_employee;
	}

	public function setReference($reference){
		$this->reference = $reference;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function setManagement_type($management_type){
		$this->management_type = $management_type;
	}

	public function setDeleted($deleted){
		$this->deleted = $deleted;
	}

	/* getters */
	public function getId_warehouse($id_warehouse){
		 return $this->id_warehouse;
	}

	public function getId_currency($id_currency){
		 return $this->id_currency;
	}

	public function getId_address($id_address){
		 return $this->id_address;
	}

	public function getId_employee($id_employee){
		 return $this->id_employee;
	}

	public function getReference($reference){
		 return $this->reference;
	}

	public function getName($name){
		 return $this->name;
	}

	public function getManagement_type($management_type){
		 return $this->management_type;
	}

	public function getDeleted($deleted){
		 return $this->deleted;
	}



}