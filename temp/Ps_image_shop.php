<?php

class Ps_image_shop{


	/* fields */
	private $id_image
	private $id_shop
	private $cover

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_image($id_image){
		$this->id_image = $id_image;
	}

	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
	}

	public function setCover($cover){
		$this->cover = $cover;
	}

	/* getters */
	public function getId_image($id_image){
		 return $this->id_image;
	}

	public function getId_shop($id_shop){
		 return $this->id_shop;
	}

	public function getCover($cover){
		 return $this->cover;
	}



}