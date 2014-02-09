<?php

class Ps_accessory{


	/* fields */
	private $id_product_1
	private $id_product_2

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_product_1($id_product_1){
		$this->id_product_1 = $id_product_1;
	}

	public function setId_product_2($id_product_2){
		$this->id_product_2 = $id_product_2;
	}

	/* getters */
	public function getId_product_1($id_product_1){
		 return $this->id_product_1;
	}

	public function getId_product_2($id_product_2){
		 return $this->id_product_2;
	}



}