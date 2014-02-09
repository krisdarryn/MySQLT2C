<?php

class Ps_gender{


	/* fields */
	private $id_gender
	private $type

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_gender($id_gender){
		$this->id_gender = $id_gender;
	}

	public function setType($type){
		$this->type = $type;
	}

	/* getters */
	public function getId_gender($id_gender){
		 return $this->id_gender;
	}

	public function getType($type){
		 return $this->type;
	}



}