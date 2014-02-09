<?php

class Ps_warehouse_shop{


	/* fields */
	private $id_shop
	private $id_warehouse

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
	}

	public function setId_warehouse($id_warehouse){
		$this->id_warehouse = $id_warehouse;
	}

	/* getters */
	public function getId_shop($id_shop){
		 return $this->id_shop;
	}

	public function getId_warehouse($id_warehouse){
		 return $this->id_warehouse;
	}



}