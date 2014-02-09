<?php

class Ps_warehouse_carrier{


	/* fields */
	private $id_carrier
	private $id_warehouse

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_carrier($id_carrier){
		$this->id_carrier = $id_carrier;
	}

	public function setId_warehouse($id_warehouse){
		$this->id_warehouse = $id_warehouse;
	}

	/* getters */
	public function getId_carrier($id_carrier){
		 return $this->id_carrier;
	}

	public function getId_warehouse($id_warehouse){
		 return $this->id_warehouse;
	}



}