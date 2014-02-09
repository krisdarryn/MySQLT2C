<?php

class Ps_zone{


	/* fields */
	private $id_zone
	private $name
	private $active

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_zone($id_zone){
		$this->id_zone = $id_zone;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function setActive($active){
		$this->active = $active;
	}

	/* getters */
	public function getId_zone($id_zone){
		 return $this->id_zone;
	}

	public function getName($name){
		 return $this->name;
	}

	public function getActive($active){
		 return $this->active;
	}



}