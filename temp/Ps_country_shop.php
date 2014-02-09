<?php

class Ps_country_shop{


	/* fields */
	private $id_country
	private $id_shop

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_country($id_country){
		$this->id_country = $id_country;
	}

	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
	}

	/* getters */
	public function getId_country($id_country){
		 return $this->id_country;
	}

	public function getId_shop($id_shop){
		 return $this->id_shop;
	}



}