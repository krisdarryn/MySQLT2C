<?php

class Ps_attribute_group_shop{


	/* fields */
	private $id_attribute_group
	private $id_shop

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_attribute_group($id_attribute_group){
		$this->id_attribute_group = $id_attribute_group;
	}

	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
	}

	/* getters */
	public function getId_attribute_group($id_attribute_group){
		 return $this->id_attribute_group;
	}

	public function getId_shop($id_shop){
		 return $this->id_shop;
	}



}