<?php

class Ps_hook_module_exceptions{


	/* fields */
	private $id_hook_module_exceptions
	private $id_shop
	private $id_module
	private $id_hook
	private $file_name

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_hook_module_exceptions($id_hook_module_exceptions){
		$this->id_hook_module_exceptions = $id_hook_module_exceptions;
	}

	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
	}

	public function setId_module($id_module){
		$this->id_module = $id_module;
	}

	public function setId_hook($id_hook){
		$this->id_hook = $id_hook;
	}

	public function setFile_name($file_name){
		$this->file_name = $file_name;
	}

	/* getters */
	public function getId_hook_module_exceptions($id_hook_module_exceptions){
		 return $this->id_hook_module_exceptions;
	}

	public function getId_shop($id_shop){
		 return $this->id_shop;
	}

	public function getId_module($id_module){
		 return $this->id_module;
	}

	public function getId_hook($id_hook){
		 return $this->id_hook;
	}

	public function getFile_name($file_name){
		 return $this->file_name;
	}



}