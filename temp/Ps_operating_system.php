<?php

class Ps_operating_system{


	/* fields */
	private $id_operating_system
	private $name

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_operating_system($id_operating_system){
		$this->id_operating_system = $id_operating_system;
	}

	public function setName($name){
		$this->name = $name;
	}

	/* getters */
	public function getId_operating_system($id_operating_system){
		 return $this->id_operating_system;
	}

	public function getName($name){
		 return $this->name;
	}



}