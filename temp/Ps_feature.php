<?php

class Ps_feature{


	/* fields */
	private $id_feature
	private $position

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_feature($id_feature){
		$this->id_feature = $id_feature;
	}

	public function setPosition($position){
		$this->position = $position;
	}

	/* getters */
	public function getId_feature($id_feature){
		 return $this->id_feature;
	}

	public function getPosition($position){
		 return $this->position;
	}



}