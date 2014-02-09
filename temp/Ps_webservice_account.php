<?php

class Ps_webservice_account{


	/* fields */
	private $id_webservice_account
	private $key
	private $description
	private $class_name
	private $is_module
	private $module_name
	private $active

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_webservice_account($id_webservice_account){
		$this->id_webservice_account = $id_webservice_account;
	}

	public function setKey($key){
		$this->key = $key;
	}

	public function setDescription($description){
		$this->description = $description;
	}

	public function setClass_name($class_name){
		$this->class_name = $class_name;
	}

	public function setIs_module($is_module){
		$this->is_module = $is_module;
	}

	public function setModule_name($module_name){
		$this->module_name = $module_name;
	}

	public function setActive($active){
		$this->active = $active;
	}

	/* getters */
	public function getId_webservice_account($id_webservice_account){
		 return $this->id_webservice_account;
	}

	public function getKey($key){
		 return $this->key;
	}

	public function getDescription($description){
		 return $this->description;
	}

	public function getClass_name($class_name){
		 return $this->class_name;
	}

	public function getIs_module($is_module){
		 return $this->is_module;
	}

	public function getModule_name($module_name){
		 return $this->module_name;
	}

	public function getActive($active){
		 return $this->active;
	}



}