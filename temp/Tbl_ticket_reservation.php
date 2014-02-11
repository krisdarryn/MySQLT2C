<?php

class Tbl_ticket_reservation{


	/* fields */
	private $reservation_id
	private $transformation_type
	private $date
	private $departure_place
	private $arrival_place
	private $company_name
	private $price
	private $arranged_by

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setReservation_id($reservation_id){
		$this->reservation_id = $reservation_id;
	}

	public function setTransformation_type($transformation_type){
		$this->transformation_type = $transformation_type;
	}

	public function setDate($date){
		$this->date = $date;
	}

	public function setDeparture_place($departure_place){
		$this->departure_place = $departure_place;
	}

	public function setArrival_place($arrival_place){
		$this->arrival_place = $arrival_place;
	}

	public function setCompany_name($company_name){
		$this->company_name = $company_name;
	}

	public function setPrice($price){
		$this->price = $price;
	}

	public function setArranged_by($arranged_by){
		$this->arranged_by = $arranged_by;
	}

	/* getters */
	public function getReservation_id($reservation_id){
		 return $this->reservation_id;
	}

	public function getTransformation_type($transformation_type){
		 return $this->transformation_type;
	}

	public function getDate($date){
		 return $this->date;
	}

	public function getDeparture_place($departure_place){
		 return $this->departure_place;
	}

	public function getArrival_place($arrival_place){
		 return $this->arrival_place;
	}

	public function getCompany_name($company_name){
		 return $this->company_name;
	}

	public function getPrice($price){
		 return $this->price;
	}

	public function getArranged_by($arranged_by){
		 return $this->arranged_by;
	}



}