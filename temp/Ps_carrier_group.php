<?php

class Ps_carrier_group{


	/* fields */
	private $id_carrier
	private $id_group

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_carrier($id_carrier){
		$this->id_carrier = $id_carrier;
	}

	public function setId_group($id_group){
		$this->id_group = $id_group;
	}

	/* getters */
	public function getId_carrier($id_carrier){
		 return $this->id_carrier;
	}

	public function getId_group($id_group){
		 return $this->id_group;
	}



}