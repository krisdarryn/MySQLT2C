<?php

class Tbl_hotel{


	/* fields */
	private $hotel_id
	private $name
	private $city
	private $address
	private $number_of_rooms
	private $number_of_stars
	private $hotel_type

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setHotel_id($hotel_id){
		$this->hotel_id = $hotel_id;
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

	public function setNumber_of_rooms($number_of_rooms){
		$this->number_of_rooms = $number_of_rooms;
	}

	public function setNumber_of_stars($number_of_stars){
		$this->number_of_stars = $number_of_stars;
	}

	public function setHotel_type($hotel_type){
		$this->hotel_type = $hotel_type;
	}

	/* getters */
	public function getHotel_id($hotel_id){
		 return $this->hotel_id;
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

	public function getNumber_of_rooms($number_of_rooms){
		 return $this->number_of_rooms;
	}

	public function getNumber_of_stars($number_of_stars){
		 return $this->number_of_stars;
	}

	public function getHotel_type($hotel_type){
		 return $this->hotel_type;
	}



}