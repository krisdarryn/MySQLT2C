<?php

class Ps_condition_badge{


	/* fields */
	private $id_condition
	private $id_badge

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_condition($id_condition){
		$this->id_condition = $id_condition;
	}

	public function setId_badge($id_badge){
		$this->id_badge = $id_badge;
	}

	/* getters */
	public function getId_condition($id_condition){
		 return $this->id_condition;
	}

	public function getId_badge($id_badge){
		 return $this->id_badge;
	}



}