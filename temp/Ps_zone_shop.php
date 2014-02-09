<?php

class Ps_zone_shop{


	/* fields */
	private $id_zone
	private $id_shop

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_zone($id_zone){
		$this->id_zone = $id_zone;
	}

	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
	}

	/* getters */
	public function getId_zone($id_zone){
		 return $this->id_zone;
	}

	public function getId_shop($id_shop){
		 return $this->id_shop;
	}



}