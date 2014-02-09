<?php

class Ps_image{


	/* fields */
	private $id_image
	private $id_product
	private $position
	private $cover

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_image($id_image){
		$this->id_image = $id_image;
	}

	public function setId_product($id_product){
		$this->id_product = $id_product;
	}

	public function setPosition($position){
		$this->position = $position;
	}

	public function setCover($cover){
		$this->cover = $cover;
	}

	/* getters */
	public function getId_image($id_image){
		 return $this->id_image;
	}

	public function getId_product($id_product){
		 return $this->id_product;
	}

	public function getPosition($position){
		 return $this->position;
	}

	public function getCover($cover){
		 return $this->cover;
	}



}