<?php

class Ps_image_lang{


	/* fields */
	private $id_image
	private $id_lang
	private $legend

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_image($id_image){
		$this->id_image = $id_image;
	}

	public function setId_lang($id_lang){
		$this->id_lang = $id_lang;
	}

	public function setLegend($legend){
		$this->legend = $legend;
	}

	/* getters */
	public function getId_image($id_image){
		 return $this->id_image;
	}

	public function getId_lang($id_lang){
		 return $this->id_lang;
	}

	public function getLegend($legend){
		 return $this->legend;
	}



}