<?php

class Ps_store{


	/* fields */
	private $id_store
	private $id_country
	private $id_state
	private $name
	private $address1
	private $address2
	private $city
	private $postcode
	private $latitude
	private $longitude
	private $hours
	private $phone
	private $fax
	private $email
	private $note
	private $active
	private $date_add
	private $date_upd

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_store($id_store){
		$this->id_store = $id_store;
	}

	public function setId_country($id_country){
		$this->id_country = $id_country;
	}

	public function setId_state($id_state){
		$this->id_state = $id_state;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function setAddress1($address1){
		$this->address1 = $address1;
	}

	public function setAddress2($address2){
		$this->address2 = $address2;
	}

	public function setCity($city){
		$this->city = $city;
	}

	public function setPostcode($postcode){
		$this->postcode = $postcode;
	}

	public function setLatitude($latitude){
		$this->latitude = $latitude;
	}

	public function setLongitude($longitude){
		$this->longitude = $longitude;
	}

	public function setHours($hours){
		$this->hours = $hours;
	}

	public function setPhone($phone){
		$this->phone = $phone;
	}

	public function setFax($fax){
		$this->fax = $fax;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function setNote($note){
		$this->note = $note;
	}

	public function setActive($active){
		$this->active = $active;
	}

	public function setDate_add($date_add){
		$this->date_add = $date_add;
	}

	public function setDate_upd($date_upd){
		$this->date_upd = $date_upd;
	}

	/* getters */
	public function getId_store($id_store){
		 return $this->id_store;
	}

	public function getId_country($id_country){
		 return $this->id_country;
	}

	public function getId_state($id_state){
		 return $this->id_state;
	}

	public function getName($name){
		 return $this->name;
	}

	public function getAddress1($address1){
		 return $this->address1;
	}

	public function getAddress2($address2){
		 return $this->address2;
	}

	public function getCity($city){
		 return $this->city;
	}

	public function getPostcode($postcode){
		 return $this->postcode;
	}

	public function getLatitude($latitude){
		 return $this->latitude;
	}

	public function getLongitude($longitude){
		 return $this->longitude;
	}

	public function getHours($hours){
		 return $this->hours;
	}

	public function getPhone($phone){
		 return $this->phone;
	}

	public function getFax($fax){
		 return $this->fax;
	}

	public function getEmail($email){
		 return $this->email;
	}

	public function getNote($note){
		 return $this->note;
	}

	public function getActive($active){
		 return $this->active;
	}

	public function getDate_add($date_add){
		 return $this->date_add;
	}

	public function getDate_upd($date_upd){
		 return $this->date_upd;
	}



}