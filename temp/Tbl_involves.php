<?php

class Tbl_involves{


	/* fields */
	private $fk_reservation_id
	private $fk_touristic_place_id

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setFk_reservation_id($fk_reservation_id){
		$this->fk_reservation_id = $fk_reservation_id;
	}

	public function setFk_touristic_place_id($fk_touristic_place_id){
		$this->fk_touristic_place_id = $fk_touristic_place_id;
	}

	/* getters */
	public function getFk_reservation_id($fk_reservation_id){
		 return $this->fk_reservation_id;
	}

	public function getFk_touristic_place_id($fk_touristic_place_id){
		 return $this->fk_touristic_place_id;
	}



}