<?php

class Ps_carrier_zone{


	/* fields */
	private $id_carrier
	private $id_zone

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_carrier($id_carrier){
		$this->id_carrier = $id_carrier;
	}

	public function setId_zone($id_zone){
		$this->id_zone = $id_zone;
	}

	/* getters */
	public function getId_carrier($id_carrier){
		 return $this->id_carrier;
	}

	public function getId_zone($id_zone){
		 return $this->id_zone;
	}



}