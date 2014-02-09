<?php

class Ps_homeslider_slides{


	/* fields */
	private $id_homeslider_slides
	private $position
	private $active

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_homeslider_slides($id_homeslider_slides){
		$this->id_homeslider_slides = $id_homeslider_slides;
	}

	public function setPosition($position){
		$this->position = $position;
	}

	public function setActive($active){
		$this->active = $active;
	}

	/* getters */
	public function getId_homeslider_slides($id_homeslider_slides){
		 return $this->id_homeslider_slides;
	}

	public function getPosition($position){
		 return $this->position;
	}

	public function getActive($active){
		 return $this->active;
	}



}