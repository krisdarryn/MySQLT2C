<?php

class Ps_attribute_shop{


	/* fields */
	private $id_attribute
	private $id_shop

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_attribute($id_attribute){
		$this->id_attribute = $id_attribute;
	}

	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
	}

	/* getters */
	public function getId_attribute($id_attribute){
		 return $this->id_attribute;
	}

	public function getId_shop($id_shop){
		 return $this->id_shop;
	}



}