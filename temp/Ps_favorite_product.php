<?php

class Ps_favorite_product{


	/* fields */
	private $id_favorite_product
	private $id_product
	private $id_customer
	private $id_shop
	private $date_add
	private $date_upd

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_favorite_product($id_favorite_product){
		$this->id_favorite_product = $id_favorite_product;
	}

	public function setId_product($id_product){
		$this->id_product = $id_product;
	}

	public function setId_customer($id_customer){
		$this->id_customer = $id_customer;
	}

	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
	}

	public function setDate_add($date_add){
		$this->date_add = $date_add;
	}

	public function setDate_upd($date_upd){
		$this->date_upd = $date_upd;
	}

	/* getters */
	public function getId_favorite_product($id_favorite_product){
		 return $this->id_favorite_product;
	}

	public function getId_product($id_product){
		 return $this->id_product;
	}

	public function getId_customer($id_customer){
		 return $this->id_customer;
	}

	public function getId_shop($id_shop){
		 return $this->id_shop;
	}

	public function getDate_add($date_add){
		 return $this->date_add;
	}

	public function getDate_upd($date_upd){
		 return $this->date_upd;
	}



}