<?php

class Tbl_tour_reservation{


	/* fields */
	private $reservation_id
	private $start_date
	private $end_date
	private $price
	private $arranged_by

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setReservation_id($reservation_id){
		$this->reservation_id = $reservation_id;
	}

	public function setStart_date($start_date){
		$this->start_date = $start_date;
	}

	public function setEnd_date($end_date){
		$this->end_date = $end_date;
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

	public function getStart_date($start_date){
		 return $this->start_date;
	}

	public function getEnd_date($end_date){
		 return $this->end_date;
	}

	public function getPrice($price){
		 return $this->price;
	}

	public function getArranged_by($arranged_by){
		 return $this->arranged_by;
	}



}