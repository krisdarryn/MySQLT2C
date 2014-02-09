<?php

class Ps_feature_shop{


	/* fields */
	private $id_feature
	private $id_shop

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_feature($id_feature){
		$this->id_feature = $id_feature;
	}

	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
	}

	/* getters */
	public function getId_feature($id_feature){
		 return $this->id_feature;
	}

	public function getId_shop($id_shop){
		 return $this->id_shop;
	}



}