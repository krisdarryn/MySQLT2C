<?php

class Ps_scene{


	/* fields */
	private $id_scene
	private $active

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_scene($id_scene){
		$this->id_scene = $id_scene;
	}

	public function setActive($active){
		$this->active = $active;
	}

	/* getters */
	public function getId_scene($id_scene){
		 return $this->id_scene;
	}

	public function getActive($active){
		 return $this->active;
	}



}