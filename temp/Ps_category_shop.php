<?php

class Ps_category_shop{


	/* fields */
	private $id_category
	private $id_shop
	private $position

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_category($id_category){
		$this->id_category = $id_category;
	}

	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
	}

	public function setPosition($position){
		$this->position = $position;
	}

	/* getters */
	public function getId_category($id_category){
		 return $this->id_category;
	}

	public function getId_shop($id_shop){
		 return $this->id_shop;
	}

	public function getPosition($position){
		 return $this->position;
	}



}