<?php

class Ps_supplier_shop{


	/* fields */
	private $id_supplier
	private $id_shop

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_supplier($id_supplier){
		$this->id_supplier = $id_supplier;
	}

	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
	}

	/* getters */
	public function getId_supplier($id_supplier){
		 return $this->id_supplier;
	}

	public function getId_shop($id_shop){
		 return $this->id_shop;
	}



}