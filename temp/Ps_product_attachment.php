<?php

class Ps_product_attachment{


	/* fields */
	private $id_product
	private $id_attachment

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_product($id_product){
		$this->id_product = $id_product;
	}

	public function setId_attachment($id_attachment){
		$this->id_attachment = $id_attachment;
	}

	/* getters */
	public function getId_product($id_product){
		 return $this->id_product;
	}

	public function getId_attachment($id_attachment){
		 return $this->id_attachment;
	}



}