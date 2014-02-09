<?php

class Ps_product_sale{


	/* fields */
	private $id_product
	private $quantity
	private $sale_nbr
	private $date_upd

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_product($id_product){
		$this->id_product = $id_product;
	}

	public function setQuantity($quantity){
		$this->quantity = $quantity;
	}

	public function setSale_nbr($sale_nbr){
		$this->sale_nbr = $sale_nbr;
	}

	public function setDate_upd($date_upd){
		$this->date_upd = $date_upd;
	}

	/* getters */
	public function getId_product($id_product){
		 return $this->id_product;
	}

	public function getQuantity($quantity){
		 return $this->quantity;
	}

	public function getSale_nbr($sale_nbr){
		 return $this->sale_nbr;
	}

	public function getDate_upd($date_upd){
		 return $this->date_upd;
	}



}