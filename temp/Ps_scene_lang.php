<?php

class Ps_scene_lang{


	/* fields */
	private $id_scene
	private $id_lang
	private $name

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_scene($id_scene){
		$this->id_scene = $id_scene;
	}

	public function setId_lang($id_lang){
		$this->id_lang = $id_lang;
	}

	public function setName($name){
		$this->name = $name;
	}

	/* getters */
	public function getId_scene($id_scene){
		 return $this->id_scene;
	}

	public function getId_lang($id_lang){
		 return $this->id_lang;
	}

	public function getName($name){
		 return $this->name;
	}



}