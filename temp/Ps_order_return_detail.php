<?php

class Ps_order_return_detail{


	/* fields */
	private $id_order_return
	private $id_order_detail
	private $id_customization
	private $product_quantity

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_order_return($id_order_return){
		$this->id_order_return = $id_order_return;
	}

	public function setId_order_detail($id_order_detail){
		$this->id_order_detail = $id_order_detail;
	}

	public function setId_customization($id_customization){
		$this->id_customization = $id_customization;
	}

	public function setProduct_quantity($product_quantity){
		$this->product_quantity = $product_quantity;
	}

	/* getters */
	public function getId_order_return($id_order_return){
		 return $this->id_order_return;
	}

	public function getId_order_detail($id_order_detail){
		 return $this->id_order_detail;
	}

	public function getId_customization($id_customization){
		 return $this->id_customization;
	}

	public function getProduct_quantity($product_quantity){
		 return $this->product_quantity;
	}



}