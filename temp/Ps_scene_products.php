<?php

class Ps_scene_products{


	/* fields */
	private $id_scene
	private $id_product
	private $x_axis
	private $y_axis
	private $zone_width
	private $zone_height

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_scene($id_scene){
		$this->id_scene = $id_scene;
	}

	public function setId_product($id_product){
		$this->id_product = $id_product;
	}

	public function setX_axis($x_axis){
		$this->x_axis = $x_axis;
	}

	public function setY_axis($y_axis){
		$this->y_axis = $y_axis;
	}

	public function setZone_width($zone_width){
		$this->zone_width = $zone_width;
	}

	public function setZone_height($zone_height){
		$this->zone_height = $zone_height;
	}

	/* getters */
	public function getId_scene($id_scene){
		 return $this->id_scene;
	}

	public function getId_product($id_product){
		 return $this->id_product;
	}

	public function getX_axis($x_axis){
		 return $this->x_axis;
	}

	public function getY_axis($y_axis){
		 return $this->y_axis;
	}

	public function getZone_width($zone_width){
		 return $this->zone_width;
	}

	public function getZone_height($zone_height){
		 return $this->zone_height;
	}



}