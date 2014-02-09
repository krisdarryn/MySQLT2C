<?php

class Ps_address_format{


	/* fields */
	private $id_country
	private $format

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_country($id_country){
		$this->id_country = $id_country;
	}

	public function setFormat($format){
		$this->format = $format;
	}

	/* getters */
	public function getId_country($id_country){
		 return $this->id_country;
	}

	public function getFormat($format){
		 return $this->format;
	}



}