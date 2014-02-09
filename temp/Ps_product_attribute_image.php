<?php

class Ps_product_attribute_image{


	/* fields */
	private $id_product_attribute
	private $id_image

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_product_attribute($id_product_attribute){
		$this->id_product_attribute = $id_product_attribute;
	}

	public function setId_image($id_image){
		$this->id_image = $id_image;
	}

	/* getters */
	public function getId_product_attribute($id_product_attribute){
		 return $this->id_product_attribute;
	}

	public function getId_image($id_image){
		 return $this->id_image;
	}



}