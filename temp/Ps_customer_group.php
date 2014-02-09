<?php

class Ps_customer_group{


	/* fields */
	private $id_customer
	private $id_group

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_customer($id_customer){
		$this->id_customer = $id_customer;
	}

	public function setId_group($id_group){
		$this->id_group = $id_group;
	}

	/* getters */
	public function getId_customer($id_customer){
		 return $this->id_customer;
	}

	public function getId_group($id_group){
		 return $this->id_group;
	}



}