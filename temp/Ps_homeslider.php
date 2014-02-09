<?php

class Ps_homeslider{


	/* fields */
	private $id_homeslider_slides
	private $id_shop

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_homeslider_slides($id_homeslider_slides){
		$this->id_homeslider_slides = $id_homeslider_slides;
	}

	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
	}

	/* getters */
	public function getId_homeslider_slides($id_homeslider_slides){
		 return $this->id_homeslider_slides;
	}

	public function getId_shop($id_shop){
		 return $this->id_shop;
	}



}