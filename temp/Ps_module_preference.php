<?php

class Ps_module_preference{


	/* fields */
	private $id_module_preference
	private $id_employee
	private $module
	private $interest
	private $favorite

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_module_preference($id_module_preference){
		$this->id_module_preference = $id_module_preference;
	}

	public function setId_employee($id_employee){
		$this->id_employee = $id_employee;
	}

	public function setModule($module){
		$this->module = $module;
	}

	public function setInterest($interest){
		$this->interest = $interest;
	}

	public function setFavorite($favorite){
		$this->favorite = $favorite;
	}

	/* getters */
	public function getId_module_preference($id_module_preference){
		 return $this->id_module_preference;
	}

	public function getId_employee($id_employee){
		 return $this->id_employee;
	}

	public function getModule($module){
		 return $this->module;
	}

	public function getInterest($interest){
		 return $this->interest;
	}

	public function getFavorite($favorite){
		 return $this->favorite;
	}



}