<?php

class Ps_condition_advice{


	/* fields */
	private $id_condition
	private $id_advice
	private $display

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_condition($id_condition){
		$this->id_condition = $id_condition;
	}

	public function setId_advice($id_advice){
		$this->id_advice = $id_advice;
	}

	public function setDisplay($display){
		$this->display = $display;
	}

	/* getters */
	public function getId_condition($id_condition){
		 return $this->id_condition;
	}

	public function getId_advice($id_advice){
		 return $this->id_advice;
	}

	public function getDisplay($display){
		 return $this->display;
	}



}