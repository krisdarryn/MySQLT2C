<?php

class Tbl_near_to{


	/* fields */
	private $fk_hotel_id
	private $fk_touristic_place_id

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setFk_hotel_id($fk_hotel_id){
		$this->fk_hotel_id = $fk_hotel_id;
	}

	public function setFk_touristic_place_id($fk_touristic_place_id){
		$this->fk_touristic_place_id = $fk_touristic_place_id;
	}

	/* getters */
	public function getFk_hotel_id($fk_hotel_id){
		 return $this->fk_hotel_id;
	}

	public function getFk_touristic_place_id($fk_touristic_place_id){
		 return $this->fk_touristic_place_id;
	}



}