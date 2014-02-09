<?php

class Ps_customized_data{


	/* fields */
	private $id_customization
	private $type
	private $index
	private $value

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_customization($id_customization){
		$this->id_customization = $id_customization;
	}

	public function setType($type){
		$this->type = $type;
	}

	public function setIndex($index){
		$this->index = $index;
	}

	public function setValue($value){
		$this->value = $value;
	}

	/* getters */
	public function getId_customization($id_customization){
		 return $this->id_customization;
	}

	public function getType($type){
		 return $this->type;
	}

	public function getIndex($index){
		 return $this->index;
	}

	public function getValue($value){
		 return $this->value;
	}



}