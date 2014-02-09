<?php

class Ps_contact{


	/* fields */
	private $id_contact
	private $email
	private $customer_service
	private $position

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_contact($id_contact){
		$this->id_contact = $id_contact;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function setCustomer_service($customer_service){
		$this->customer_service = $customer_service;
	}

	public function setPosition($position){
		$this->position = $position;
	}

	/* getters */
	public function getId_contact($id_contact){
		 return $this->id_contact;
	}

	public function getEmail($email){
		 return $this->email;
	}

	public function getCustomer_service($customer_service){
		 return $this->customer_service;
	}

	public function getPosition($position){
		 return $this->position;
	}



}