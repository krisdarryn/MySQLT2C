<?php

class Ps_timezone{


	/* fields */
	private $id_timezone
	private $name

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_timezone($id_timezone){
		$this->id_timezone = $id_timezone;
	}

	public function setName($name){
		$this->name = $name;
	}

	/* getters */
	public function getId_timezone($id_timezone){
		 return $this->id_timezone;
	}

	public function getName($name){
		 return $this->name;
	}



}