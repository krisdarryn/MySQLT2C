<?php

class Ps_attachment_lang{


	/* fields */
	private $id_attachment
	private $id_lang
	private $name
	private $description

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_attachment($id_attachment){
		$this->id_attachment = $id_attachment;
	}

	public function setId_lang($id_lang){
		$this->id_lang = $id_lang;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function setDescription($description){
		$this->description = $description;
	}

	/* getters */
	public function getId_attachment($id_attachment){
		 return $this->id_attachment;
	}

	public function getId_lang($id_lang){
		 return $this->id_lang;
	}

	public function getName($name){
		 return $this->name;
	}

	public function getDescription($description){
		 return $this->description;
	}



}