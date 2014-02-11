<?php

class Tbl_touristic_place{


	/* fields */
	private $touristic_place_id
	private $name
	private $city
	private $address

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setTouristic_place_id($touristic_place_id){
		$this->touristic_place_id = $touristic_place_id;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function setCity($city){
		$this->city = $city;
	}

	public function setAddress($address){
		$this->address = $address;
	}

	/* getters */
	public function getTouristic_place_id($touristic_place_id){
		 return $this->touristic_place_id;
	}

	public function getName($name){
		 return $this->name;
	}

	public function getCity($city){
		 return $this->city;
	}

	public function getAddress($address){
		 return $this->address;
	}



}