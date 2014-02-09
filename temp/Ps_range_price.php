<?php

class Ps_range_price{


	/* fields */
	private $id_range_price
	private $id_carrier
	private $delimiter1
	private $delimiter2

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_range_price($id_range_price){
		$this->id_range_price = $id_range_price;
	}

	public function setId_carrier($id_carrier){
		$this->id_carrier = $id_carrier;
	}

	public function setDelimiter1($delimiter1){
		$this->delimiter1 = $delimiter1;
	}

	public function setDelimiter2($delimiter2){
		$this->delimiter2 = $delimiter2;
	}

	/* getters */
	public function getId_range_price($id_range_price){
		 return $this->id_range_price;
	}

	public function getId_carrier($id_carrier){
		 return $this->id_carrier;
	}

	public function getDelimiter1($delimiter1){
		 return $this->delimiter1;
	}

	public function getDelimiter2($delimiter2){
		 return $this->delimiter2;
	}



}