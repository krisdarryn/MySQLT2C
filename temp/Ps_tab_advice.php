<?php

class Ps_tab_advice{


	/* fields */
	private $id_tab
	private $id_advice

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_tab($id_tab){
		$this->id_tab = $id_tab;
	}

	public function setId_advice($id_advice){
		$this->id_advice = $id_advice;
	}

	/* getters */
	public function getId_tab($id_tab){
		 return $this->id_tab;
	}

	public function getId_advice($id_advice){
		 return $this->id_advice;
	}



}