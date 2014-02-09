<?php

class Ps_homeslider_slides_lang{


	/* fields */
	private $id_homeslider_slides
	private $id_lang
	private $title
	private $description
	private $legend
	private $url
	private $image

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_homeslider_slides($id_homeslider_slides){
		$this->id_homeslider_slides = $id_homeslider_slides;
	}

	public function setId_lang($id_lang){
		$this->id_lang = $id_lang;
	}

	public function setTitle($title){
		$this->title = $title;
	}

	public function setDescription($description){
		$this->description = $description;
	}

	public function setLegend($legend){
		$this->legend = $legend;
	}

	public function setUrl($url){
		$this->url = $url;
	}

	public function setImage($image){
		$this->image = $image;
	}

	/* getters */
	public function getId_homeslider_slides($id_homeslider_slides){
		 return $this->id_homeslider_slides;
	}

	public function getId_lang($id_lang){
		 return $this->id_lang;
	}

	public function getTitle($title){
		 return $this->title;
	}

	public function getDescription($description){
		 return $this->description;
	}

	public function getLegend($legend){
		 return $this->legend;
	}

	public function getUrl($url){
		 return $this->url;
	}

	public function getImage($image){
		 return $this->image;
	}



}