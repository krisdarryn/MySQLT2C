<?php

class Ps_contact_shop{


	/* fields */
	private $id_contact
	private $id_shop

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_contact($id_contact){
		$this->id_contact = $id_contact;
	}

	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
	}

	/* getters */
	public function getId_contact($id_contact){
		 return $this->id_contact;
	}

	public function getId_shop($id_shop){
		 return $this->id_shop;
	}



}