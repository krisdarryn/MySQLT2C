<?php

class Ps_address{


	/* fields */
	private $id_address
	private $id_country
	private $id_state
	private $id_customer
	private $id_manufacturer
	private $id_supplier
	private $id_warehouse
	private $alias
	private $company
	private $lastname
	private $firstname
	private $address1
	private $address2
	private $postcode
	private $city
	private $other
	private $phone
	private $phone_mobile
	private $vat_number
	private $dni
	private $date_add
	private $date_upd
	private $active
	private $deleted

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_address($id_address){
		$this->id_address = $id_address;
	}

	public function setId_country($id_country){
		$this->id_country = $id_country;
	}

	public function setId_state($id_state){
		$this->id_state = $id_state;
	}

	public function setId_customer($id_customer){
		$this->id_customer = $id_customer;
	}

	public function setId_manufacturer($id_manufacturer){
		$this->id_manufacturer = $id_manufacturer;
	}

	public function setId_supplier($id_supplier){
		$this->id_supplier = $id_supplier;
	}

	public function setId_warehouse($id_warehouse){
		$this->id_warehouse = $id_warehouse;
	}

	public function setAlias($alias){
		$this->alias = $alias;
	}

	public function setCompany($company){
		$this->company = $company;
	}

	public function setLastname($lastname){
		$this->lastname = $lastname;
	}

	public function setFirstname($firstname){
		$this->firstname = $firstname;
	}

	public function setAddress1($address1){
		$this->address1 = $address1;
	}

	public function setAddress2($address2){
		$this->address2 = $address2;
	}

	public function setPostcode($postcode){
		$this->postcode = $postcode;
	}

	public function setCity($city){
		$this->city = $city;
	}

	public function setOther($other){
		$this->other = $other;
	}

	public function setPhone($phone){
		$this->phone = $phone;
	}

	public function setPhone_mobile($phone_mobile){
		$this->phone_mobile = $phone_mobile;
	}

	public function setVat_number($vat_number){
		$this->vat_number = $vat_number;
	}

	public function setDni($dni){
		$this->dni = $dni;
	}

	public function setDate_add($date_add){
		$this->date_add = $date_add;
	}

	public function setDate_upd($date_upd){
		$this->date_upd = $date_upd;
	}

	public function setActive($active){
		$this->active = $active;
	}

	public function setDeleted($deleted){
		$this->deleted = $deleted;
	}

	/* getters */
	public function getId_address($id_address){
		 return $this->id_address;
	}

	public function getId_country($id_country){
		 return $this->id_country;
	}

	public function getId_state($id_state){
		 return $this->id_state;
	}

	public function getId_customer($id_customer){
		 return $this->id_customer;
	}

	public function getId_manufacturer($id_manufacturer){
		 return $this->id_manufacturer;
	}

	public function getId_supplier($id_supplier){
		 return $this->id_supplier;
	}

	public function getId_warehouse($id_warehouse){
		 return $this->id_warehouse;
	}

	public function getAlias($alias){
		 return $this->alias;
	}

	public function getCompany($company){
		 return $this->company;
	}

	public function getLastname($lastname){
		 return $this->lastname;
	}

	public function getFirstname($firstname){
		 return $this->firstname;
	}

	public function getAddress1($address1){
		 return $this->address1;
	}

	public function getAddress2($address2){
		 return $this->address2;
	}

	public function getPostcode($postcode){
		 return $this->postcode;
	}

	public function getCity($city){
		 return $this->city;
	}

	public function getOther($other){
		 return $this->other;
	}

	public function getPhone($phone){
		 return $this->phone;
	}

	public function getPhone_mobile($phone_mobile){
		 return $this->phone_mobile;
	}

	public function getVat_number($vat_number){
		 return $this->vat_number;
	}

	public function getDni($dni){
		 return $this->dni;
	}

	public function getDate_add($date_add){
		 return $this->date_add;
	}

	public function getDate_upd($date_upd){
		 return $this->date_upd;
	}

	public function getActive($active){
		 return $this->active;
	}

	public function getDeleted($deleted){
		 return $this->deleted;
	}



}