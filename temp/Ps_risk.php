<?php

class Ps_risk{


	/* fields */
	private $id_risk
	private $percent
	private $color

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_risk($id_risk){
		$this->id_risk = $id_risk;
	}

	public function setPercent($percent){
		$this->percent = $percent;
	}

	public function setColor($color){
		$this->color = $color;
	}

	/* getters */
	public function getId_risk($id_risk){
		 return $this->id_risk;
	}

	public function getPercent($percent){
		 return $this->percent;
	}

	public function getColor($color){
		 return $this->color;
	}



}