<?php

class Ps_customization_field{


	/* fields */
	private $id_customization_field
	private $id_product
	private $type
	private $required

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_customization_field($id_customization_field){
		$this->id_customization_field = $id_customization_field;
	}

	public function setId_product($id_product){
		$this->id_product = $id_product;
	}

	public function setType($type){
		$this->type = $type;
	}

	public function setRequired($required){
		$this->required = $required;
	}

	/* getters */
	public function getId_customization_field($id_customization_field){
		 return $this->id_customization_field;
	}

	public function getId_product($id_product){
		 return $this->id_product;
	}

	public function getType($type){
		 return $this->type;
	}

	public function getRequired($required){
		 return $this->required;
	}



}