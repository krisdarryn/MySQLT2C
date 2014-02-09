<?php

class Ps_scene_shop{


	/* fields */
	private $id_scene
	private $id_shop

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_scene($id_scene){
		$this->id_scene = $id_scene;
	}

	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
	}

	/* getters */
	public function getId_scene($id_scene){
		 return $this->id_scene;
	}

	public function getId_shop($id_shop){
		 return $this->id_shop;
	}



}