<?php

class Ps_feature_value{


	/* fields */
	private $id_feature_value
	private $id_feature
	private $custom

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_feature_value($id_feature_value){
		$this->id_feature_value = $id_feature_value;
	}

	public function setId_feature($id_feature){
		$this->id_feature = $id_feature;
	}

	public function setCustom($custom){
		$this->custom = $custom;
	}

	/* getters */
	public function getId_feature_value($id_feature_value){
		 return $this->id_feature_value;
	}

	public function getId_feature($id_feature){
		 return $this->id_feature;
	}

	public function getCustom($custom){
		 return $this->custom;
	}



}