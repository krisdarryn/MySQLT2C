<?php

class Ps_tab_module_preference{


	/* fields */
	private $id_tab_module_preference
	private $id_employee
	private $id_tab
	private $module

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_tab_module_preference($id_tab_module_preference){
		$this->id_tab_module_preference = $id_tab_module_preference;
	}

	public function setId_employee($id_employee){
		$this->id_employee = $id_employee;
	}

	public function setId_tab($id_tab){
		$this->id_tab = $id_tab;
	}

	public function setModule($module){
		$this->module = $module;
	}

	/* getters */
	public function getId_tab_module_preference($id_tab_module_preference){
		 return $this->id_tab_module_preference;
	}

	public function getId_employee($id_employee){
		 return $this->id_employee;
	}

	public function getId_tab($id_tab){
		 return $this->id_tab;
	}

	public function getModule($module){
		 return $this->module;
	}



}