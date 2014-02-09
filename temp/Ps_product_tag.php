<?php

class Ps_product_tag{


	/* fields */
	private $id_product
	private $id_tag

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_product($id_product){
		$this->id_product = $id_product;
	}

	public function setId_tag($id_tag){
		$this->id_tag = $id_tag;
	}

	/* getters */
	public function getId_product($id_product){
		 return $this->id_product;
	}

	public function getId_tag($id_tag){
		 return $this->id_tag;
	}



}