<?php

class Ps_supplier{


	/* fields */
	private $id_supplier
	private $name
	private $date_add
	private $date_upd
	private $active

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_supplier($id_supplier){
		$this->id_supplier = $id_supplier;
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
	public function getId_supplier($id_supplier){
		 return $this->id_supplier;
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