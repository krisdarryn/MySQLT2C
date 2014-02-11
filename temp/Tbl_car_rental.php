<?php

class Tbl_car_rental{


	/* fields */
	private $reservation_id
	private $company_name
	private $car_brand
	private $start_date
	private $end_date
	private $bureau_address
	private $price
	private $arranged_by

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setReservation_id($reservation_id){
		$this->reservation_id = $reservation_id;
	}

	public function setCompany_name($company_name){
		$this->company_name = $company_name;
	}

	public function setCar_brand($car_brand){
		$this->car_brand = $car_brand;
	}

	public function setStart_date($start_date){
		$this->start_date = $start_date;
	}

	public function setEnd_date($end_date){
		$this->end_date = $end_date;
	}

	public function setBureau_address($bureau_address){
		$this->bureau_address = $bureau_address;
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

	public function getCompany_name($company_name){
		 return $this->company_name;
	}

	public function getCar_brand($car_brand){
		 return $this->car_brand;
	}

	public function getStart_date($start_date){
		 return $this->start_date;
	}

	public function getEnd_date($end_date){
		 return $this->end_date;
	}

	public function getBureau_address($bureau_address){
		 return $this->bureau_address;
	}

	public function getPrice($price){
		 return $this->price;
	}

	public function getArranged_by($arranged_by){
		 return $this->arranged_by;
	}



}