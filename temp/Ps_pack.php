<?php

class Ps_pack{


	/* fields */
	private $id_product_pack
	private $id_product_item
	private $quantity

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_product_pack($id_product_pack){
		$this->id_product_pack = $id_product_pack;
	}

	public function setId_product_item($id_product_item){
		$this->id_product_item = $id_product_item;
	}

	public function setQuantity($quantity){
		$this->quantity = $quantity;
	}

	/* getters */
	public function getId_product_pack($id_product_pack){
		 return $this->id_product_pack;
	}

	public function getId_product_item($id_product_item){
		 return $this->id_product_item;
	}

	public function getQuantity($quantity){
		 return $this->quantity;
	}



}