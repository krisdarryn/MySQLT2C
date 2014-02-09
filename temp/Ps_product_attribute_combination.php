<?php

class Ps_product_attribute_combination{


	/* fields */
	private $id_attribute
	private $id_product_attribute

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_attribute($id_attribute){
		$this->id_attribute = $id_attribute;
	}

	public function setId_product_attribute($id_product_attribute){
		$this->id_product_attribute = $id_product_attribute;
	}

	/* getters */
	public function getId_attribute($id_attribute){
		 return $this->id_attribute;
	}

	public function getId_product_attribute($id_product_attribute){
		 return $this->id_product_attribute;
	}



}