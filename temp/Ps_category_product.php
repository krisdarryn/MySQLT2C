<?php

class Ps_category_product{


	/* fields */
	private $id_category
	private $id_product
	private $position

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_category($id_category){
		$this->id_category = $id_category;
	}

	public function setId_product($id_product){
		$this->id_product = $id_product;
	}

	public function setPosition($position){
		$this->position = $position;
	}

	/* getters */
	public function getId_category($id_category){
		 return $this->id_category;
	}

	public function getId_product($id_product){
		 return $this->id_product;
	}

	public function getPosition($position){
		 return $this->position;
	}



}