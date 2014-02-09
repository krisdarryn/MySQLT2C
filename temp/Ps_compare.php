<?php

class Ps_compare{


	/* fields */
	private $id_compare
	private $id_customer

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_compare($id_compare){
		$this->id_compare = $id_compare;
	}

	public function setId_customer($id_customer){
		$this->id_customer = $id_customer;
	}

	/* getters */
	public function getId_compare($id_compare){
		 return $this->id_compare;
	}

	public function getId_customer($id_customer){
		 return $this->id_customer;
	}



}