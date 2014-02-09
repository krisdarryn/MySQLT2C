<?php

class Ps_scene_category{


	/* fields */
	private $id_scene
	private $id_category

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_scene($id_scene){
		$this->id_scene = $id_scene;
	}

	public function setId_category($id_category){
		$this->id_category = $id_category;
	}

	/* getters */
	public function getId_scene($id_scene){
		 return $this->id_scene;
	}

	public function getId_category($id_category){
		 return $this->id_category;
	}



}