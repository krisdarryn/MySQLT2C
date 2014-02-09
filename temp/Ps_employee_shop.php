<?php

class Ps_employee_shop{


	/* fields */
	private $id_employee
	private $id_shop

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_employee($id_employee){
		$this->id_employee = $id_employee;
	}

	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
	}

	/* getters */
	public function getId_employee($id_employee){
		 return $this->id_employee;
	}

	public function getId_shop($id_shop){
		 return $this->id_shop;
	}



}