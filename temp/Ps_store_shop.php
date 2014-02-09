<?php

class Ps_store_shop{


	/* fields */
	private $id_store
	private $id_shop

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_store($id_store){
		$this->id_store = $id_store;
	}

	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
	}

	/* getters */
	public function getId_store($id_store){
		 return $this->id_store;
	}

	public function getId_shop($id_shop){
		 return $this->id_shop;
	}



}