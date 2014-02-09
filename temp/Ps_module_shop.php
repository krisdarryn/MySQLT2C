<?php

class Ps_module_shop{


	/* fields */
	private $id_module
	private $id_shop

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_module($id_module){
		$this->id_module = $id_module;
	}

	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
	}

	/* getters */
	public function getId_module($id_module){
		 return $this->id_module;
	}

	public function getId_shop($id_shop){
		 return $this->id_shop;
	}



}