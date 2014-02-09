<?php

class Ps_linksmenutop_lang{


	/* fields */
	private $id_linksmenutop
	private $id_lang
	private $id_shop
	private $label
	private $link

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_linksmenutop($id_linksmenutop){
		$this->id_linksmenutop = $id_linksmenutop;
	}

	public function setId_lang($id_lang){
		$this->id_lang = $id_lang;
	}

	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
	}

	public function setLabel($label){
		$this->label = $label;
	}

	public function setLink($link){
		$this->link = $link;
	}

	/* getters */
	public function getId_linksmenutop($id_linksmenutop){
		 return $this->id_linksmenutop;
	}

	public function getId_lang($id_lang){
		 return $this->id_lang;
	}

	public function getId_shop($id_shop){
		 return $this->id_shop;
	}

	public function getLabel($label){
		 return $this->label;
	}

	public function getLink($link){
		 return $this->link;
	}



}