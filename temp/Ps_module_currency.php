<?php

class Ps_module_currency{


	/* fields */
	private $id_module
	private $id_shop
	private $id_currency

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

	public function setId_currency($id_currency){
		$this->id_currency = $id_currency;
	}

	/* getters */
	public function getId_module($id_module){
		 return $this->id_module;
	}

	public function getId_shop($id_shop){
		 return $this->id_shop;
	}

	public function getId_currency($id_currency){
		 return $this->id_currency;
	}



}