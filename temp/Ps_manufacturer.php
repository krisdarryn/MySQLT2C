<?php

class Ps_manufacturer{


	/* fields */
	private $id_manufacturer
	private $name
	private $date_add
	private $date_upd
	private $active

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_manufacturer($id_manufacturer){
		$this->id_manufacturer = $id_manufacturer;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function setDate_add($date_add){
		$this->date_add = $date_add;
	}

	public function setDate_upd($date_upd){
		$this->date_upd = $date_upd;
	}

	public function setActive($active){
		$this->active = $active;
	}

	/* getters */
	public function getId_manufacturer($id_manufacturer){
		 return $this->id_manufacturer;
	}

	public function getName($name){
		 return $this->name;
	}

	public function getDate_add($date_add){
		 return $this->date_add;
	}

	public function getDate_upd($date_upd){
		 return $this->date_upd;
	}

	public function getActive($active){
		 return $this->active;
	}



}