<?php

class Ps_tax{


	/* fields */
	private $id_tax
	private $rate
	private $active
	private $deleted

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_tax($id_tax){
		$this->id_tax = $id_tax;
	}

	public function setRate($rate){
		$this->rate = $rate;
	}

	public function setActive($active){
		$this->active = $active;
	}

	public function setDeleted($deleted){
		$this->deleted = $deleted;
	}

	/* getters */
	public function getId_tax($id_tax){
		 return $this->id_tax;
	}

	public function getRate($rate){
		 return $this->rate;
	}

	public function getActive($active){
		 return $this->active;
	}

	public function getDeleted($deleted){
		 return $this->deleted;
	}



}