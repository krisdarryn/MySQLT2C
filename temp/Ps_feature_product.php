<?php

class Ps_feature_product{


	/* fields */
	private $id_feature
	private $id_product
	private $id_feature_value

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_feature($id_feature){
		$this->id_feature = $id_feature;
	}

	public function setId_product($id_product){
		$this->id_product = $id_product;
	}

	public function setId_feature_value($id_feature_value){
		$this->id_feature_value = $id_feature_value;
	}

	/* getters */
	public function getId_feature($id_feature){
		 return $this->id_feature;
	}

	public function getId_product($id_product){
		 return $this->id_product;
	}

	public function getId_feature_value($id_feature_value){
		 return $this->id_feature_value;
	}



}