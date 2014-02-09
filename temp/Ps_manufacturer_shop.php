<?php

class Ps_manufacturer_shop{


	/* fields */
	private $id_manufacturer
	private $id_shop

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_manufacturer($id_manufacturer){
		$this->id_manufacturer = $id_manufacturer;
	}

	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
	}

	/* getters */
	public function getId_manufacturer($id_manufacturer){
		 return $this->id_manufacturer;
	}

	public function getId_shop($id_shop){
		 return $this->id_shop;
	}



}