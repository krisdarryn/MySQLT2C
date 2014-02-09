<?php

class Ps_compare_product{


	/* fields */
	private $id_compare
	private $id_product
	private $date_add
	private $date_upd

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_compare($id_compare){
		$this->id_compare = $id_compare;
	}

	public function setId_product($id_product){
		$this->id_product = $id_product;
	}

	public function setDate_add($date_add){
		$this->date_add = $date_add;
	}

	public function setDate_upd($date_upd){
		$this->date_upd = $date_upd;
	}

	/* getters */
	public function getId_compare($id_compare){
		 return $this->id_compare;
	}

	public function getId_product($id_product){
		 return $this->id_product;
	}

	public function getDate_add($date_add){
		 return $this->date_add;
	}

	public function getDate_upd($date_upd){
		 return $this->date_upd;
	}



}